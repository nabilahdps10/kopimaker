<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display contact and reservation page.
     */
    public function index()
    {
        $info = config('purwokerto');
        return view('pages.contact', [
            'info' => $info,
            'location' => $info['location'],
            'hours' => $info['opening_hours'],
        ]);
    }

    /**
     * Handle reservation form submission.
     */
    public function submitReservation(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1|max:50',
            'notes' => 'nullable|string|max:500',
        ]);

        // Construct WhatsApp URL with prefilled message
        $waMessage = "Halo El's Coffee Purwokerto, saya ingin reservasi meja:\n"
            . "• Nama: {$validated['name']}\n"
            . "• No HP/WA: {$validated['phone']}\n"
            . "• Tanggal: {$validated['date']}\n"
            . "• Jam: {$validated['time']} WIB\n"
            . "• Jumlah Orang: {$validated['guests']} orang\n"
            . "• Catatan: " . ($validated['notes'] ?? '-');

        $waUrl = "https://wa.me/" . config('purwokerto.location.whatsapp') . "?text=" . urlencode($waMessage);

        return redirect()->away($waUrl);
    }
}
