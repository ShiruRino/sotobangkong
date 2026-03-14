@extends('layouts.app')

@section('content')

    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcumb-title text-center">
                        <h2>Hubungi Kami</h2>
                        <h3>Pemesanan, Kemitraan & Kritik Saran</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page-area section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="office-address-area">
                        <div class="logo-area" style="margin-bottom: 30px;">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo Soto Bangkong" style="max-width: 200px;"></a>
                        </div>
                        <div class="office-title">
                            <h2>Kantor Pusat & Kedai Utama</h2>
                        </div>
                        <div class="address-info">
                            <ul>
                                <li> 
                                    <i class="fa fa-map-marker" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                                    <span>Jl. Pakubuwono VI No.39, Kebayoran Baru,</span> 
                                    <span>Jakarta Selatan, DKI Jakarta 12120</span> 
                                </li>
                                <li style="margin-top: 15px;"> 
                                    <i class="fa fa-phone" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                                    <span>Telepon: (021) 720 0000</span> 
                                    <span>WhatsApp: 0812 888 47857</span> 
                                </li>
                                <li style="margin-top: 15px;"> 
                                    <i class="fa fa-envelope" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                                    <span>halo@sotobangkongjkt.com</span> 
                                    <span>marketing@sotobangkongjkt.com</span> 
                                </li>
                            </ul>
                        </div>
                        
                        <div class="office-title" style="margin-top: 40px;">
                            <h2>Jam Operasional</h2>
                        </div>
                        <div class="address-info">
                            <ul>
                                <li> 
                                    <i class="fa fa-clock-o" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                                    <span>Senin - Jumat: 07.30 - 21.00 WIB</span> 
                                    <span>Sabtu - Minggu: 07.00 - 22.00 WIB</span> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="contact-form-area">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="contact-form-title">
                                    <h2>Kirim Pesan</h2>
                                    <p style="margin-top: 10px; margin-bottom: 20px;">Punya pertanyaan seputar menu, katering partai besar, atau info kemitraan *franchise*? Jangan ragu untuk mengisi formulir di bawah ini.</p>
                                </div>
                            </div>
                        </div>
                        
                        <form action="#" method="POST">
                            @csrf <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Alamat Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="telepon" placeholder="Nomor Telepon / WhatsApp *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="subjek" required style="border: 1px solid #ddd; height: 45px; border-radius: 0; box-shadow: none;">
                                            <option value="" disabled selected>Pilih Keperluan *</option>
                                            <option value="pesanan">Pemesanan / Delivery</option>
                                            <option value="catering">Tanya Layanan Catering</option>
                                            <option value="franchise">Info Kemitraan (Franchise)</option>
                                            <option value="kritik">Kritik & Saran</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="pesan" rows="6" placeholder="Tuliskan detail pesanan atau pertanyaan Anda di sini... *" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-btn text-right">
                                        <button type="submit" style="background-color: #ffcc00; color: #000; font-weight: bold; padding: 10px 30px; border: none; text-transform: uppercase;">Kirim Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection