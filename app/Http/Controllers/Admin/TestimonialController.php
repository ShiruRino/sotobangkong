<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('sort_order', 'asc')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'role'       => 'nullable|string|max:255',
            'content'    => 'required|string',
            'sort_order' => 'integer',
            'is_active'  => 'boolean',
            'avatar'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // Validasi gambar
        ]);

        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('testimonials', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'role'       => 'nullable|string|max:255',
            'content'    => 'required|string',
            'sort_order' => 'integer',
            'avatar'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        // Handle upload avatar baru
        if ($request->hasFile('avatar')) {
            // Hapus avatar lama jika ada
            if ($testimonial->avatar) {
                Storage::disk('public')->delete($testimonial->avatar);
            }
            $validated['avatar'] = $request->file('avatar')->store('testimonials', 'public');
        }

        // Opsional: Jika Anda membuat checkbox "Hapus Avatar" di view seperti slider
        if ($request->has('remove_avatar')) {
            if ($testimonial->avatar) {
                Storage::disk('public')->delete($testimonial->avatar);
            }
            $validated['avatar'] = null;
        }

        $testimonial->update($validated);

        return redirect()->route('testimonials.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        // Hapus file avatar sebelum menghapus data dari database
        if ($testimonial->avatar) {
            Storage::disk('public')->delete($testimonial->avatar);
        }
        
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}