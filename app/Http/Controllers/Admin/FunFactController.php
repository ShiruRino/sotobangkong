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

    public function destroy(FunFact $funFact)
    {
        $funFact->delete();
        return redirect()->route('fun-facts.index')->with('success', 'Fun Fact berhasil dihapus.');
    }
}