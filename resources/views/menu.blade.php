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
                
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="single-service">
                        <div class="inner-file">
                            <div style="margin-bottom: 20px;">
                                <img src="{{ asset('assets/images/menu/soto-ayam.jpg') }}" alt="Soto Ayam" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 3px solid #ffcc00; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="service-title">
                                <h3>Soto Ayam Spesial</h3>
                            </div>
                            <div class="service-content">
                                <p>Soto ayam kampung kuah bening segar dengan bihun, tauge, tomat, dan taburan bawang putih goreng renyah.</p>
                            </div>
                        </div>
                        <div class="service-overlay">
                            <div class="overlay-content">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Ayam Kampung Asli</li>
                                    <li> <i class="fa fa-check"></i> Kuah Kaldu Spesial</li>
                                    <li> <i class="fa fa-check"></i> Resep Warisan</li>
                                    <li> <i class="fa fa-money"></i> Rp 25.000 / Porsi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="single-service">
                        <div class="inner-file">
                            <div style="margin-bottom: 20px;">
                                <img src="{{ asset('assets/images/menu/sate-kerang.jpg') }}" alt="Sate Kerang" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 3px solid #ffcc00; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="service-title">
                                <h3>Sate Kerang</h3>
                            </div>
                            <div class="service-content">
                                <p>Sate kerang bumbu kecap manis gurih meresap, pendamping wajib yang bikin makan soto makin nikmat.</p>
                            </div>
                        </div>
                        <div class="service-overlay">
                            <div class="overlay-content">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Kerang Segar</li>
                                    <li> <i class="fa fa-check"></i> Bumbu Meresap</li>
                                    <li> <i class="fa fa-check"></i> Favorit Pelanggan</li>
                                    <li> <i class="fa fa-money"></i> Rp 6.000 / Tusuk</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="single-service">
                        <div class="inner-file">
                            <div style="margin-bottom: 20px;">
                                <img src="{{ asset('assets/images/menu/sate-puyuh.jpg') }}" alt="Sate Telur Puyuh" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 3px solid #ffcc00; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="service-title">
                                <h3>Sate Telur Puyuh</h3>
                            </div>
                            <div class="service-content">
                                <p>Telur puyuh rebus bumbu bacem tradisional khas Semarang yang manis dan gurih, dijamin ketagihan.</p>
                            </div>
                        </div>
                        <div class="service-overlay">
                            <div class="overlay-content">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Telur Puyuh Pilihan</li>
                                    <li> <i class="fa fa-check"></i> Bumbu Bacem Asli</li>
                                    <li> <i class="fa fa-check"></i> Bergizi Tinggi</li>
                                    <li> <i class="fa fa-money"></i> Rp 7.000 / Tusuk</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="single-service">
                        <div class="inner-file">
                            <div style="margin-bottom: 20px;">
                                <img src="{{ asset('assets/images/menu/perkedel.jpg') }}" alt="Perkedel Kentang" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 3px solid #ffcc00; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="service-title">
                                <h3>Perkedel Kentang</h3>
                            </div>
                            <div class="service-content">
                                <p>Perkedel kentang padat, lembut di dalam dan garing di luar. Sangat cocok dicelup ke kuah soto hangat.</p>
                            </div>
                        </div>
                        <div class="service-overlay">
                            <div class="overlay-content">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Kentang Tumbuk Asli</li>
                                    <li> <i class="fa fa-check"></i> Digoreng Dadakan</li>
                                    <li> <i class="fa fa-check"></i> Tanpa Pengawet</li>
                                    <li> <i class="fa fa-money"></i> Rp 5.000 / Biji</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="single-service">
                        <div class="inner-file">
                            <div style="margin-bottom: 20px;">
                                <img src="{{ asset('assets/images/menu/tempe-goreng.jpg') }}" alt="Tempe Goreng" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 3px solid #ffcc00; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="service-title">
                                <h3>Tempe Goreng</h3>
                            </div>
                            <div class="service-content">
                                <p>Tempe kedelai pilihan yang digoreng garing renyah. Disajikan hangat-hangat sebagai camilan atau lauk.</p>
                            </div>
                        </div>
                        <div class="service-overlay">
                            <div class="overlay-content">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Kedelai Pilihan</li>
                                    <li> <i class="fa fa-check"></i> Super Renyah</li>
                                    <li> <i class="fa fa-check"></i> Selalu Hangat</li>
                                    <li> <i class="fa fa-money"></i> Rp 3.000 / Potong</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 text-center">
                    <div class="single-service">
                        <div class="inner-file">
                            <div style="margin-bottom: 20px;">
                                <img src="{{ asset('assets/images/menu/es-teh.jpg') }}" alt="Minuman Segar" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 3px solid #ffcc00; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                            <div class="service-title">
                                <h3>Minuman Segar</h3>
                            </div>
                            <div class="service-content">
                                <p>Pilihan minuman dingin dan hangat untuk melepas dahaga, mulai dari Es Teh Manis hingga Jeruk Peras.</p>
                            </div>
                        </div>
                        <div class="service-overlay">
                            <div class="overlay-content">
                                <ul>
                                    <li> <i class="fa fa-check"></i> Es Teh Manis</li>
                                    <li> <i class="fa fa-check"></i> Jeruk Peras Asli</li>
                                    <li> <i class="fa fa-check"></i> Kopi Hitam</li>
                                    <li> <i class="fa fa-money"></i> Mulai Rp 5.000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection