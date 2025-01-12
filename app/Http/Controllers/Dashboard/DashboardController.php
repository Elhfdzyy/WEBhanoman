<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $reservations = Reservasi::orderBy('reservation_date', 'desc')->get();
        return view('admin.dashboard', compact('reservations'));
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
}