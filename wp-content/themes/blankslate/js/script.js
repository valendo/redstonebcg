

// spanel box login
 $(document).ready(function () {           
       $(".btlivechat").click(function () 	   
	   {
       $(".live-chat").animate({ right:10}, 400)
	   $(".btlivechat").animate({ bottom:-39 }, 100)	   
	   });
	   
       $(".btn-close").click(function () {
       $(".live-chat").animate({ right: -305 }, 500);
	   $(".btlivechat").animate({ bottom:0 }, 500) });
	   
       //$(".live-chat").animate({ right:0 }, 500); 
	   });
	   
// spanel sider
 $(document).ready(function () {           
       $(".btsidebar").click(function () 	   
	   {       
	   $(".btsidebar").animate({ left:-36 }, 400)	
	   $(".sidebar").animate({ left: 0 }, 500);   
	   });
	   	   
       $(".sidebar a,.sidebar .close").click(function () {
       $(".sidebar").animate({ left: -295 }, 500);
	   $(".btsidebar").animate({ left:0 }, 500) });
	   
       $("sidebar").animate({ left: -295}, 500); 
	   });
	   	   
				
//==== Croll to top========
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});

// maps contact me
/*
 $('#map').gMap({
        address: "Jason Jimenez Insurance Agency Inc,8323 Southwest Frwy #390,Houston, TX 77074 ",
        zoom: 14,
		scrollwheel: true,
		markers:[
			{
				latitude: -10.77353,
				longitude: -106.694411,
				html: "_latlng"
			},
			{
				address: "8323 Southwest Frwy #390,Houston",
				html: "<div style=' line-height:18px; height:100px; width:250px'><p style='font-sixe:18px; font-weight:bold'>Jason Jimenez </p><p>Address: 8323 Southwest Frwy #390 Houston, TX 77074</p><p>Email: jason@jasonjimenezinsurance.com</p><p>PHONE:713-270-0073 - 713-600-1404</p></div>",
				popup: true
			},
			{
				address: "117 Nguyễn Du, Quận 1, Hồ Chí Minh, Việt Nam",
				html: "_address"
			}
		]
    });
*/
	
