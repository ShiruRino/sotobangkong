@extends('layouts.app')

@section('content')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcumb-title text-center">
                        <h2>Layanan Catering</h2>
                        <h3>Dokumentasi & Pilihan Paket Acara</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-page-area section">
        <div class="container">
            <div class="row">
                <div class="portfolio-list">
                    
                    @forelse($cateringColumns as $column)
                        <div class="col-md-4 col-sm-12">
                            <div class="row">
                                
                                @foreach($column as $catering)
                                    <div class="col-sm-12">
                                        <div class="single-portfolio">
                                            <div class="poftfolio-info">
                                                <div class="poftfolio-img">
                                                    <img src="{{ asset('storage/' . $catering->image) }}" alt="{{ $catering->title }}" style="width: 100%; height: auto; object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="portfolio-content">
                                                <div class="portfolio-inner-content">
                                                    <div class="portfolio-detels">
                                                        <h4>{{ $catering->title }}</h4>
                                                        <span>{{ $catering->subtitle }}</span>
                                                        <div class="portfolio-btn">
                                                            <a href="{{ asset('storage/' . $catering->image) }}" data-lightbox="example-set" data-title="{{ $catering->title }}">Full View</a>
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
                        <div class="col-12 text-center" style="margin-bottom: 30px;">
                            <p>Belum ada dokumentasi catering.</p>
                        </div>
                    @endforelse
                    
                    <div class="col-sm-12 text-center" style="margin-top: 30px;">
                        <div class="load-more">
                            <a href="{{ url('/contact') }}" class="load-more-btn" style="background-color: #ffcc00; color: #000; font-weight: bold;">Konsultasi Pesanan Catering</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection