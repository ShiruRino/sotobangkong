<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\ContactSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactSettingController extends Controller
{
    /**
     * Menampilkan form pengaturan kontak.
     */
    public function index()
    {
        // Ambil data pertama, jika kosong, buat instance baru
        $contact = ContactSetting::first() ?? new ContactSetting();
        return view('admin.contact_settings.setting', compact('contact'));
    }

    /**
     * Memperbarui atau membuat data baru (updateOrCreate).
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'office_title'   => 'nullable|string|max:255',
            'address_line_1' => 'nullable|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'phone'          => 'nullable|string|max:255',
            'whatsapp'       => 'nullable|string|max:255',
            'email_1'        => 'nullable|string|max:255',
            'email_2'        => 'nullable|string|max:255',
            'hours_title'    => 'nullable|string|max:255',
            'weekday_hours'  => 'nullable|string|max:255',
            'weekend_hours'  => 'nullable|string|max:255',
            'logo_image'     => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
        ]);

        $contact = ContactSetting::first();

        // Handle Upload Logo Baru
        if ($request->hasFile('logo_image')) {
            // Hapus logo lama jika ada
            if ($contact && $contact->logo_image) {
                Storage::disk('public')->delete($contact->logo_image);
            }
            // Simpan logo baru
            $validated['logo_image'] = $request->file('logo_image')->store('settings', 'public');
        }

        // Simpan atau Perbarui berdasarkan ID 1
        ContactSetting::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return redirect()->back()->with('success', 'Informasi Kontak & Alamat berhasil diperbarui.');
    }
}