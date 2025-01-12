<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use App\Models\ReservasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormsController extends Controller
{
    public function showForms()
    {
        return view('forms.form', [
            'user' => Auth::user()
        ]);
    }

    public function submitForm(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'guests' => 'required|integer|min:1|max:10',
            'message' => 'nullable|string|max:500',
        ]);

        // Simpan data ke tabel reservasi
        ReservasiModel::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'reservation_date' => $validated['date'],
            'reservation_time' => $validated['time'],
            'guests' => $validated['guests'],
            'message' => $validated['message'],
        ]);

        // Redirect atau memberikan feedback
        return redirect()->route('reservasi.form')->with('success', 'Reservation successfully added!');
    }
}
