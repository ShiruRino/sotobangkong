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
        <div class="container ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about-xplor-title">
                        <h2>SEJARAH SOTO BANGKONG</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-xplor-content">
                        <p>Berawal dari sebuah pikulan sederhana di perempatan Jalan Bangkong, Semarang pada tahun 1950, <strong>Soto Bangkong</strong> memulai perjalanan panjangnya. Nama "Bangkong" sendiri diambil dari nama jalan tempat kami pertama kali merintis usaha, yang kini dikenal sebagai Jalan Brigjen Katamso.</p>
                        
                        <p>Kelezatan kaldu bening yang kaya rempah, dipadukan dengan ayam kampung pilihan, bihun, kecambah, dan taburan bawang putih goreng, membuat Soto Bangkong perlahan tapi pasti menjadi primadona kuliner di hati masyarakat. Kesederhanaan dan keaslian rasa inilah yang terus kami jaga dari generasi ke generasi.</p>

                        <p>Kini, Soto Bangkong telah hadir di Jakarta untuk mengobati kerinduan para perantau dan pecinta kuliner nusantara akan cita rasa soto Semarang yang otentik. Kami bangga dapat terus menyajikan warisan kuliner legendaris ini dengan kualitas dan pelayanan terbaik untuk Anda.</p>
                    </div>
                </div>
                <div class="col-md-6 hidden-md hidden-lg">
                    <div class="about-xplor-imgg">
                        <img src="{{ asset('assets/images/about/1.jpg') }}" alt="Sejarah Soto Bangkong">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-xplor-bg">
            <img src="{{ asset('assets/images/about/1.jpg') }}" alt="Soto Bangkong Dulu">
        </div>
    </div>
    <div class="xplor-theme section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="xplor-theme-title">
                        <h2>FILOSOFI RASA</h2>
                    </div>
                </div>
                <div class="col-md-6 hidden-md hidden-lg">
                    <div class="xplor-theme-img">
                        <img src="{{ asset('assets/images/about/2.jpg') }}" alt="Filosofi Resep">
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-6">
                    <div class="xplor-theme-content">
                        <p> <span>Bumbu Rahasia</span> kami bukanlah sekadar campuran rempah-rempah biasa. Ia adalah dedikasi, konsistensi, dan cinta pada budaya kuliner Indonesia yang kami warisi sejak dulu.</p>
                        
                        <p>Berbeda dengan soto dari daerah lain, Soto Bangkong memiliki ciri khas kuah kaldu yang bening sedikit kecoklatan, hasil dari penggunaan kecap manis produksi rumahan yang kami bawa langsung dari Semarang. Perpaduan manis, gurih, dan segar dalam satu suapan adalah janji yang selalu kami tepati di setiap porsinya.</p>

                        <p>Kami percaya bahwa makanan enak tidak hanya memanjakan lidah, tapi juga mampu membangkitkan kenangan. Itulah mengapa kami selalu mempertahankan metode memasak tradisional untuk menjaga keaslian rasa, agar setiap suapan Soto Bangkong selalu terasa seperti pulang ke rumah.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="xplor-theme-left-bg">
            <img src="{{ asset('assets/images/about/1.jpg') }}" alt="Bumbu Soto">
        </div>
    </div>
    <div class="team-area section ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-area-title">
                        <h2>DI BALIK DAPUR KAMI</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="single-team">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/team/chef1.jpg') }}" alt="Head Chef">
                        </div>
                        <div class="member-info">
                            <div class="member-name">
                                <h3><a href="#">Pak Yanto</a></h3>
                                <span>Kepala Dapur</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-team">
                                <div class="member-img">
                                    <img src="{{ asset('assets/images/team/chef2.jpg') }}" alt="Cook">
                                </div>
                                <div class="member-info">
                                    <div class="member-name">
                                        <h3><a href="#">Mas Ari</a></h3>
                                        <span>Spesialis Kaldu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-team">
                                <div class="member-img">
                                    <img src="{{ asset('assets/images/team/chef3.jpg') }}" alt="Cook">
                                </div>
                                <div class="member-info">
                                    <div class="member-name">
                                        <h3><a href="#">Mbak Ningsih</a></h3>
                                        <span>Peracik Bumbu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-team">
                                <div class="member-img">
                                    <img src="{{ asset('assets/images/team/chef4.jpg') }}" alt="Service">
                                </div>
                                <div class="member-info">
                                    <div class="member-name">
                                        <h3><a href="#">Mas Dono</a></h3>
                                        <span>Manager Outlet</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="single-team">
                                <div class="member-img">
                                    <img src="{{ asset('assets/images/team/chef5.jpg') }}" alt="Service">
                                </div>
                                <div class="member-info">
                                    <div class="member-name">
                                        <h3><a href="#">Staff</a></h3>
                                        <span>Kepala Pelayanan</span>
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