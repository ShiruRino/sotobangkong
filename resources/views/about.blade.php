@extends('layouts.app')

@section('content')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcumb-title text-center">
                        <h2>Tentang Kami</h2>
                        <h3>Kisah Sejarah Soto Bangkong</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-xplor-area section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-xplor-title">
                        <h2>{{ $aboutSetting->history_title ?? 'SEJARAH SOTO BANGKONG' }}</h2>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="about-xplor-content">
                        @if($aboutSetting && $aboutSetting->history_content)
                            {!! $aboutSetting->history_content !!}
                        @else
                            <p>Berawal dari sebuah pikulan sederhana di perempatan Jalan Bangkong, Semarang pada tahun 1950, <strong>Soto Bangkong</strong> memulai perjalanan panjangnya. Nama "Bangkong" sendiri diambil dari nama jalan tempat kami pertama kali merintis usaha.</p>
                            <p>Kelezatan kaldu bening yang kaya rempah, dipadukan dengan ayam kampung pilihan, bihun, kecambah, dan taburan bawang putih goreng, membuat Soto Bangkong perlahan tapi pasti menjadi primadona kuliner.</p>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-6 hidden-md hidden-lg">
                    <div class="about-xplor-imgg">
                        <img src="{{ isset($aboutSetting->history_image) && $aboutSetting->history_image ? asset('storage/' . $aboutSetting->history_image) : asset('assets/images/about/1.jpg') }}" alt="Sejarah Soto" style="object-fit: scale-down;">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="about-xplor-bg">
            <img src="{{ isset($aboutSetting->history_image) && $aboutSetting->history_image ? asset('storage/' . $aboutSetting->history_image) : asset('assets/images/about/1.jpg') }}" alt="Soto Bangkong Dulu" style="object-fit: scale-down">
        </div>
    </div>

    <div class="xplor-theme section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="xplor-theme-title">
                        <h2>{{ $aboutSetting->philosophy_title ?? 'FILOSOFI RASA' }}</h2>
                    </div>
                </div>
                
                <div class="col-md-6 hidden-md hidden-lg">
                    <div class="xplor-theme-img">
                        <img src="{{ isset($aboutSetting->philosophy_image) && $aboutSetting->philosophy_image ? asset('storage/' . $aboutSetting->philosophy_image) : asset('assets/images/about/2.jpg') }}" alt="Filosofi Resep" style="object-fit: scale-down">
                    </div>
                </div>
                
                <div class="col-md-6 col-md-offset-6">
                    <div class="xplor-theme-content">
                        @if($aboutSetting && $aboutSetting->philosophy_content)
                            {!! $aboutSetting->philosophy_content !!}
                        @else
                            <p><span>Bumbu Rahasia</span> kami bukanlah sekadar campuran rempah-rempah biasa. Ia adalah dedikasi, konsistensi, dan cinta pada budaya kuliner Indonesia yang kami warisi sejak dulu.</p>
                            <p>Berbeda dengan soto dari daerah lain, Soto Bangkong memiliki ciri khas kuah kaldu yang bening sedikit kecoklatan, hasil dari penggunaan kecap manis produksi rumahan yang kami bawa langsung dari Semarang.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <div class="xplor-theme-left-bg">
            <img src="{{ isset($aboutSetting->philosophy_image) && $aboutSetting->philosophy_image ? asset('storage/' . $aboutSetting->philosophy_image) : asset('assets/images/about/2.jpg') }}" alt="Bumbu Soto" style="object-fit: scale-down">
        </div>
    </div>

    <div class="team-area section" style="margin-top:5rem;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-area-title">
                        <h2>DI BALIK DAPUR KAMI</h2>
                    </div>
                </div>
                
                @if($headChef)
                    <div class="col-md-4 col-sm-4">
                        <div class="single-team">
                            <div class="member-img">
                                <img src="{{ asset('storage/' . $headChef->image) }}" alt="{{ $headChef->name }}" style="width: 100%; height: 400px; object-fit: cover;">
                            </div>
                            <div class="member-info">
                                <div class="member-name">
                                    <h3><a href="#">{{ $headChef->name }}</a></h3>
                                    <span>{{ $headChef->position }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-8 col-sm-8">
                        <div class="row">
                            @foreach($otherMembers as $member)
                                <div class="col-md-6 col-sm-6">
                                    <div class="single-team">
                                        <div class="member-img">
                                            <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" style="width: 100%; height: 280px; object-fit: cover;">
                                        </div>
                                        <div class="member-info">
                                            <div class="member-name">
                                                <h3><a href="#">{{ $member->name }}</a></h3>
                                                <span>{{ $member->position }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="col-12 text-center">
                        <p>Belum ada data anggota tim.</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
    
@endsection