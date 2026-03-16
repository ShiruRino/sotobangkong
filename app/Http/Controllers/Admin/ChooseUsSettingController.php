<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\ChooseUsSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChooseUsSettingController extends Controller
{
    public function index()
    {
        $setting = ChooseUsSetting::first() ?? new ChooseUsSetting();
        return view('admin.choose_us.setting', compact('setting'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'subtitle' => 'nullable|string|max:255',
            'title'    => 'nullable|string|max:255',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $setting = ChooseUsSetting::first() ?? new ChooseUsSetting();

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($setting->image) {
                Storage::disk('public')->delete($setting->image);
            }
            $validated['image'] = $request->file('image')->store('chooseus', 'public');
        }

        ChooseUsSetting::updateOrCreate(['id' => 1], $validated);

        return redirect()->back()->with('success', 'Pengaturan Choose Us berhasil diperbarui.');
    }
}