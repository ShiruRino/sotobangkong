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
                                <li class="filter" data-filter=".jaksel">Jakarta Selatan</li>
                                <li class="filter" data-filter=".jakpus">Jakarta Pusat</li>
                                <li class="filter" data-filter=".tangsel">Tangerang Selatan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="blog-list">
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix jaksel" >
                        <div class="single-blog">
                            <img src="{{ asset('assets/images/blog/1.jpg') }}" alt="Outlet Pakubuwono">
                            <div class="blog-content">
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Soto Bangkong - Pakubuwono</a></h3>
                                    </div>
                                    <div class="blog-detels">
                                        <p>Jl. Pakubuwono VI No.39, RT.11/RW.2, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan.</p>
                                        <p><i class="fa fa-clock-o"></i> Buka: 07.30 - 21.00 WIB</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="https://goo.gl/maps/contohlink1" target="_blank"><i class="fa fa-map-marker"></i> Buka Peta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mix jakpus" >
                        <div class="single-blog">
                            <img src="{{ asset('assets/images/blog/2.jpg') }}" alt="Outlet Menteng">
                            <div class="blog-content">
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Soto Bangkong - Menteng</a></h3>
                                    </div>
                                    <div class="blog-detels">
                                        <p>Jl. HOS. Cokroaminoto No.78, Menteng, Kota Jakarta Pusat.</p>
                                        <p><i class="fa fa-clock-o"></i> Buka: 08.00 - 21.30 WIB</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="https://goo.gl/maps/contohlink2" target="_blank"><i class="fa fa-map-marker"></i> Buka Peta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mix tangsel" >
                        <div class="single-blog">
                            <img src="{{ asset('assets/images/blog/3.jpg') }}" alt="Outlet Bintaro">
                            <div class="blog-content">
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Soto Bangkong - Bintaro</a></h3>
                                    </div>
                                    <div class="blog-detels">
                                        <p>Bintaro Jaya Sektor 7, Jl. Boulevard Bintaro Jaya, Pondok Jaya, Tangerang Selatan.</p>
                                        <p><i class="fa fa-clock-o"></i> Buka: 07.00 - 22.00 WIB</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="https://goo.gl/maps/contohlink3" target="_blank"><i class="fa fa-map-marker"></i> Buka Peta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 mix jaksel" >
                        <div class="single-blog">
                            <img src="{{ asset('assets/images/blog/4.jpg') }}" alt="Outlet Kemang">
                            <div class="blog-content">
                                <div class="blog-info">
                                    <div class="blog-title">
                                        <h3><a href="#">Soto Bangkong - Kemang</a></h3>
                                    </div>
                                    <div class="blog-detels">
                                        <p>Jl. Kemang Raya No.15, Bangka, Kec. Mampang Prpt., Kota Jakarta Selatan.</p>
                                        <p><i class="fa fa-clock-o"></i> Buka: 08.00 - 21.00 WIB</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a href="https://goo.gl/maps/contohlink4" target="_blank"><i class="fa fa-map-marker"></i> Buka Peta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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