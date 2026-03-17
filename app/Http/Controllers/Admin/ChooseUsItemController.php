<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\ChooseUsItem;
use Illuminate\Http\Request;

class ChooseUsItemController extends Controller
{
    public function index()
    {
        $chooseUsItems = ChooseUsItem::orderBy('sort_order', 'asc')->get();
        return view('admin.choose_us.index', compact('chooseUsItems'));
    }

    public function create()
    {
        return view('admin.choose_us.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon_class'  => 'required|string|max:50',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order'  => 'integer',
            'is_active'   => 'boolean',
        ]);

        ChooseUsItem::create($validated);

        return redirect()->route('choose-us-items.index')->with('success', 'Item berhasil ditambahkan.');
    }

    public function edit(ChooseUsItem $chooseUsItem)
    {
        return view('admin.choose_us.edit', compact('chooseUsItem'));
    }

    public function update(Request $request, ChooseUsItem $chooseUsItem)
    {
        $validated = $request->validate([
            'icon_class'  => 'required|string|max:50',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order'  => 'integer',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $chooseUsItem->update($validated);

        return redirect()->route('choose-us-items.index')->with('success', 'Item berhasil diperbarui.');
    }
    /**
     * Memuat data keunggulan default ke database.
     */
    public function loadDefaults()
    {
        // Data Default 1: Resep Warisan
        \App\Models\ChooseUsItem::create([
            'icon_class'  => 'fa fa-book',
            'title'       => 'Resep Warisan',
            'description' => 'Menggunakan bumbu dan resep rahasia turun-temurun yang dijaga keasliannya sejak 1950.',
            'sort_order'  => 1,
            'is_active'   => true,
        ]);

        // Data Default 2: Bahan Segar
        \App\Models\ChooseUsItem::create([
            'icon_class'  => 'fa fa-leaf',
            'title'       => 'Bahan Segar Berkualitas',
            'description' => 'Kami selalu memastikan penggunaan daging ayam kampung pilihan dan sayuran segar setiap harinya.',
            'sort_order'  => 2,
            'is_active'   => true,
        ]);

        // Data Default 3: Pelayanan Cepat
        \App\Models\ChooseUsItem::create([
            'icon_class'  => 'fa fa-bolt',
            'title'       => 'Pelayanan Cepat',
            'description' => 'Didukung oleh pramusaji handal untuk memastikan pesanan Anda tersaji hangat, cepat, dan ramah.',
            'sort_order'  => 3,
            'is_active'   => true,
        ]);

        return redirect()->route('choose-us-items.index')->with('success', '3 Item keunggulan default berhasil ditambahkan!');
    }

    public function destroy(ChooseUsItem $chooseUsItem)
    {
        $chooseUsItem->delete();
        return redirect()->route('choose-us-items.index')->with('success', 'Item berhasil dihapus.');
    }
}