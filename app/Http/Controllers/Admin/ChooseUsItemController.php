<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\ChooseUsItem;
use Illuminate\Http\Request;

class ChooseUsItemController extends Controller
{
    public function index()
    {
        $items = ChooseUsItem::orderBy('sort_order', 'asc')->get();
        return view('admin.choose_us.index', compact('items'));
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

    public function destroy(ChooseUsItem $chooseUsItem)
    {
        $chooseUsItem->delete();
        return redirect()->route('choose-us-items.index')->with('success', 'Item berhasil dihapus.');
    }
}