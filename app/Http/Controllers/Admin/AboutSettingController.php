<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\AboutSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSettingController extends Controller
{
    /**
     * Menampilkan halaman form edit.
     */
    public function index()
    {
        // Ambil data pertama, jika kosong, buat instance baru agar view tidak error
        $about = AboutSetting::first() ?? new AboutSetting();
        return view('admin.about.setting', compact('about'));
    }

    /**
     * Memperbarui atau membuat data baru.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'history_title'      => 'nullable|string|max:255',
            'history_content'    => 'nullable|string',
            'history_image'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'philosophy_title'   => 'nullable|string|max:255',
            'philosophy_content' => 'nullable|string',
            'philosophy_image'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $about = AboutSetting::first();

        // Handle Upload Gambar Sejarah
        if ($request->hasFile('history_image')) {
            if ($about && $about->history_image) {
                Storage::disk('public')->delete($about->history_image);
            }
            $validated['history_image'] = $request->file('history_image')->store('about', 'public');
        }

        // Handle Upload Gambar Filosofi
        if ($request->hasFile('philosophy_image')) {
            if ($about && $about->philosophy_image) {
                Storage::disk('public')->delete($about->philosophy_image);
            }
            $validated['philosophy_image'] = $request->file('philosophy_image')->store('about', 'public');
        }

        // Simpan atau Perbarui berdasarkan ID 1
        AboutSetting::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return redirect()->back()->with('success', 'Halaman Tentang Kami berhasil diperbarui.');
    }
}