<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('sort_order', 'asc')->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'subtitle'   => 'nullable|string|max:255',
            'sort_order' => 'integer',
            'is_active'  => 'boolean',
            'image'      => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('galleries', 'public');
        }

        Gallery::create($validated);

        return redirect()->route('galleries.index')->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'subtitle'   => 'nullable|string|max:255',
            'sort_order' => 'integer',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
            $validated['image'] = $request->file('image')->store('galleries', 'public');
        }

        $gallery->update($validated);

        return redirect()->route('galleries.index')->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        // Hapus file fisik gambar
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }
        
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Foto galeri berhasil dihapus.');
    }
}