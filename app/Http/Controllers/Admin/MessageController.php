<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // ==========================================
    // BAGIAN FRONTEND (PENGUNJUNG)
    // ==========================================

    /**
     * Menyimpan pesan baru dari halaman Contact.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'subjek'  => 'required|string|max:255',
            'pesan'   => 'required|string',
        ]);

        // Simpan ke database dengan mapping nama kolom
        Message::create([
            'name'    => $request->nama,
            'email'   => $request->email,
            'phone'   => $request->telepon,
            'subject' => $request->subjek,
            'message' => $request->pesan,
            'is_read' => false, // Otomatis diset belum dibaca
        ]);

        // Kembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim. Kami akan segera menghubungi Anda!');
    }


    // ==========================================
    // BAGIAN BACKEND (ADMINLTE)
    // ==========================================

    /**
     * Menampilkan daftar pesan di Admin Panel.
     */
    public function index()
    {
        // Urutkan berdasarkan yang belum dibaca (is_read = 0) di atas, 
        // lalu berdasarkan waktu terbaru
        $messages = Message::orderBy('is_read', 'asc')
                           ->orderBy('created_at', 'desc')
                           ->get();
                           
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Menampilkan detail pesan sekaligus mengubah status menjadi "Sudah Dibaca".
     */
    public function show(Message $message)
    {
        // Jika statusnya masih belum dibaca, ubah jadi sudah dibaca (true)
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.messages.show', compact('message'));
    }

    /**
     * Menghapus pesan.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Pesan berhasil dihapus.');
    }
}