@extends('layouts.app')

@section('content')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcumb-title text-center">
                        <h2>Menu Kami</h2>
                        <h3>Pilihan Spesial Soto Bangkong</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="provice-area section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="service-page-title">
                        <h2>Hidangan Andalan Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($menus as $menu)
                    <div class="col-sm-6 col-md-4 text-center">
                        <div class="single-service">
                            <div class="inner-file">
                                <div style="margin-bottom: 20px;">
                                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->title }}" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 3px solid #ffcc00; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                </div>
                                <div class="service-title">
                                    <h3>{{ $menu->title }}</h3>
                                </div>
                                <div class="service-content">
                                    <p>{{ $menu->description }}</p>
                                </div>
                            </div>
                            <div class="service-overlay">
                                <div class="overlay-content">
                                    <ul>
                                        @if($menu->feature_1)
                                            <li> <i class="fa fa-check"></i> {{ $menu->feature_1 }}</li>
                                        @endif
                                        @if($menu->feature_2)
                                            <li> <i class="fa fa-check"></i> {{ $menu->feature_2 }}</li>
                                        @endif
                                        @if($menu->feature_3)
                                            <li> <i class="fa fa-check"></i> {{ $menu->feature_3 }}</li>
                                        @endif
                                        @if($menu->price_text)
                                            <li> <i class="fa fa-money"></i> {{ $menu->price_text }}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Belum ada menu yang ditambahkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    @endsection