<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Soto Bangkong Jakarta">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soto Bangkong - Jakarta</title>
    
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">          
    
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">        
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">  
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">                                                                      
    <link href="{{ asset('assets/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fakeLoader.css') }}" rel="stylesheet">    
    <link href="{{ asset('assets/css/jquery.lineProgressbar.css') }}" rel="stylesheet">   
    <link href="{{ asset('assets/css/animated-headline.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/css/xplor.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/xplor-responsive.css') }}" rel="stylesheet" media="screen">
    
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
    <div id="fakeLoader"></div>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/mixItup.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/fakeLoader.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcvAXp35fi4q7HXm7vcG9JMtzQbMzjRe8"></script>  
    <script src="{{ asset('assets/js/gmaps.js') }}"></script>  
    <script src="{{ asset('assets/js/jquery.lineProgressbar.js') }}"></script>     
    <script src="{{ asset('assets/js/active-progress.js') }}"></script>   
    <script src="{{ asset('assets/js/animated-headline.js') }}"></script>            
    <script src="{{ asset('assets/js/custom-script.js') }}"></script>    
</body>
</html>