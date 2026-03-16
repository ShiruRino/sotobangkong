<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('sort_order', 'asc')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'feature_1'   => 'nullable|string|max:255',
            'feature_2'   => 'nullable|string|max:255',
            'feature_3'   => 'nullable|string|max:255',
            'price_text'  => 'nullable|string|max:255',
            'sort_order'  => 'integer',
            'is_active'   => 'boolean',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('menus', 'public');
        }

        Menu::create($validated);

        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'feature_1'   => 'nullable|string|max:255',
            'feature_2'   => 'nullable|string|max:255',
            'feature_3'   => 'nullable|string|max:255',
            'price_text'  => 'nullable|string|max:255',
            'sort_order'  => 'integer',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            if ($menu->image) {
                Storage::disk('public')->delete($menu->image);
            }
            $validated['image'] = $request->file('image')->store('menus', 'public');
        }

        $menu->update($validated);

        return redirect()->route('menus.index')->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            Storage::disk('public')->delete($menu->image);
        }
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus.');
    }
}