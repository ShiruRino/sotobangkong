<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the sliders (Admin View).
     */
    public function index()
    {
        $sliders = HomeSlider::orderBy('sort_order', 'asc')->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new slider.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created slider in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'heading_highlight' => 'nullable|string|max:255',
            'heading_main'      => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'button_1_text'     => 'nullable|string|max:255',
            'button_1_link'     => 'nullable|string|max:255',
            'button_2_text'     => 'nullable|string|max:255',
            'button_2_link'     => 'nullable|string|max:255',
            'sort_order'        => 'integer',
            'is_active'         => 'boolean',
            'background_image'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'right_image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Handle Image Uploads
        if ($request->hasFile('background_image')) {
            $validated['background_image'] = $request->file('background_image')->store('sliders', 'public');
        }

        if ($request->hasFile('right_image')) {
            $validated['right_image'] = $request->file('right_image')->store('sliders', 'public');
        }

        HomeSlider::create($validated);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }

    /**
     * Show the form for editing the specified slider.
     */
    public function edit(HomeSlider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified slider in storage.
     */
    public function update(Request $request, HomeSlider $slider)
    {
        $validated = $request->validate([
            'heading_highlight' => 'nullable|string|max:255',
            'heading_main'      => 'nullable|string|max:255',
            'description'       => 'nullable|string',
            'button_1_text'     => 'nullable|string|max:255',
            'button_1_link'     => 'nullable|string|max:255',
            'button_2_text'     => 'nullable|string|max:255',
            'button_2_link'     => 'nullable|string|max:255',
            'sort_order'        => 'integer',
            'background_image'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'right_image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Fallback for checkboxes if unchecked
        $validated['is_active'] = $request->has('is_active');

        // Handle Background Image Update atau Penghapusan ke Default
        if ($request->has('remove_background_image')) {
            if ($slider->background_image) {
                Storage::disk('public')->delete($slider->background_image);
            }
            $validated['background_image'] = null; // Set jadi null agar fallback ke gambar default jalan
        } 
        elseif ($request->hasFile('background_image')) {
            if ($slider->background_image) {
                Storage::disk('public')->delete($slider->background_image);
            }
            $validated['background_image'] = $request->file('background_image')->store('sliders', 'public');
        }

        // Handle Right Image Update atau Penghapusan ke Default
        if ($request->has('remove_right_image')) {
            if ($slider->right_image) {
                Storage::disk('public')->delete($slider->right_image);
            }
            $validated['right_image'] = null;
        } 
        elseif ($request->hasFile('right_image')) {
            if ($slider->right_image) {
                Storage::disk('public')->delete($slider->right_image);
            }
            $validated['right_image'] = $request->file('right_image')->store('sliders', 'public');
        }

        $slider->update($validated);

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified slider from storage.
     */
    public function destroy(HomeSlider $slider)
    {
        // Delete images from storage folder before deleting the database record
        if ($slider->background_image) {
            Storage::disk('public')->delete($slider->background_image);
        }
        if ($slider->right_image) {
            Storage::disk('public')->delete($slider->right_image);
        }

        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully.');
    }
    /**
     * Memuat data slider default ke database.
     */
    public function loadDefaults()
    {
        // Data Default 1: Soto Bangkong
        \App\Models\HomeSlider::create([
            'heading_highlight' => 'SOTOBANGKONG',
            'heading_main'      => 'JAKARTA',
            'description'       => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
            'button_1_text'     => 'Tentang Kami',
            'button_1_link'     => '#',
            'button_2_text'     => 'Pesan Catering',
            'button_2_link'     => '#',
            'sort_order'        => 1,
            'is_active'         => true,
            // background_image dan right_image dibiarkan null agar memicu efek fallback di frontend
        ]);

        // Data Default 2: Digital Studio
        \App\Models\HomeSlider::create([
            'heading_highlight' => 'DIGITAL',
            'heading_main'      => 'STUDIO',
            'description'       => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
            'button_1_text'     => 'About us',
            'button_1_link'     => '#',
            'button_2_text'     => 'Contact us',
            'button_2_link'     => '#',
            'sort_order'        => 2,
            'is_active'         => true,
        ]);

        return redirect()->route('sliders.index')->with('success', '2 Slider default berhasil ditambahkan ke database!');
    }
}