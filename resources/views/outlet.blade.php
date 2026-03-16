@extends('layouts.app')

@section('content')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcumb-title text-center">
                        <h2>Outlet Kami</h2>
                        <h3>Temukan Cabang Soto Bangkong Terdekat</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-page-area section">
    <div class="container"> 
        <div class="row">
            <div class="blog-top-menu fix">
                <div class="col-md-12 col-lg-4 col-sm-12">
                    <div class="bloge-page-title">
                        <h2>Daftar Cabang</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-sm-12 col-sm-12">
                    <div class="filter-menu">
                        <ul>
                            <li class="filter active" data-filter="all">Semua Wilayah</li>
                            @foreach($regions as $region)
                                <li class="filter" data-filter=".{{ \Str::slug($region) }}">{{ $region }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="blog-list">
                
                @forelse($outlets as $outlet)
                    <div class="col-md-4 col-sm-6 col-xs-12 mix {{ \Str::slug($outlet->region) }}" >
                        <div class="single-blog">
                            <img src="{{ $outlet->image ? asset('storage/' . $outlet->image) : asset('assets/images/blog/1.jpg') }}" alt="{{ $outlet->name }}" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="blog-content">
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="{{ $outlet->map_link ?? '#' }}" target="_blank">{{ $outlet->name }}</a></h3>
                                    </div>
                                    <div class="blog-detels">
                                        <p>{{ $outlet->address }}</p>
                                        <p><i class="fa fa-clock-o"></i> {{ $outlet->opening_hours }}</p>
                                    </div>
                                    <div class="blog-btn">
                                        @if($outlet->map_link)
                                            <a href="{{ $outlet->map_link }}" target="_blank"><i class="fa fa-map-marker"></i> Buka Peta</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Belum ada data cabang yang tersedia.</p>
                    </div>
                @endforelse

            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="load-more">
                    <a href="{{ url('/contact') }}" class="load-more-btn">Info Kemitraan Franchise <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
    </div>
</div>     
    @endsection