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
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                
                <ul class="nav navbar-nav navbar-right">  
                    <li><a href="{{ url('/about') }}">TENTANG KAMI</a></li>
                    <li><a href="{{ url('/menu') }}">MENU </a></li>
                    <li><a href="{{ url('/catering') }}">LAYANAN CATERING</a></li>                    
                    <li><a href="{{ url('/outlet') }}">OUTLET </a></li>
                    <li><a href="{{ url('/contact') }}">KONTAK </a></li>
                    <li><a href="{{ url('/gallery') }}">GALERI</a></li>                           
                </ul>
            </div></div></nav>
</div>