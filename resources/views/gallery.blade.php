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
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="Soto Bangkong Mangkuk">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Soto Bangkong Spesial</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/1.jpg') }}" data-lightbox="example-set" data-title="Soto Bangkong Spesial">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/3.jpg') }}" alt="Sate Kerang">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Sate Kerang Bumbu Kecap</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/3.jpg') }}" data-lightbox="example-set" data-title="Sate Kerang Bumbu Kecap">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/4.jpg') }}" alt="Suasana Kedai">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Suasana Kedai Kami</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/4.jpg') }}" data-lightbox="example-set" data-title="Suasana Kedai Kami">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single-portfolio five">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/5.jpg') }}" alt="Sate Telur Puyuh">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Sate Telur Puyuh</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/5.jpg') }}" data-lightbox="example-set" data-title="Sate Telur Puyuh">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/6.jpg') }}" alt="Perkedel Kentang">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Perkedel Kentang Hangat</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/6.jpg') }}" data-lightbox="example-set" data-title="Perkedel Kentang Hangat">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/7.jpg') }}" alt="Pikulan Soto">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Pikulan Soto Tradisional</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/7.jpg') }}" data-lightbox="example-set" data-title="Pikulan Soto Tradisional">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single-portfolio eight">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/8.jpg') }}" alt="Tempe Goreng">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Tempe Goreng Garing</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/8.jpg') }}" data-lightbox="example-set" data-title="Tempe Goreng Garing">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/9.jpg') }}" alt="Pelanggan Kedai">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Pelanggan Setia Kami</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/9.jpg') }}" data-lightbox="example-set" data-title="Pelanggan Setia Kami">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{ asset('assets/images/portfolio/10.jpg') }}" alt="Proses Memasak">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>Proses Meracik Kaldu</h4>
                                                <span>Klik untuk perbesar</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{ asset('assets/images/portfolio/10.jpg') }}" data-lightbox="example-set" data-title="Proses Meracik Kaldu">Full View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection