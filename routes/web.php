<?php

use App\Http\Controllers\Admin\AboutSettingController;
use App\Http\Controllers\Admin\ChooseUsItemController;
use App\Http\Controllers\Admin\ChooseUsSettingController;
use App\Http\Controllers\Admin\ContactSettingController;
use App\Http\Controllers\Admin\FunFactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\OutletController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Models\CateringGallery;
use App\Models\HomeSlider;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

// Jalur Utama (Beranda / Home)
Route::get('/', function () {
    // Ambil data slider yang aktif dan urutkan berdasarkan sort_order
    $sliders = HomeSlider::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
    $services = Service::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
    $chooseUsSetting = \App\Models\ChooseUsSetting::first();
    $chooseUsItems = \App\Models\ChooseUsItem::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
    // AMBIL 4 MENU AKTIF UNTUK GALERI HOMEPAGE
    $galleryMenus = \App\Models\Menu::where('is_active', 1)->orderBy('sort_order', 'asc')->take(4)->get();
    $testimonials = \App\Models\Testimonial::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
    $funFacts = \App\Models\FunFact::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
// Jangan lupa sisipkan variabel ini ke fungsi compact() di return view Anda.
    return view('home', compact('sliders', 'services', 'chooseUsItems', 'chooseUsSetting', 'galleryMenus', 'testimonials', 'funFacts'));
});

// Jalur Tentang Kami
Route::get('/about', function () {
    $teamMembers = \App\Models\TeamMember::where('is_active', 1)->orderBy('sort_order', 'asc')->get();

    // Pisahkan anggota pertama (untuk kotak besar kiri) dengan sisanya (untuk kotak kecil kanan)
    $headChef = $teamMembers->first();
    $otherMembers = $teamMembers->skip(1)->take(4); // Ambil 4 orang berikutnya untuk grid kanan
    $aboutSetting = \App\Models\AboutSetting::first();
    return view('about', compact('aboutSetting','headChef','teamMembers', 'otherMembers'));
});

// Jalur Menu
Route::get('/menu', function () {
    $menus = \App\Models\Menu::where('is_active', 1)->orderBy('sort_order', 'asc')->get();
    return view('menu', compact('menus'));
});

// Jalur Layanan Catering
Route::get('/catering', function () {
    $caterings = \App\Models\CateringGallery::where('is_active', 1)->orderBy('sort_order', 'asc')->get();

    // Memecah menjadi 3 kolom
    $cateringColumns = $caterings->split(3);

    return view('catering', compact('cateringColumns','caterings'));
});

// Jalur Outlet
Route::get('/outlet', function () {
    // Ambil semua outlet
    $outlets = \App\Models\Outlet::where('is_active', 1)->orderBy('sort_order', 'asc')->get();

    // Ambil wilayah (region) unik, hilangkan duplikat, dan urutkan abjad
    $regions = $outlets->pluck('region')->unique()->sort();
    return view('outlet', compact('outlets','regions'));
});

// Jalur Kontak
Route::get('/contact', function () {
    $contactSetting = \App\Models\ContactSetting::first();
    return view('contact', compact('contactSetting'));
});
Route::post('/contact/send', [MessageController::class, 'store'])->name('contact.store');

// Jalur Galeri
Route::get('/gallery', function () {
    $galleries = \App\Models\Gallery::where('is_active', 1)->orderBy('sort_order', 'asc')->get();

    // Memecah koleksi menjadi 3 bagian yang rata untuk masing-masing kolom (kiri, tengah, kanan)
    $galleryColumns = $galleries->split(3);

    return view('gallery', compact('galleries', 'galleryColumns'));
});

Route::prefix('admin')->group(function(){
    Route::get('dashboard', function (){
        // Hitung statistik untuk ditampilkan di dashboard
        $unreadMessages = \App\Models\Message::where('is_read', false)->count();
        $totalMenus = \App\Models\Menu::count();
        $totalOutlets = \App\Models\Outlet::count();
        $totalTestimonials = \App\Models\Testimonial::count();

        return view('admin.dashboard', compact(
            'unreadMessages', 
            'totalMenus', 
            'totalOutlets', 
            'totalTestimonials'
        ));
    })->name('admin.dashboard'); // Tambahkan penamaan route agar mudah dipanggil
    
    Route::get('about-setting', [AboutSettingController::class, 'index'])->name('about-settings.index');
    Route::post('about-setting', [AboutSettingController::class, 'update'])->name('about-settings.update');

    Route::resource('caterings', CateringGallery::class);

    Route::resource('choose-us-items', ChooseUsItemController::class);

    Route::get('choose-us-setting', [ChooseUsSettingController::class, 'index'])->name('choose-us-setting.index');
    Route::post('choose-us-setting', [ChooseUsSettingController::class, 'update'])->name('choose-us-setting.update');
    
    Route::get('contact-setting', [ContactSettingController::class, 'index'])->name('contact-setting.index');
    Route::post('contact-setting', [ContactSettingController::class, 'update'])->name('contact-setting.update');
    
    Route::resource('fun-facts', FunFactController::class);

    Route::resource('galleries', GalleryController::class);

    Route::resource('sliders', HomeSliderController::class);

    Route::resource('menus', MenuController::class);

    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);

    Route::resource('outlets', OutletController::class);

    Route::resource('services', ServiceController::class);

    Route::resource('team-members', TeamMemberController::class);

    Route::resource('testimonials', TestimonialController::class);

    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
});