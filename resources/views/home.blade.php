@extends('layouts.app')

@section('content')

<div class="slider-area">
    <div class="owl-carousel slide-slider">
        @forelse($sliders as $slider)
    <div class="single-slider" style="background-image: url('{{ $slider->background_image ? asset('storage/' . $slider->background_image) : asset('assets/images/slider/1.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="slider-content">
                        <div class="slider-heading">
                            <h1 data-animation-in="flipInX">
                                @if($slider->heading_highlight)
                                    <span>{{ $slider->heading_highlight }}</span>
                                @endif
                                {{ $slider->heading_main }}
                            </h1>
                            <p data-animation-in="bounceInLeft">{{ $slider->description }}</p>
                            
                            @if($slider->button_1_text || $slider->button_2_text)
                                <div class="slider-btn" data-animation-in="bounceInUp">
                                    <ul>
                                        @if($slider->button_1_text)
                                            <li><a class="btn" href="{{ $slider->button_1_link ?? '#' }}">{{ $slider->button_1_text }}</a></li>
                                        @endif
                                        
                                        @if($slider->button_2_text)
                                            <li><a class="btn" href="{{ $slider->button_2_link ?? '#' }}">{{ $slider->button_2_text }}</a></li>
                                        @endif                                            
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="slider-right" data-animation-in="bounceInRight">
                        <img src="{{ $slider->right_image ? asset('storage/' . $slider->right_image) : asset('assets/images/slider/1.png') }}" alt="">
                    </div>
                </div>                            
            </div>
        </div>
    </div>
    @empty
    <div class="single-slider" style="background-image: url('assets/images/slider/1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="slider-content">
                        <div class="slider-heading">
                            <h1 data-animation-in="flipInX"><span>SOTOBANGKONG</span> JAKARTA</h1>
                            <p data-animation-in="bounceInLeft">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            <div class="slider-btn" data-animation-in="bounceInUp">
                                <ul>
                                    <li><a class="btn" href="#">Tentang Kami</a></li>
                                    <li><a class="btn" href="#">Pesan Catering</a></li>                                            
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="slider-right" data-animation-in="bounceInRight">
                        <img src="assets/images/slider/1.png" alt="">
                    </div>
                </div>                            
            </div>
        </div>
    </div>

    <div class="single-slider" style="background-image: url('assets/images/slider/2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="slider-content">
                        <div class="slider-heading">
                            <h1 data-animation-in="flipInX">DIGITAL <span>STUDIO</span></h1>
                            <p data-animation-in="bounceInLeft">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            <div class="slider-btn" data-animation-in="bounceInUp">
                                <ul>
                                    <li><a class="btn" href="#">About us</a></li>
                                    <li><a class="btn" href="#">Contact us</a></li>                                            
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="slider-right" data-animation-in="bounceInRight">
                        <img src="assets/images/slider/1.png" alt="">
                    </div>
                </div>                            
            </div>
        </div>
    </div>
    @endforelse
    </div>
</div>
<div class="service-area">
    <div class="service-title-area">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="service-section-title">
                    <h4>Layanan Utama Kami</h4>
                    <h3 class="cd-headline clip ">Nikmati kelezatan soto otentik dengan <span class="cd-words-wrapper"><b class="is-visible">Pelayanan Terbaik. </b><b>Kualitas Terjamin.</b><b>Harga Bersahabat.</b>
                    </span> <br /> Kepuasan pelanggan adalah bumbu rahasia di setiap mangkok kami.</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div class="service-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    @forelse($services as $service)
                        <div class="single-service">
                            <div class="service-info">
                                <div class="service-icon">
                                    <i class="{{ $service->icon_class }}"></i>
                                </div>
                                <div class="service-title">
                                    <h4>{{ $service->title }}</h4>
                                </div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="service-icon">
                                        <i class="{{ $service->icon_class }}"></i>
                                    </div>
                                    <div class="service-title">
                                        <h4><a href="{{ $service->link ?? '#' }}">{{ $service->hover_title ?? $service->title }}</a></h4>
                                    </div>
                                    <div class="service-content">
                                        <p>{{ $service->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="single-service">
                            <div class="service-info">
                                <div class="service-icon"><i class="fa fa-cutlery"></i></div>
                                <div class="service-title"><h4>Makan di Tempat (Dine-in)</h4></div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="service-icon"><i class="fa fa-cutlery"></i></div>
                                    <div class="service-title"><h4><a href="#">Dine-in Nyaman</a></h4></div>
                                    <div class="service-content">
                                        <p>Nikmati soto hangat langsung di kedai kami dengan suasana yang nyaman dan bersih untuk keluarga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-service">
                            <div class="service-info">
                                <div class="service-icon"><i class="fa fa-truck"></i></div>
                                <div class="service-title"><h4>Layanan Catering</h4></div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="service-icon"><i class="fa fa-truck"></i></div>
                                    <div class="service-title"><h4><a href="#">Catering Acara</a></h4></div>
                                    <div class="service-content">
                                        <p>Siap melayani pesanan partai besar untuk acara pernikahan, syukuran, atau meeting kantor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-service">
                            <div class="service-info">
                                <div class="service-icon"><i class="fa fa-motorcycle"></i></div>
                                <div class="service-title"><h4>Pesan Antar</h4></div>
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <div class="service-icon"><i class="fa fa-motorcycle"></i></div>
                                    <div class="service-title"><h4><a href="#">Delivery Order</a></h4></div>
                                    <div class="service-content">
                                        <p>Mager keluar rumah? Tenang, kami siap antar pesanan soto hangat langsung ke depan pintu Anda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
        <div class="chooseus-area section">
    <div class="container">
        
        <div class="row">
            <div class="section-title text-center">
                <h3>{{ $chooseUsSetting->subtitle ?? 'Cita Rasa Warisan Nusantara' }}</h3>
                <h2>{{ $chooseUsSetting->title ?? 'Kenapa Memilih Kami?' }}</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="chooseus-img">
                    <a href="#">
                        @if(isset($chooseUsSetting->image) && $chooseUsSetting->image)
                            <img class="img-responsive" src="{{ asset('storage/' . $chooseUsSetting->image) }}" alt="Choose Us">
                        @else
                            <img class="img-responsive" src="{{ asset('assets/images/chooseus/soto-cooking.jpg') }}" alt="Memasak Soto">
                        @endif
                    </a>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-6">
                <div class="chooseus-info">
                    <div class="chooseus-info-list">
                        
                        @forelse($chooseUsItems as $item)
                            <div class="single-chooseus">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="{{ $item->icon_class }}"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ $item->title }}</h4>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="single-chooseus">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Resep Legendaris</h4>
                                        <p>Diramu menggunakan bumbu rempah pilihan warisan turun-temurun yang menjaga keaslian rasa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-chooseus">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="fa fa-leaf"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Bahan Baku Segar</h4>
                                            <p>Kami hanya menggunakan daging ayam segar dan sayuran pilihan terbaik yang dipasok setiap hari demi kualitas sajian.</p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="single-chooseus">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Harga Terjangkau</h4>
                                            <p>Rasa bintang lima, harga kaki lima. Nikmati hidangan spesial kami tanpa perlu merogoh kocek terlalu dalam.</p>
                                        </div>
                                    </div>
                                </div>
                            @endforelse

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
        <div class="portfolio-area section">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>Galeri Hidangan Kami</h3>
                <h2>Menu Andalan</h2>
            </div>
        </div>
        
        <div class="row">
            @if($galleryMenus->count() > 0)
                
                <div class="col-sm-6">
                    <div class="single-portfolio">
                        <a href="{{ url('/menu') }}">
                            <img src="{{ asset('storage/' . $galleryMenus[0]->image) }}" alt="{{ $galleryMenus[0]->title }}" style="width: 100%; height: auto; object-fit: cover;">
                        </a>
                        <div class="portfolio-info">
                            <h4><a href="{{ url('/menu') }}">{{ $galleryMenus[0]->title }}</a></h4>
                            <p>{{ $galleryMenus[0]->feature_1 ?? 'Menu Favorit' }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        
                        <div class="col-sm-6">
                            @if(isset($galleryMenus[1]))
                            <div class="single-portfolio">
                                <a href="{{ url('/menu') }}">
                                    <img src="{{ asset('storage/' . $galleryMenus[1]->image) }}" alt="{{ $galleryMenus[1]->title }}" style="width: 100%; height: 250px; object-fit: cover;">
                                </a>
                                <div class="portfolio-info">
                                    <h4><a href="{{ url('/menu') }}">{{ $galleryMenus[1]->title }}</a></h4>
                                    <p>{{ $galleryMenus[1]->feature_1 ?? 'Pilihan Spesial' }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                        
                        <div class="col-sm-6">
                            @if(isset($galleryMenus[2]))
                            <div class="single-portfolio">
                                <a href="{{ url('/menu') }}">
                                    <img src="{{ asset('storage/' . $galleryMenus[2]->image) }}" alt="{{ $galleryMenus[2]->title }}" style="width: 100%; height: 250px; object-fit: cover;">
                                </a>
                                <div class="portfolio-info">
                                    <h4><a href="{{ url('/menu') }}">{{ $galleryMenus[2]->title }}</a></h4>
                                    <p>{{ $galleryMenus[2]->feature_1 ?? 'Pelengkap Sempurna' }}</p>
                                </div>
                            </div>
                            @endif
                        </div>  
                        
                        <div class="col-sm-12">
                            @if(isset($galleryMenus[3]))
                            <div class="single-portfolio">
                                <a href="{{ url('/menu') }}">
                                    <img src="{{ asset('storage/' . $galleryMenus[3]->image) }}" alt="{{ $galleryMenus[3]->title }}" style="width: 100%; height: 300px; object-fit: cover;">
                                </a>
                                <div class="portfolio-info">
                                    <h4><a href="{{ url('/menu') }}">{{ $galleryMenus[3]->title }}</a></h4>
                                    <p>{{ $galleryMenus[3]->feature_1 ?? 'Sangat Disarankan' }}</p>
                                </div>
                            </div>
                            @endif
                        </div>                           
                    </div>
                </div>  

            @else
                <div class="col-12 text-center">
                    <p>Galeri menu belum tersedia.</p>
                </div>
            @endif

            <div class="col-sm-12">
                <div class="load-more-btn text-center mt-4">
                    <a href="{{ url('/menu') }}" class="load-btn" style="margin-top: 30px; display: inline-block;">Lihat Semua Menu</a>
                </div>
            </div>                  
        </div>
    </div>
</div>
        <div class="testimonial-area section">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>Review Bintang 5</h3>
                <h2>Apa Kata Pelanggan?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chooseus-img">
                     <a href="#">
                        @if(isset($chooseUsSetting->image) && $chooseUsSetting->image)
                            <img class="img-responsive" src="{{ asset('storage/' . $chooseUsSetting->image) }}" alt="Choose Us">
                        @else
                            <img class="img-responsive" src="{{ asset('assets/images/chooseus/soto-cooking.jpg') }}" alt="Memasak Soto">
                        @endif
                     </a>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="owl-carousel slide-testimonial">
                    
                    @forelse($testimonials as $testi)
    <div class="single-testimonial">
        <div class="testimonial-content">
            <p>"{{ $testi->content }}"</p>
        </div>
        
        <div class="member-name" style="display: flex; align-items: center; margin-top: 20px;">
            <div class="member-avatar" style="margin-right: 15px;">
                <img src="{{ $testi->avatar ? asset('storage/' . $testi->avatar) : asset('assets/images/default-avatar.png') }}" 
                     alt="{{ $testi->name }}" 
                     style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; border: 2px solid #ffcc00;">
            </div>
            <div>
                <h3 style="margin: 0;"><a href="#">{{ $testi->name }}</a></h3> 
                <span style="display: block; margin-top: 5px;">{{ $testi->role }}</span>
            </div>
        </div>
    </div>
@empty
    <div class="single-testimonial">
        <div class="testimonial-content">
            <p>"Belum ada ulasan saat ini. Jadilah yang pertama memberikan review!"</p>
        </div>
        <div class="member-name" style="display: flex; align-items: center; margin-top: 20px;">
            <div class="member-avatar" style="margin-right: 15px;">
                <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Admin" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%; border: 2px solid #ffcc00;">
            </div>
            <div>
                <h3 style="margin: 0;"><a href="#">Admin</a></h3> 
                <span style="display: block; margin-top: 5px;">Sistem</span>
            </div>
        </div>
    </div>
@endforelse
                    
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="funfact-area section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row text-center">
                    
                    @forelse($funFacts as $fact)
                        <div class="col-sm-3">
                            <div class="single-counter">
                                <span class="funfact-counter">{{ $fact->number }}</span>
                                <p class="counter-content">
                                    {{ $fact->title }} 
                                    @if($fact->subtitle)
                                        <span>{{ $fact->subtitle }}</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="col-sm-3">
                            <div class="single-counter">
                                <span class="funfact-counter">15</span>
                                <p class="counter-content">Tahun <span>Berdiri</span></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-counter">
                                <span class="funfact-counter">1520</span>
                                <p class="counter-content">Porsi <span>Terjual / Hari</span></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-counter">
                                <span class="funfact-counter">3</span>
                                <p class="counter-content">Cabang <span>Restoran</span></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-counter">
                                <span class="funfact-counter">99</span>
                                <p class="counter-content">% Pelanggan <span>Puas</span></p>
                            </div>
                        </div>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection