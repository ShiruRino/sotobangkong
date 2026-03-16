        <!-- footer start here -->
        <footer class="footer-area">
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
                    
                    <div class="footer-logo" style="margin-bottom: 30px;">
                        <a href="{{ url('/') }}">
                            <img src="{{ isset($contactSetting->logo_image) && $contactSetting->logo_image ? asset('storage/' . $contactSetting->logo_image) : asset('assets/images/footer-logo.png') }}" alt="Logo Soto Bangkong" style="max-height: 80px;">
                        </a>
                    </div>
                    
                    <div class="footer-top-content" style="margin-bottom: 30px;">
                        <p>Nikmati kehangatan semangkuk soto otentik khas Semarang di {{ $contactSetting->office_title ?? 'Soto Bangkong' }}. Melayani makan di tempat, pesan antar, dan paket catering untuk berbagai acara Anda.</p>
                    </div>

                    <div class="footer-contact-info" style="color: #fff; margin-bottom: 40px; font-size: 15px; line-height: 2;">
                        <p>
                            <i class="fa fa-map-marker" style="color: #ffcc00; margin-right: 10px;"></i>
                            {{ $contactSetting->address_line_1 ?? 'Jl. Pakubuwono VI No.39' }} 
                            {{ $contactSetting->address_line_2 ?? 'Jakarta Selatan' }}
                        </p>
                        <p>
                            <i class="fa fa-clock-o" style="color: #ffcc00; margin-right: 10px;"></i>
                            {{ $contactSetting->weekday_hours ?? 'Setiap Hari: 07.30 - 21.00 WIB' }}
                        </p>
                        <p>
                            <i class="fa fa-phone" style="color: #ffcc00; margin-right: 10px;"></i>
                            {{ $contactSetting->phone ?? '(021) 720 0000' }} &nbsp; | &nbsp;
                            <i class="fa fa-whatsapp" style="color: #ffcc00; margin-right: 10px;"></i>
                            {{ $contactSetting->whatsapp ?? '0812 888 47857' }}
                        </p>
                        <p>
                            <i class="fa fa-envelope" style="color: #ffcc00; margin-right: 10px;"></i>
                            {{ $contactSetting->email_1 ?? 'halo@sotobangkongjkt.com' }}
                        </p>
                    </div>

                    <div class="footer-social-media">
                        <ul>
                            <li><a href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="active"><a href="#" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" aria-label="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" aria-label="Youtube"><i class="fa fa-youtube-play"></i></a></li>                                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copy-right-area">
                        <p> &copy; {{ date('Y') }} <span>Soto Bangkong Jakarta</span>. All Rights Reserved. </p>
                    </div>  
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-menu text-right">
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><a href="{{ url('/menu') }}">Menu</a></li>
                            <li><a href="{{ url('/contact') }}">Hubungi Kami</a></li>                                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
        <!-- footer end here -->