<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationApproved;


class DashboardController extends Controller
{
    public function index()
    {
        $reservations = Reservasi::orderBy('reservation_date', 'desc')->get();
        $newReservationsCount = Reservasi::where('created_at', '>=', now()->subDays(7))->count();
        $newReservations = Reservasi::where('created_at', '>=', now()->subDays(7))->get();
        return view('admin.dashboard', compact('reservations', 'newReservationsCount', 'newReservations'));
    }


    public function update(Request $request, $id)
    {
        // Validasi sesuai dengan struktur tabel
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'guests' => 'required|integer|min:1',
            'message' => 'nullable|string'
        ]);

        try {
            $reservation = Reservasi::findOrFail($id);
            
            $reservation->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'reservation_date' => $request->reservation_date,
                'reservation_time' => $request->reservation_time,
                'guests' => $request->guests,
                'message' => $request->message
            ]);

            return redirect()->route('admin.dashboard')
                           ->with('success', 'Reservation updated successfully!');

        } catch (\Exception $e) {
            Log::error('Reservation update failed: ' . $e->getMessage());
            
            return redirect()->route('admin.dashboard')
                           ->with('error', 'Failed to update reservation. Please try again.');
        }
    }
    public function destroy($id)
    {
        try {
            $reservation = Reservasi::findOrFail($id);
            $reservation->delete();

            return response()->json([
                'message' => 'Reservation deleted successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to delete reservation'
            ], 500); 
        }
    }

    public function approve(Request $request, $id)
    {
        try {
            $reservation = Reservasi::findOrFail($id);
            
            // Update the reservation status to "Approved"
            $reservation->status = 'Approved';
            $reservation->save();
            
            // Send an email notification to the customer
            $this->sendApprovalEmail($reservation);
            
            return response()->json([
                'message' => 'Reservation approved and notification sent to the customer.'
            ]);

        } catch (\Exception $e) {
            Log::error('Reservation approval failed: ' . $e->getMessage());
            
            return response()->json([
                'message' => 'Failed to approve the reservation. Please try again.'
            ], 500);
        }
    }

    private function sendApprovalEmail($reservation)
    {
        Mail::to($reservation->email)->send(new ReservationApproved($reservation));
    }

}