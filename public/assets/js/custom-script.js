jQuery(document).ready(function ($) {
 "use strict";
// 
//----------------------------------
//wow js active
//----------------------------------
 new WOW().init();
 
 //fakeLoader js active
//----------------------------------
 $("#fakeLoader").fakeLoader({
	timeToHide:1200, 
	zIndex:"999",
	spinner:"spinner6",
	bgColor:"#eb1c1c", 

});
//js scrollup
//----------------------------------
$.scrollUp({
	scrollText: '<i class="fa fa-angle-up"></i>',
	easingType: 'linear',
	scrollSpeed: 900,
	animation: 'fade'
}); 
// Sticky Menu Activation Code
//----------------------------------
$(window).on('scroll', function(){
	if( $(window).scrollTop()>80 ){
		$('#sticky').addClass('stick');
		} else {
		$('#sticky').removeClass('stick');
	}
}); 
//google map activation 
//----------------------------------- 
	if ($('#gmap').length > 0) {
		new GMaps({
			div: '#gmap',
			lat: 23.7947172, // 23.7947172,90.3971412
			lng: 90.3971412,
			scrollwheel: false,				
			styles: [
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dddddd"
						},
						{
							"lightness": 20
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dddddd"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ffffff"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#ffffff"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "on"
						}
					]
				}
			]
		}).addMarker({
			lat: 23.792930, //23.792930, 90.403798
			lng: 90.403798,
			infoWindow: {
				content: '<p>Radontheme,Gulshan</p>'
			}
			});
	}
//landing slider active
//----------------------------------
var owl = $('.owl-carousel.slide-slider')
owl.owlCarousel({
	items: 1,
	autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
	singleItem: false,
	loop: true,
	margin: 0,
	nav: false,
	dots:true,
});
function setAnimation(_elem,_InOut){var animationEndEvent='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';_elem.each(function(){var $elem=$(this);var $animationType='animated '+$elem.data('animation-'+_InOut);$elem.addClass($animationType).one(animationEndEvent,function(){$elem.removeClass($animationType)})})}
owl.on('change.owl.carousel',function(event){var $currentItem=$('.owl-item',owl).eq(event.item.index);var $elemsToanim=$currentItem.find("[data-animation-out]");setAnimation($elemsToanim,'out')});var round=0;owl.on('changed.owl.carousel',function(event){var $currentItem=$('.owl-item',owl).eq(event.item.index);var $elemsToanim=$currentItem.find("[data-animation-in]");setAnimation($elemsToanim,'in')})
owl.on('translated.owl.carousel',function(event){console.log(event.item.index,event.page.count);if(event.item.index==(event.page.count-1)){if(round<1){round++
console.log(round)}else{owl.trigger('stop.owl.autoplay');var owlData=owl.data('owl.carousel');owlData.settings.autoplay=!1;owlData.options.autoplay=!1;owl.trigger('refresh.owl.carousel')}}});
//team activation code
//----------------------------------
$(".owl-carousel.slide-testimonial").owlCarousel({
	autoPlay: true, 
	slideSpeed:3000,
	pagination:false,
	navigation:false,	  
	items :1,
	/* transitionStyle : "fade", */    /* [This code for animation ] */
	navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	itemsDesktop : [1199,1],
	itemsDesktopSmall : [980,1],
	itemsTablet: [768,1],
	itemsMobile : [479,1],
});	
/*-------------------------------------
     Window load function
     -------------------------------------*/
    $(window).on('load', function () {
        /*-------------------------------------
         jQuery for mixItUp initialization
         -------------------------------------*/
         $(".blog-list").mixItUp({
            'animation' : {
                'animation' : true, 
                'effects' : 'rotateX translateZ scale'
            }
        });
    });// end window load function
//Counter up activation 	
//=================
$(".funfact-counter").counterUp({
	delay: 50,
	time: 3000
});

}); 