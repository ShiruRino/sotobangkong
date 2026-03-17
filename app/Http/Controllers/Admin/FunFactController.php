<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\FunFact;
use Illuminate\Http\Request;

class FunFactController extends Controller
{
    public function index()
    {
        $funFacts = FunFact::orderBy('sort_order', 'asc')->get();
        return view('admin.fun_facts.index', compact('funFacts'));
    }

    public function create()
    {
        return view('admin.fun_facts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number'     => 'required|integer',
            'title'      => 'required|string|max:255',
            'subtitle'   => 'nullable|string|max:255',
            'sort_order' => 'integer',
            'is_active'  => 'boolean',
        ]);

        FunFact::create($validated);

        return redirect()->route('fun-facts.index')->with('success', 'Fun Fact berhasil ditambahkan.');
    }

    public function edit(FunFact $funFact)
    {
        return view('admin.fun_facts.edit', compact('funFact'));
    }

    public function update(Request $request, FunFact $funFact)
    {
        $validated = $request->validate([
            'number'     => 'required|integer',
            'title'      => 'required|string|max:255',
            'subtitle'   => 'nullable|string|max:255',
            'sort_order' => 'integer',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $funFact->update($validated);

        return redirect()->route('fun-facts.index')->with('success', 'Fun Fact berhasil diperbarui.');
    }
    /**
     * Memuat data fun fact default ke database.
     */
    public function loadDefaults()
    {
        // Data Default 1
        \App\Models\FunFact::create([
            'number'     => '15',
            'title'      => 'Tahun',
            'subtitle'   => 'Berdiri',
            'sort_order' => 1,
            'is_active'  => true,
        ]);

        // Data Default 2
        \App\Models\FunFact::create([
            'number'     => '1520',
            'title'      => 'Porsi',
            'subtitle'   => 'Terjual / Hari',
            'sort_order' => 2,
            'is_active'  => true,
        ]);

        // Data Default 3
        \App\Models\FunFact::create([
            'number'     => '3',
            'title'      => 'Cabang',
            'subtitle'   => 'Restoran',
            'sort_order' => 3,
            'is_active'  => true,
        ]);

        // Data Default 4
        \App\Models\FunFact::create([
            'number'     => '99',
            'title'      => '% Pelanggan',
            'subtitle'   => 'Puas',
            'sort_order' => 4,
            'is_active'  => true,
        ]);

        return redirect()->route('fun-facts.index')->with('success', '4 Data Fun Fact default berhasil ditambahkan!');
    }

    public function destroy(FunFact $funFact)
    {
        $funFact->delete();
        return redirect()->route('fun-facts.index')->with('success', 'Fun Fact berhasil dihapus.');
    }
}