<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OutletController extends Controller
{
    public function index()
    {
        $outlets = Outlet::orderBy('sort_order', 'asc')->get();
        return view('admin.outlets.index', compact('outlets'));
    }

    public function create()
    {
        return view('admin.outlets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'region'        => 'required|string|max:255',
            'address'       => 'required|string',
            'opening_hours' => 'required|string|max:255',
            'map_link'      => 'nullable|url|max:255',
            'sort_order'    => 'integer',
            'is_active'     => 'boolean',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('outlets', 'public');
        }

        Outlet::create($validated);

        return redirect()->route('outlets.index')->with('success', 'Data outlet berhasil ditambahkan.');
    }

    public function edit(Outlet $outlet)
    {
        return view('admin.outlets.edit', compact('outlet'));
    }

    public function update(Request $request, Outlet $outlet)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'region'        => 'required|string|max:255',
            'address'       => 'required|string',
            'opening_hours' => 'required|string|max:255',
            'map_link'      => 'nullable|url|max:255',
            'sort_order'    => 'integer',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            if ($outlet->image) {
                Storage::disk('public')->delete($outlet->image);
            }
            $validated['image'] = $request->file('image')->store('outlets', 'public');
        }

        $outlet->update($validated);

        return redirect()->route('outlets.index')->with('success', 'Data outlet berhasil diperbarui.');
    }

    public function destroy(Outlet $outlet)
    {
        if ($outlet->image) {
            Storage::disk('public')->delete($outlet->image);
        }
        $outlet->delete();

        return redirect()->route('outlets.index')->with('success', 'Data outlet berhasil dihapus.');
    }
}