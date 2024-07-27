<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'service_type' => 'required|string',
            'appointment_date' => 'required|date',
            'appointment_time' => [
                'required',
                'date_format:H:i',
                function ($attribute, $value, $fail) {
                    $time = strtotime($value);
                    $start = strtotime('09:00');
                    $end = strtotime('21:00');

                    if ($time < $start || $time >= $end) {
                        $fail('The ' . $attribute . ' must be between 09:00 and 21:00.');
                    }
                },
            ],
        ]);
        // Buat reservasi tanpa _token
        Reservation::create($validatedData);

        return redirect()->back()->with('success', 'Reservation has been made successfully!');
    }
}
