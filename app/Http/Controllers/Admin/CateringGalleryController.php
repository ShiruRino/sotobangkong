<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\CateringGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CateringGalleryController extends Controller
{
    public function index()
    {
        $caterings = CateringGallery::orderBy('sort_order', 'asc')->get();
        return view('admin.caterings.index', compact('caterings'));
    }

    public function create()
    {
        return view('admin.caterings.create');
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
            $validated['image'] = $request->file('image')->store('caterings', 'public');
        }

        CateringGallery::create($validated);

        return redirect()->route('caterings.index')->with('success', 'Dokumentasi catering berhasil ditambahkan.');
    }

    public function edit(CateringGallery $catering)
    {
        return view('admin.caterings.edit', compact('catering'));
    }

    public function update(Request $request, CateringGallery $catering)
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
            if ($catering->image) {
                Storage::disk('public')->delete($catering->image);
            }
            $validated['image'] = $request->file('image')->store('caterings', 'public');
        }

        $catering->update($validated);

        return redirect()->route('caterings.index')->with('success', 'Dokumentasi catering berhasil diperbarui.');
    }

    public function destroy(CateringGallery $catering)
    {
        if ($catering->image) {
            Storage::disk('public')->delete($catering->image);
        }
        
        $catering->delete();

        return redirect()->route('caterings.index')->with('success', 'Dokumentasi catering berhasil dihapus.');
    }
}