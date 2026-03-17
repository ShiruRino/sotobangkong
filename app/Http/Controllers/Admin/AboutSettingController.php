<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSettingController extends Controller
{
    public function index()
    {
        $about = AboutSetting::first() ?? new AboutSetting();
        return view('admin.about.setting', compact('about'));
    }

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

        // LOGIKA HISTORY IMAGE (Hapus ke default ATAU Upload baru)
        if ($request->has('remove_history_image')) {
            if ($about && $about->history_image) {
                Storage::disk('public')->delete($about->history_image);
            }
            $validated['history_image'] = null;
        } elseif ($request->hasFile('history_image')) {
            if ($about && $about->history_image) {
                Storage::disk('public')->delete($about->history_image);
            }
            $validated['history_image'] = $request->file('history_image')->store('about', 'public');
        }

        // LOGIKA PHILOSOPHY IMAGE (Hapus ke default ATAU Upload baru)
        if ($request->has('remove_philosophy_image')) {
            if ($about && $about->philosophy_image) {
                Storage::disk('public')->delete($about->philosophy_image);
            }
            $validated['philosophy_image'] = null;
        } elseif ($request->hasFile('philosophy_image')) {
            if ($about && $about->philosophy_image) {
                Storage::disk('public')->delete($about->philosophy_image);
            }
            $validated['philosophy_image'] = $request->file('philosophy_image')->store('about', 'public');
        }

        AboutSetting::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return redirect()->back()->with('success', 'Pengaturan Tentang Kami berhasil diperbarui.');
    }
}