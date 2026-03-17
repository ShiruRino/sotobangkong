<?php

use App\Http\Controllers\Admin\AboutSettingController;
use App\Http\Controllers\Admin\CateringGalleryController;
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
use App\Http\Controllers\AuthController;
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

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

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

    Route::resource('caterings', CateringGalleryController::class);

    // ROUTE BARU UNTUK LOAD DEFAULT CHOOSE US ITEMS
    Route::post('choose-us-items/load-defaults', [App\Http\Controllers\Admin\ChooseUsItemController::class, 'loadDefaults'])->name('choose-us-items.load-defaults');
    
    // Route resource yang sudah ada
    Route::resource('choose-us-items', App\Http\Controllers\Admin\ChooseUsItemController::class);

    Route::get('choose-us-setting', [ChooseUsSettingController::class, 'index'])->name('choose-us-setting.index');
    Route::post('choose-us-setting', [ChooseUsSettingController::class, 'update'])->name('choose-us-setting.update');
    
    Route::get('contact-setting', [ContactSettingController::class, 'index'])->name('contact-setting.index');
    Route::post('contact-setting', [ContactSettingController::class, 'update'])->name('contact-setting.update');
    
    // ROUTE BARU UNTUK LOAD DEFAULT FUN FACTS
    Route::post('fun-facts/load-defaults', [App\Http\Controllers\Admin\FunFactController::class, 'loadDefaults'])->name('fun-facts.load-defaults');
    
    // Route resource yang sudah ada
    Route::resource('fun-facts', App\Http\Controllers\Admin\FunFactController::class);

    Route::resource('galleries', GalleryController::class);

    // ROUTE BARU UNTUK LOAD DEFAULT
    Route::post('sliders/load-defaults', [App\Http\Controllers\Admin\HomeSliderController::class, 'loadDefaults'])->name('sliders.load-defaults');
    
    // Route resource yang sudah ada sebelumnya
    Route::resource('sliders', App\Http\Controllers\Admin\HomeSliderController::class);

    Route::resource('menus', MenuController::class);

    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);

    Route::resource('outlets', OutletController::class);

    // ROUTE BARU UNTUK LOAD DEFAULT SERVICES
    Route::post('services/load-defaults', [App\Http\Controllers\Admin\ServiceController::class, 'loadDefaults'])->name('services.load-defaults');
    
    // Route resource yang sudah ada
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);

    Route::resource('team-members', TeamMemberController::class);

    Route::resource('testimonials', TestimonialController::class);

    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
});