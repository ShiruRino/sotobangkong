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
     * Memuat data layanan default ke database.
     */
    public function loadDefaults()
    {
        // Data Default 1: Dine-in
        \App\Models\Service::create([
            'icon_class'  => 'fa fa-cutlery',
            'title'       => 'Makan di Tempat (Dine-in)',
            'hover_title' => 'Dine-in Nyaman', // Jika Anda memiliki kolom ini di database. Jika tidak, hapus baris ini.
            'description' => 'Nikmati soto hangat langsung di kedai kami dengan suasana yang nyaman dan bersih untuk keluarga.',
            'link'        => '#',
            'sort_order'  => 1,
            'is_active'   => true,
        ]);

        // Data Default 2: Catering
        \App\Models\Service::create([
            'icon_class'  => 'fa fa-truck',
            'title'       => 'Layanan Catering',
            'hover_title' => 'Catering Acara',
            'description' => 'Siap melayani pesanan partai besar untuk acara pernikahan, syukuran, atau meeting kantor.',
            'link'        => '#',
            'sort_order'  => 2,
            'is_active'   => true,
        ]);

        // Data Default 3: Delivery
        \App\Models\Service::create([
            'icon_class'  => 'fa fa-motorcycle',
            'title'       => 'Pesan Antar',
            'hover_title' => 'Delivery Order',
            'description' => 'Mager keluar rumah? Tenang, kami siap antar pesanan soto hangat langsung ke depan pintu Anda.',
            'link'        => '#',
            'sort_order'  => 3,
            'is_active'   => true,
        ]);

        return redirect()->route('services.index')->with('success', '3 Layanan default berhasil ditambahkan ke database!');
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