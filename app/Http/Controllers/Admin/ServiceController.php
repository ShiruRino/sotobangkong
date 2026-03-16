<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('sort_order', 'asc')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon_class'  => 'required|string|max:50',
            'title'       => 'required|string|max:255',
            'hover_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link'        => 'nullable|string|max:255',
            'sort_order'  => 'integer',
            'is_active'   => 'boolean',
        ]);

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'icon_class'  => 'required|string|max:50',
            'title'       => 'required|string|max:255',
            'hover_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'link'        => 'nullable|string|max:255',
            'sort_order'  => 'integer',
        ]);

        // Cek checkbox
        $validated['is_active'] = $request->has('is_active');

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus.');
    }
}