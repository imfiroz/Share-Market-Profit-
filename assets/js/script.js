(function($) {

	"use strict";
	
	/* ================ Choose your template theme color, skin and layout. ================ */
	
	var $theme				= 'light',		// available values: 'light','dark'.
		$skin				= 'default',	// available values: 'default','1','2','3','4','5','6','7','8','9'.
		$layout				= 'wide',		// available values: 'wide','boxed'.
		$bodyclass			= 'bg1',		// for boxed layout only, available values: patterns : 'bg1','bg2','bg3','bg4','bg5','bg6','bg7','bg8','bg9','bg10' & background images: 'bg11','bg12','bg13'.
		$rtl				= '0',			// 0 is false and 1 is true.
		$loadin 			= '1',			// 0 is false and 1 is true.
		$sticky 			= '1',			// 0 is false and 1 is true.
		$totop 				= '1';			// 0 is false and 1 is true.
		
	var theme_css	= $('#theme_css').attr('href'),
		theme_name	= theme_css.substring(theme_css.lastIndexOf("/") + 1, theme_css.length),
		th_nam		= theme_name.replace('.css',''),
		skin_css	= $('#skin_css').attr('href'),
		skin_name	= skin_css.substring(skin_css.lastIndexOf("/") + 1, skin_css.length),
		sk_nam		= skin_name.replace('.css',''),
		theme_url 	= theme_css.replace(theme_name,''),
		skin_url 	= skin_css.replace(skin_name,'');

	if($theme == th_nam || th_nam == 'light'){
		$('#theme_css').attr('href',theme_url+$theme+'.css');
	}else{
		$('#theme_css').attr('href',theme_url+th_nam+'.css');
	}
		
	if($skin == sk_nam || sk_nam == 'default'){
		$('#skin_css').attr('href',skin_url+$skin+'.css');
	}else{
		$('#skin_css').attr('href',skin_url+sk_nam+'.css');
	}
	
	if($layout != 'wide'){
		$('.pageWrapper').addClass('boxed');
		if($('body').attr('class') == undefined){
			$('body').addClass($bodyclass);
		}
		
	}
	
	if($rtl == '1'){
		$('head').append('<link rel="stylesheet" href="assets/css/rtl.css">');
		var $rt = true;
	}else{
		var $rt = false;
	}


	if($loadin == '1'){
		$('.page-loader').prepend('<div class="cssload-container"><div class="cssload-lt"></div><div class="cssload-rt"></div><div class="cssload-lb"></div><div class="cssload-rb"></div></div>');
	}else{
		$(".page-loader").remove();
	}

	/* ================ Dynamic content height. ================ */
	if($('.pageContent').length){
		var winH = $(window).height(),
			headH = parseInt($('.top-head').outerHeight(),10),
			footH = parseInt($('#footWrapper').outerHeight(),10),
			mtop = winH - 200,
			H = winH -(headH + footH);

		$('.pageContent').css('min-height',H+"px");
		$('.gmap.fullscreen').css({'height':winH+"px"});
		$('.fullscreen-contact').css({'margin-top': mtop+"px"});
		
		if($('.fixed-footer').length){
			$('.pageContent').css('margin-bottom',footH+"px");
		}

		if($('#footWrapper').hasClass('fixed-footer')){
			$('.pageContent').addClass('white-bg');
		}
	}

	/* ================ Check for Mobile. ================ */
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	 	$('html').addClass('touch');
	}else{
		$('html').addClass('no-touch');
	}
	$('.touch .fx').addClass('animated'); // disables mobile animations

	var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
	if (isSafari){
		$('html').addClass('safari');
	}

	/* ================ Top Menu. ================ */
	var mainnav = $('.top-nav > ul');
	mainnav.find('li').not('.mega-menu li').each(function(){
		var submenu = $(this).find('> ul');
		if (submenu.length){
			$(this).addClass('hasChildren');
			var $sub = $(this).find('> ul'),
				$contain = $('.top-head .container');
			if($sub.length && $contain.length){
				var $c = $contain.width() + $contain.offset().left;
				$sub.each(function(){
					var $lft = $(this).offset().left + $(this).outerWidth() - 60;
					if( $lft > $c){
						$(this).addClass('rit-menu');
					}
				});
			}else{
				var $ww = $(window).width();
				$sub.each(function(){
					var $lt = $(this).offset().left + $(this).outerWidth() - 60;
					if( $lt > $ww){
						$(this).addClass('rit-menu');
					}
				});
			}
			var delay = 0;
			$(this).find('> ul > li').each(function(){
				$(this).css({transitionDelay: delay+'ms'});
				delay += 50;
			});
		}
	});
	
	/* =================== Side Nav ===================== */
	if($('.header-left').length > 0){
		$('.pageWrapper').addClass('left-s side-wrap');
	}
	if($('.header-right').length > 0){
		$('.pageWrapper').addClass('right-s side-wrap');
	}

	if($('.side-nav').length > 0){
		var side_nav = $('.side-nav'),
			side_menu = $('.side-nav > ul'),
			items = side_menu.find('li');
		side_nav.addClass('dl-menuwrapper');
		side_menu.addClass('dl-menu');	
		side_menu.find('ul').addClass('dl-submenu');
		side_nav.dlmenu();
		$('.top-head').mCustomScrollbar({
			axis:"y",
			scrollInertia: 200
		});
		items.each(function(){
			var ul = $(this).find('ul:first');
			if (ul.length){
				$(this).addClass('hasChildren');
			}
		});
	}
	
	/* ================ Show Hide Search box. ================ */
	$(document).delegate('.top-head.header-1 .top-search > a', 'click',function(){
		var sbox = $(this).parent().find('.search-box');
		if(sbox.is(':visible')){
			$(this).parent().removeClass('actsrch');
			$(this).find('> span').removeClass('fa-times');
			$('.top-nav').delay(500).fadeIn(500);
			sbox.animate({width: '0px'}, 500, 'easeInSine').hide(500);
			return false;
		}else{
			$(this).parent().addClass('actsrch');
			$(this).find('> span').addClass('fa-times');
			$('.top-nav').fadeOut(500);	
			sbox.delay(300).animate({width: '400px'}, 500, 'easeInSine').show();
			return false;
		}
	});

	$(document).delegate('.top-head:not(.header-1) .top-search > a', 'click',function(){
		var sbox = $(this).parent().find('.search-box');
		if(sbox.is(':visible')){
			$(this).parent().removeClass('ac-search main-bg');
			sbox.fadeOut();
			$(this).find('> span').removeClass('fa-times');
			return false;
		}else{
			$(this).parent().addClass('ac-search main-bg');
			$(this).find('> span').addClass('fa-times');
			sbox.addClass('main-bg').fadeIn();
			return false;
		}
	});
	
	/* ================ Show Hide Cart box. ================ */
	$(document).delegate('.top-cart > a', 'click',function(){
		if($(this).parent().find('.cart-box').is(':visible')){
			$(this).parent().removeClass('selected').find('.cart-box').fadeOut(300);
			return false;
		}else{
			$(this).parent().addClass('selected').find('.cart-box').fadeIn(300);
			return false;
		}
	});
	
	$(document).on("mouseup",function(e){
		if($('.cart-box').is(':visible')){
			var targ = $(".cart-box");
			if (!targ.is(e.target) && targ.has(e.target).length === 0){
			$('.cart-box').fadeOut(300);
			$('.top-cart').removeClass('selected');
			}
		}
	});
	
	/* ============== Responsive Menu ================== */
	
	if($('.responsive-nav').length){
		var onp = '';
		if($('.responsive-nav > nav').hasClass('one-page')){
			onp = 'responsive-one';
		}
		$('.pageWrapper').prepend('<div class="newNav dark-bg '+onp+'"><span class="cls"></span><span class="responsive-menu"></span><span class="cls"></span><i class="clo"></i></div>');
		var responsnav = $('.responsive-nav').find('nav').html();
		$('.responsive-menu').html(responsnav);
		var delay = 0;
		$('.responsive-menu').find('> ul > li').each(function(){
			$(this).css({transitionDelay: delay+'ms'});
			delay += 50;
		});

		if($('.responsive-one').length){
			$('.responsive-one').onePageNav();
		}

		$('.responsive-menu').find('ul li.hasChildren').each(function(){
			$(this).find(' > a').append('<b class="child-arrow fa fa-angle-right"></b>');
			$(this).find(' h4').append('<b class="child-arrow fa fa-angle-right"></b>');
			$(this).find('.child-arrow').on("click",function(e){
				e.preventDefault();
				$(this).toggleClass('rot-lft');
				$(this).parent().parent().find('> ul').slideToggle();
				$(this).parent().parent().find('.mega-content').find('ul').slideToggle();
				$(this).parent().parent('li.hasChildren').toggleClass('active');
				return false;
			});
		});
		$(document).delegate('.newNav', 'click', function(event){
	        $(this).addClass('oppenned');
	        $('.clo').show();
	        event.stopPropagation();
	    })
	    $(document).delegate('body', 'click', function(event) {
	        $('.newNav').removeClass('oppenned');
	        $('.clo').hide();
	    })
	    $(document).delegate('.clo', 'click', function(event){
	        $('.newNav').removeClass('oppenned');
	        $(this).hide();
	        event.stopPropagation();
	    });

	    $('.responsive-menu > ul').mCustomScrollbar({
			axis:"y",
			scrollInertia: 200
		});
	}

	/* ================ Back to top button. ================ */
	var ScrlTop = $(window).scrollTop();
	
	if($totop == '0'){
		$('#to-top').css('display','none');
	}else{
		if (ScrlTop > 400) {
			$('#to-top').fadeIn();
		} else {
			$('#to-top').fadeOut();
		}	
	}


	$('#to-top,.divider .to-top').on("click",function(){
		$('html, body').animate({scrollTop: '0px'}, 800);
		return false;
	});

	
	// rectangular angles |_    _| styling.
	$('.rect-angles').each(function(){
		$(this).children().wrapAll('<span><span><span></span></span></span>');
	});
	
	
	// icon boxes 1 equal height.
	$('.icon-box-1').each(function(){
		var parH = $(this).parent().outerHeight();
		$(this).css('height',parH);
	});

	$('.heading.main').each(function(){
		$(this).find('.lg-title').after('<b class="head-sep"><u></u></b>');
	});
	
	/* ================ Tabs. ================ */
	$('.menu-tabs').each(function() {
		$(this).find('.nav-tabs a').each(function(){
			$(this).on('click',function(){
				var idd = $(this).attr('href').replace('#','');;
				$(this).parent().parent().parent().find('.tab-pane').removeClass('in active');
				$(this).parent().parent().parent().find('#'+idd).addClass('in active');
			});
		});
		
	});

	/* ================ Menu items height =============== */
	if($('.top-head:not(.header-1)').length){
		var logH ='';
		if($('.header-2').hasClass('boxed')){
			logH = $('.top-head:not(.center-logo) .logo').outerHeight() - 35;
		}else{
			logH = $('.top-head:not(.center-logo) .logo').outerHeight();
		}
		if(logH > 65){
			$('.top-nav > ul > li > a > span, .top-nav > ul > li > span > a > span,.top-head .top-search > a,.top-head .top-cart > a').css('line-height',logH+"px");
		}
	}

	/* ================ Portfolio Filterable IsoTope. ================ */
	if($('#grid').length){
		var $grid = $('#grid').isotope({
			layoutMode: 'fitRows'
		});
				
		$grid.imagesLoaded( function() {
			$grid.isotope();
		});
		
		$('#filters').on( 'click', 'a.filter', function(e) {
			e.preventDefault();
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
			var $this = $(this);
			if ( $this.parent().hasClass('selected') ) {
				return false;
			}
			var $optionSet = $this.parents('#filters');
			$optionSet.find('.selected').removeClass('selected');
			$this.parent().addClass('selected');
		});
	}
	
	/* ================ Masonry IsoTope. ================ */
	if($('#masonry').length){
		var $masonry = $('#masonry').isotope({
			layoutMode: 'masonry',
			isFitWidth: true
		});
		
		$masonry.imagesLoaded( function() {
			$masonry.isotope();
		});
		
		$('#filters').on( 'click', 'a.filter', function(e) {
			e.preventDefault();
			var filterValue = $(this).attr('data-filter');
			$masonry.isotope({ filter: filterValue });
			var $this = $(this);
			if ( $this.parent().hasClass('selected') ) {
				return false;
			}
			var $optionSet = $this.parents('#filters');
			$optionSet.find('.selected').removeClass('selected');
			$this.parent().addClass('selected');
		});
	}
	
	/* ================ social links copy :after icon. ================ */
	$('.social-list a i').each(function(){
    	var contt = window.getComputedStyle(this,':before').content.replace(/\'/g, "").replace(/\"/g, "");
    	$(this).attr('data-hover',contt);
	});

	
	/* ================ Slick Sliders. ================ */
	var runSlick = function() {
	
		/* Horizontal slider */
		if($('.horizontal-slider').length > 0){
			
			$('.horizontal-slider').each(function(){
				var slides_n 	= parseInt($(this).attr('data-slides_count'),10),
					sscrol 		= parseInt($(this).attr('data-scroll_amount'),10),
					t_infinite 	= $(this).attr('data-slider-infinite'),
					t_arr 		= $(this).attr('data-slider-arrows'),
					speed_n 	= $(this).attr('data-slider-speed'),
					t_fade 		= $(this).attr('data-slider-fade'),
					t_dots 		= $(this).attr('data-slider-dots'),
					t_auto 		= $(this).attr('data-slider-auto'),
					t_center	= $(this).attr('data-center-mode'),
					fd 			= false,
					tinfinite 	= false,
					aut 		= false,
					arr 		= true,
					cen 		= false,
					tdots 		= true,
					resp_n 		= 1;
				
				if(t_infinite == '1'){
					tinfinite = true;
				}
				if(t_auto == '1'){
					aut = true;
				}
				if(t_fade == '1'){
					fd = true;
				}
				if(t_center == '1'){
					cen = true;
					$(this).addClass('center');
				}
				if(t_arr == '0'){
					arr = false;
				}
				if(t_dots == '0'){
					tdots = false;
				}				
				if(slides_n > 2){
					resp_n = 2;
				}
				
				$(this).slick({
					slidesToShow: slides_n,
					slidesToScroll: sscrol,
					dots: tdots,
					infinite: tinfinite,
					speed: speed_n,
					centerMode:cen,
					fade: fd,
					autoplay: aut,
					arrows: arr,
					responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: resp_n,
							slidesToScroll: resp_n
						}
					},
					{
						breakpoint: 640,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
				    }
				  ]
				});
			});
		}

		/* Horizontal slider */
		if($('.vertical-slider').length > 0){
			$('.vertical-slider').each(function(){
				var vslides_n 		= parseInt($(this).attr('data-slides_count'),10),
					vsscrol 		= parseInt($(this).attr('data-scroll_amount'),10),
					vt_infinite 	= $(this).attr('data-slider-infinite'),
					vt_arr 			= $(this).attr('data-slider-arrows'),
					vspeed_n 		= $(this).attr('data-slider-speed'),
					vt_fade 		= $(this).attr('data-slider-fade'),
					vt_dots 		= $(this).attr('data-slider-dots'),
					vt_auto 		= $(this).attr('data-slider-auto'),
					vfd 			= false,
					vtinfinite 		= false,
					vaut 			= false,
					varr 			= true,
					vtdots 			= true,
					vresp_n 		= 1;
				
				if(vt_infinite == '1'){
					vtinfinite = true;
				}
				if(vt_auto == '1'){
					vaut = true;
				}
				if(vt_fade == '1'){
					vfd = true;
				}
				if(vt_arr == '0'){
					varr = false;
				}
				if(vt_dots == '0'){
					vtdots = false;
				}				
				if(vslides_n > 2){
					vresp_n = 2;
				}
				
				$(this).slick({
					slidesToShow: vslides_n,
					slidesToScroll: vsscrol,
					dots: vtdots,
					infinite: vtinfinite,
					speed: vspeed_n,
					fade: vfd,
					vertical:true,
					autoplay: vaut,
					arrows: varr
				});
			});
		}

	}

	/* ================= Product images zoom =============== */
	if($(".product-zoom").length){
		$('.product-zoom').slick({
			dots: true,
			arrows: false,
			autoplay: true,
			customPaging: function(slider, i) { 
			var sl = $(slider.$slides[i]).find('.zoom').attr('href');
			return '<img src=' + sl + ' />';
			},
		});
	}
	
	var fixx = 0, sid = 0;
	if($('.top-head').hasClass('fixed-head')){
		fixx = 1;
	}
	if($('.top-head').hasClass('header-left') || $('.top-head').hasClass('header-right')){
		sid = 1;
	}
	/* ================ window.scroll functions. ================ */
	$(window).on("scroll",function(){
			
		var ScTop = $(this).scrollTop();

		/* ================ Sticky Nav. =============== */
		if($sticky == "1" && sid == 0){
			
			$('.top-head:not(.header-left):not(.header-right)').attr('data-sticky');

			if (ScTop > 1) {
				if(!$('.top-head').hasClass('sticky-nav')){
					if (($("body").height() - $(window).height()) > 50){
						$('.top-head').addClass('sticky-nav');
					}
				}
				
			}else{
				if($('.top-head').hasClass('sticky-nav')){
					$('.top-head').removeClass('sticky-nav');
				}
			}

		}
		
		if(fixx == 1){
			if (ScTop > 100) {
				$('.top-head').removeClass('fixed-head');
			} else {
				$('.top-head').addClass('fixed-head');
			}
		}
		

		if($totop == '0'){
			$('#to-top').css('display','none');
		}else{
			if (ScTop > 400) {
				$('#to-top').fadeIn();
			} else {
				$('#to-top').fadeOut();
			}	
		}
		
	});
	
	/* ================ window.resize functions. ================ */
	
	$(window).on("resize",function(){
		resIcs();
		fullschit();
	});

	
	$('.horizontal-slider').each(function(){
		$(this).find('.slick-dots,.slick-prev,.slick-next').wrapAll('<div class="slider_controls" />');
	});
	
	$('.modal[role="dialog"]').on('show.bs.modal', function (event) {
		$('.pageWrapper,#contentWrapper,.section,[class*="-padding"] > .container').addClass('pos-static');
	});
	
	$('.modal[role="dialog"]').on('hide.bs.modal', function (event) {
		$('.pageWrapper,#contentWrapper,.section,[class*="-padding"] > .container').removeClass('pos-static');
	});
	
	// youtube video in popup..
	var trigger = $("body").find('[data-toggle="modal"]');
	trigger.on("click",function () {
		var theModal = $(this).data("target"),
			videoSRC = $(this).attr("data-theVideo"),
			videoSRCauto = videoSRC + "?autoplay=1";
			$(theModal + ' iframe').attr('src', videoSRCauto);
		$(theModal + ' button.close').on("click",function () {
			$(theModal + ' iframe').attr('src', videoSRC);
		});
		$('.modal-media').on("click",function () {
			$(theModal + ' iframe').attr('src', videoSRC);
			return false;
		});
	});

	var mod = $('.modal [data-toggle="modal"]');
	mod.on('click',function(){
		$('body').css({'padding':'0px'});
	});

	/* ================ Message boxes clode buttons. ================ */
	$('.alert').each(function(){
		var closebtn = $(this).attr('data-close');
		if (typeof closebtn !== typeof undefined && closebtn !== 'false') {
			$(this).prepend('<a class="close fa fa-times" href="#"></a>');
			$(this).find('a.close').on("click",function(e){
				e.preventDefault();
				$(this).parent().addClass('animated fadeOutDown').delay(500).queue(function(n) {
				  $(this).remove();
				});
				return false;
			});
		}
	});

	resIcs();

	$('.team-box.box-3').each(function(){
		var thisT = $(this).find('.tm-img').attr('src');
		$(this).find('.top-team,.bottom-team').css('background-image','url("'+thisT+'")');
	});

	/* ================= Animate Numbers Counter =============== */
	$('.odometer').each(function(){
		var the = $(this),
			tm = the.attr('data-timer'),
			af = the.attr('data-after'),
			vl = the.attr('data-value'),
			them = 'default',
			t = $(this).attr('data-theme');

		if (typeof t !== typeof undefined && t !== 'false') {
			them = t; // 'car','default','digital','minimal','plaza','slot-machine','train-station'.
		}

		var o = new Odometer({
			el: this,
			theme: them
		});
		o.render();

		$(this).appear(function() {
			setInterval(function(){
				o.update(vl);
			}, tm);
			if (typeof af !== typeof undefined && af !== 'false') {
				the.after('<b class="aft-odo">'+af+'</b>');
			}
		},{accY: -100});
		
	});
	
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover({html:true});
	$('[data-toggle="dropdown"]').dropdown();

	// PIE Circle Charts
	$('.bo-chart').each(function(){
		var boosize = $(this).attr('data-size');
		$(this).find('span.wrapper').css({'width':boosize+'px','height':boosize+'px'});
		$(this).appear(function() {
			$(this).easyPieChart({
				easing: 'easeout',
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
		},{accY: -100});
	});
	
	// Toggles functions.
	$('.toggle').each(function(){
		var ths = $(this),
			thsID = ths.attr('id'),
			acc_bod = ths.find('.acc-body');
		
		// begin drowing.
		acc_bod.each(function(i) {
			$(this).attr('id', thsID+'_'+(i+1));
			$(this).parent().find('h5.acc-head a').attr({'data-toggle':'collapse','data-parent':thsID, 'href': '#'+$(this).attr('id')});
		});
	});

	/* ================= Grid - List view =============== */
	$('.list-btn').on("click",function() {
		$('.grid-list').addClass('list');
		$('.grid-btn').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	$('.grid-btn').on("click",function() {
		$('.grid-list').removeClass('list');
		$('.list-btn').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});

	/* ================= increase decrease items textbox =============== */
	var num = $('#items-num').val();
	$('.add-items i.fa-plus').on("click",function(e){
		e.preventDefault();
		num ++;
		$('#items-num').attr('value',num);
		return false;
	});

	$('.add-items i.fa-minus').on("click",function(e){
		e.preventDefault();
		if (num > 1){
			num --;
			$('#items-num').attr('value',num);
		}
		return false;
	});	
	
	/* ================= ajax Magnific popup =============== */
	$('.ajax-popup').magnificPopup({
		type: 'ajax',
		preloader: 'true',
		mainClass: '.mpf',
		closeOnContentClick: false,
		callbacks: {
			ajaxContentAdded: function() {
				this.content.addClass('newEff');
				this.content.find('.pro-img-slick').slick({
					dots: false,
					arrows: true,
				});
				var num = $('#items-num').val();
				$('.add-items i.fa-plus').on("click",function(e){
					e.preventDefault();
					num ++;
					$('#items-num').attr('value',num);
				});
				$('.add-items i.fa-minus').on("click",function(e){
					e.preventDefault();
					if (num > 1){
						num --;
						$('#items-num').attr('value',num);
					}
					return false;
				});
			}
		}
	});
	
	/* =============== Window.load ================== */
	$(window).bind("load",function(){

		/* ================ jQuery Appear: on scroll down animations. =============== */
		$('.no-touch .fx').appear(function() {
			var anim = $(this).attr('data-animate'),
				del = $(this).attr('data-animation-delay');
			$(this).addClass('animated '+anim).css({animationDelay: del + 'ms'});
		},{accY: -100});

		runSlick();

		fullschit();

		videoBGS();
		
		/* ================ Masonry IsoTope. ================ */
		if($('#masonry').length){
			var $masonry = $('#masonry').isotope({
				layoutMode: 'masonry',
				isFitWidth: true
			});
			
			$masonry.imagesLoaded( function() {
				$masonry.isotope();
			});
			
			$('#filters').on( 'click', 'a.filter', function(e) {
				e.preventDefault();
				var filterValue = $(this).attr('data-filter');
				$masonry.isotope({ filter: filterValue });
				var $this = $(this);
				if ( $this.parent().hasClass('active') ) {
					return false;
				}
				var $optionSet = $this.parents('#filters');
				$optionSet.find('.active').removeClass('active');
				$this.parent().addClass('active');
			});
		}

		if($('.blog-masonry').length){
			var $masonry = $('.blog-masonry').isotope({
				layoutMode: 'masonry',
				isFitWidth: true
			});
			
			$masonry.imagesLoaded( function() {
				$masonry.isotope();
			});
		}
		
		/* ================ Grid IsoTope. ================ */
		if($('.blog-grid').length){
			var $grid = $('.blog-grid').isotope({
				layoutMode: 'fitRows'
			});
			$grid.imagesLoaded( function() {
				$grid.isotope();
			});
		}
		
		/* ================ Progress Bars ================= */
		$('.progress-bar').each(function(){
			$(this).appear(function() {
				var num = $(this).attr('aria-valuenow');
				$(this).find('> span').animate({opacity:'1'},0);
				$(this).find('> i').animate({opacity:'1'},0)
				$(this).css('width',num+'%').animate({left:'0%',opacity:'1'},num*20);
				if(num <= 40){
					$(this).find('> span').addClass('sm-progress');
				}
			},{accY: -100});
		});
		
		/* =============== Paralax Effect =================== */
		$.stellar({
			horizontalScrolling: false,
			verticalScrolling: true,
			responsive: true,
			parallaxElements: true,
			verticalOffset:-4,
			hideDistantElements: false
		});
		
		if($('.parallax').length > 0){
			$('.parallax').each(function(){
				var pover = $(this).attr('data-overlay');
				if(pover != undefined){
					$(this).prepend('<div class="parallax-overlay" style="background-color:'+pover+'"></div>');
				}
			});
		}
		
		/* ================= Magnific popup =============== */
		$('a.zoom').magnificPopup({
			type:'image',
			gallery: {
				enabled: true
			}
		});

		$('.zoom-media').magnificPopup({
			type: 'inline'
		});

		if($('.camera-slider').length){
			$('.camera-slider').each(function(){
				var thscam 	= $(this),
					pg 		= $(this).attr('data-hide-pagination'),
					th 		= $(this).attr('data-hide-thumbnails'),
					hi 		= $(this).attr('data-height'),
					pl 		= $(this).attr('data-hide-play-pause'),
					nv 		= $(this).attr('data-hide-navigation'),
					fxx 	= $(this).attr('data-fx'),
					pgn 	= true,
					hit 	= '600px',
					plp 	= true,
					fxxx 	= 'scrollTop',
					nvg 	= true,
					thm 	= true;

				if (typeof pg !== typeof undefined) {
					pgn = false;
				}
				if (typeof th !== typeof undefined) {
					thm = false;
				}
				if (typeof hi !== typeof undefined && hi !== 'false') {
					hit = $(this).attr('data-height');
				}
				if (typeof pl !== typeof undefined) {
					plp = false;
				}
				if (typeof nv !== typeof undefined) {
					nvg = false;
				}
				if (typeof fxx !== typeof undefined && fxx !== 'false') {
					fxxx = $(this).attr('data-fx');
				}
				thscam.camera({
					height: hit,
					loader: 'none',
					pagination: pgn,
					thumbnails: thm,
					fx: fxxx,
					navigation:nvg,
					playPause: plp
				});

			});
		}
		
		$(".just-gallery").each(function(){
			var thsT = $(this),
				rh = $(this).attr('data-row-height'),
				mr = $(this).attr('data-margins'),
				mrr = 1,
				rhh = 120;
			if (typeof rh !== typeof undefined && rh !== 'false') {
				rhh = $(this).attr('data-row-height');
			}
			if (typeof mr !== typeof undefined && mr !== 'false') {
				mrr = $(this).attr('data-margins');
			}
			thsT.justifiedGallery({
				rowHeight: rhh,
				margins: mrr
			});	
		});
		
		$('.anim-imgs.just-gallery').each(function(){
		
			var delay = 0;
			var bxs = $(this).find('a img');
			bxs.each(function(){
				$(this).appear(function() {
					$(this).css({transform: 'scale(1)',transitionDelay: delay+'ms',opacity: 1});
					delay += 180;
				},{accY: -150});
			});
		});

		/* ================ flickr Photos. ================ */
		if ($('.flickr-widget').length > 0){    
			$('.flickr-widget').each(function(){
				var thisLmt = $(this).attr('data-limit'),
					thisFlick = $(this).attr('data-id');
				$(this).find(' > ul').jflickrfeed({
					limit: thisLmt,
					qstrings: {
					id: thisFlick
				},
				itemTemplate: '<li><a href="{{image_b}}" class="zoom"><img src="{{image_s}}" alt="{{title}}" /><span class="img-overlay"></span></a></li>',
				}, function(data) {
					$('.zoom').magnificPopup({
						type:'image',
						gallery: {
							enabled: true
						}
					});
				});
			});
		}

		/* flickr Photos about me. */
		if ($('#flickrFeed3').length > 0){    
			$('#flickrFeed3').jflickrfeed({
				limit: 8,
				qstrings: {
				id: '45409431@N00'
			},
			itemTemplate: '<li><a href="{{image_b}}" class="zoom"><img src="{{image_s}}" alt="{{title}}" /><span class="img-overlay"></span></a></li>'
			});
		}
		
		/* ================= Latest Tweets Function =============== */
		if($('.tweet').length){
			!function(d,s,id){
				var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
				if(!d.getElementById(id)){
					js=d.createElement(s);
					js.id=id;
					js.async=true;
					js.src=p+"://platform.twitter.com/widgets.js";
					fjs.parentNode.insertBefore(js,fjs);
				}
			}(document,"script","twitter-wjs");

			$('.tweet').prepend('<div class="loading-container"><img src="assets/images/ajax-loader.gif" alt="tweet loader" /></div>');
			
			setTimeout( function() {		
				$(".widget_it_widget_tweets").each(function(){
					var _html = $(this).find('iframe').contents().find("body").html();
					$(this).find('.tweet').append(_html);
					$(this).find('.tweet').find('.timeline-LoadMore,iframe,.timeline-Header,.new-tweets-bar,.timeline-Footer,.timeline-Tweet-brand,.u-url.permalink.customisable-highlight,.retweet-credit,.inline-media,.footer.customisable-border,.timeline-Tweet-actions,.timeline-Tweet-metadata').remove();
					$('.loading-container').hide();
					$(".footer-middle .timeline .h-feed .u-url.profile span").addClass('main-color');
					$(this).find(".timeline-TweetList").addClass('vertical-slider show-arrows');
					$(this).find(".timeline-TweetList").slick({
						dots: false,
						infinite: true,
						arrows:true,
						speed: 300,
						slide: 'li',
						autoplay:true,
						slidesToShow: 2,
						touchMove: true,
						vertical:true,
						slidesToScroll: 2
					});
				});
			}, 1500);
		}

		/* ================ Preloader. ================ */
		if($loadin == '1'){
			$(".page-loader").fadeOut();
			$(".loader-in").fadeOut("slow");
		}

	});

	function resIcs(){
		$('.icon-box-2').each(function(){
			var ths = $(this),
				wdt = parseInt(ths.width(),10)/2,
				nm = ths.find('.box-number');
			nm.css('border-left-width',wdt+'px').css('border-right-width',wdt+'px');
		});
	}

	function fullschit(){
		var wH = $(window).height();
		$('.fullscreen-box').css('min-height',wH+"px");
		$('.fullscreen-content').each(function(){
			var conW = parseInt($(this).outerWidth(),10)/2,
				conH = parseInt($(this).outerHeight(),10)/2;

			$(this).css({marginTop:-conH+'px',marginLeft:-conW+'px'})

		});
		
	}

	function videoBGS(){
		var vid = $('.video-wrap:has(video)');
		if( vid.length > 0 ) {
			vid.each(function(){
				var el = $(this).find('video'),
					elW = $(this).outerWidth(),
					elH = $(this).outerHeight(),
					vidW = el.outerWidth(),
					vidH = el.outerHeight();
				if( vidH < elH ) {
					var rat = vidW/vidH,
						newW = elH * rat,
						pos = (newW - elW) / 2;
					el.css({'width': newW+'px','height':elH+'px','left':-pos+'px'});
				} else {
					var elPos = (vidH - elH) / 2;
					el.css({'width': vidW+'px','height':vidH+'px','top':-elPos+'px'});
				}
			});
		}
	}
	
})(jQuery);