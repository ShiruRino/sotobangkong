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
        <a href="{{ url('/') }}">
            <img src="{{ isset($contactSetting->logo_image) && $contactSetting->logo_image ? asset('storage/' . $contactSetting->logo_image) : asset('assets/images/logo.png') }}" alt="Logo Soto Bangkong" style="max-width: 200px;">
        </a>
    </div>
    
    <div class="office-title">
        <h2>{{ $contactSetting->office_title ?? 'Kantor Pusat & Kedai Utama' }}</h2>
    </div>
    
    <div class="address-info">
        <ul>
            <li> 
                <i class="fa fa-map-marker" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                <span>{{ $contactSetting->address_line_1 ?? 'Jl. Pakubuwono VI No.39, Kebayoran Baru,' }}</span> 
                <span>{{ $contactSetting->address_line_2 ?? 'Jakarta Selatan, DKI Jakarta 12120' }}</span> 
            </li>
            
            <li style="margin-top: 15px;"> 
                <i class="fa fa-phone" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                <span>Telepon: {{ $contactSetting->phone ?? '(021) 720 0000' }}</span> 
                <span>WhatsApp: {{ $contactSetting->whatsapp ?? '0812 888 47857' }}</span> 
            </li>
            
            <li style="margin-top: 15px;"> 
                <i class="fa fa-envelope" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                <span>{{ $contactSetting->email_1 ?? 'halo@sotobangkongjkt.com' }}</span> 
                @if(isset($contactSetting->email_2) && $contactSetting->email_2)
                    <span>{{ $contactSetting->email_2 }}</span> 
                @endif
            </li>
        </ul>
    </div>
    
    <div class="office-title" style="margin-top: 40px;">
        <h2>{{ $contactSetting->hours_title ?? 'Jam Operasional' }}</h2>
    </div>
    <div class="address-info">
        <ul>
            <li> 
                <i class="fa fa-clock-o" style="font-size: 24px; color: #ffcc00; margin-right: 15px;"></i> 
                <span>{{ $contactSetting->weekday_hours ?? 'Senin - Jumat: 07.30 - 21.00 WIB' }}</span> 
                <span>{{ $contactSetting->weekend_hours ?? 'Sabtu - Minggu: 07.00 - 22.00 WIB' }}</span> 
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
                                
                                @if(session('success'))
                                    <div class="alert alert-success" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: 15px; margin-bottom: 20px; border-radius: 4px;">
                                        <strong>Berhasil!</strong> {{ session('success') }}
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                        
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf 
                            <div class="row">
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