@extends('layouts.app')

@section('content')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcumb-title text-center">
                        <h2>Galeri</h2>
                        <h3>Dokumentasi Hidangan & Kedai Kami</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-page-area section ">
        <div class="container">
            <div class="row">
                <div class="portfolio-list">
                    
                    @forelse($galleryColumns as $column)
                        <div class="col-md-4 col-sm-12">
                            <div class="row">
                                
                                @foreach($column as $gallery)
                                    <div class="col-sm-12">
                                        <div class="single-portfolio">
                                            <div class="poftfolio-info">
                                                <div class="poftfolio-img">
                                                    <img src="{{ Str::startsWith($gallery->image, 'assets/') ? asset($gallery->image) : asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" style="width: 100%; height: auto; object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="portfolio-content">
                                                <div class="portfolio-inner-content">
                                                    <div class="portfolio-detels">
                                                        <h4>{{ $gallery->title }}</h4>
                                                        <span>{{ $gallery->subtitle ?? 'Klik untuk perbesar' }}</span>
                                                        <div class="portfolio-btn">
                                                            <a href="{{ Str::startsWith($gallery->image, 'assets/') ? asset($gallery->image) : asset('storage/' . $gallery->image) }}" data-lightbox="example-set" data-title="{{ $gallery->title }}">Full View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Belum ada foto galeri.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection