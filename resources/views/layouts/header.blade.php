<div class="header-area" id="sticky">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo_header.png') }}" alt="Logo Soto Bangkong" style="height: 100%">
                </a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                
                <ul class="nav navbar-nav navbar-right">  
                    
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}">BERANDA <span>Main Page</span></a>
                    </li>
                    <li class="{{ request()->is('about') ? 'active' : '' }}">
                        <a href="{{ url('/about') }}">TENTANG KAMI <span>About Us</span></a>
                    </li>
                    <li class="{{ request()->is('menu') ? 'active' : '' }}">
                        <a href="{{ url('/menu') }}">MENU <span>Daftar Menu</span></a>
                    </li>
                    <li class="{{ request()->is('catering') ? 'active' : '' }}">
                        <a href="{{ url('/catering') }}">LAYANAN CATERING <span>Pesan Besar</span></a>
                    </li>                    
                    <li class="{{ request()->is('outlet') ? 'active' : '' }}">
                        <a href="{{ url('/outlet') }}">OUTLET <span>Cabang Kami</span></a>
                    </li>
                    <li class="{{ request()->is('gallery') ? 'active' : '' }}">
                        <a href="{{ url('/gallery') }}">GALERI <span>Foto Menu</span></a>
                    </li>                           
                    <li class="{{ request()->is('contact') ? 'active' : '' }}">
                        <a href="{{ url('/contact') }}">KONTAK <span>Hubungi Kami</span></a>
                    </li>

                </ul>
            </div></div></nav>
</div>