<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('sort_order', 'asc')->get();
        return view('admin.team_members.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team_members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'position'   => 'required|string|max:255',
            'sort_order' => 'integer',
            'is_active'  => 'boolean',
            'image'      => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('team', 'public');
        }

        TeamMember::create($validated);

        return redirect()->route('team-members.index')->with('success', 'Anggota tim berhasil ditambahkan.');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team_members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'position'   => 'required|string|max:255',
            'sort_order' => 'integer',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            if ($teamMember->image) {
                Storage::disk('public')->delete($teamMember->image);
            }
            $validated['image'] = $request->file('image')->store('team', 'public');
        }

        $teamMember->update($validated);

        return redirect()->route('team-members.index')->with('success', 'Anggota tim berhasil diperbarui.');
    }

    public function destroy(TeamMember $teamMember)
    {
        if ($teamMember->image) {
            Storage::disk('public')->delete($teamMember->image);
        }
        $teamMember->delete();

        return redirect()->route('team-members.index')->with('success', 'Anggota tim berhasil dihapus.');
    }
}