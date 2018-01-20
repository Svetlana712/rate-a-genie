$(document).ready(function() {


    // custom scrollbar
    $('.simplebar').enscroll({
        verticalTrackClass: 'track',
        verticalHandleClass: 'handle',
        easingDuration: 50,
        pollChanges: true
    });

    
	Name()

	$(window).scroll(function(){  
		Name()
	})

	function Name() {
		$('.header')[$(window).scrollTop() > 65 ? 'addClass' : 'removeClass']('header-small')
	}


	// detect section and add nav-item class="active"
	var $header_h = $('.navbar-fixed').height()
	$('body').scrollspy({ 
		target: '#header',
		offset: $header_h
	})



	// Steps form
	var d = $('.step-choice .radio-input')
	var btn_text = $('.btn-steps')


	$('.btn-steps').click(function(e){
		if($('.btn-steps').hasClass('default')) {
			e.stopPropagation();
		}
		else {
			e.preventDefault();
		}
	})


	d.click(function(){
		$(this).parents('.steps-form').find('.steps1.active').removeClass('active').addClass('done')
		$('.steps2').removeClass('default').addClass('active')
		$('.steps1-content').removeClass('active').removeClass('show')
		$('.steps2-content').addClass('active').addClass('show')
		$('.steps1').click(function(e){
			$(this).parents('.steps-form').find('.steps2.active').removeClass('active')
			$(this).addClass('active')
			$('.steps1-content').addClass('active').addClass('show')
			$('.steps2-content').removeClass('active').removeClass('show')
			e.preventDefault();
		})
		$('.steps2').click(function(e){
			$(this).parents('.steps-form').find('.steps1.active').removeClass('active')
			$(this).addClass('active')
			$('.steps2-content').addClass('active').addClass('show')
			$('.steps1-content').removeClass('active').removeClass('show')
			e.preventDefault();
		})
	})


	$(".device-dropdown-menu .dropdown-item").click(function(e){
		var a = $(this).parents('.device-dropdown').find('.dropdown-toggle').text();
		$(this).parents('.device-dropdown').find('.dropdown-toggle').text($(this).text())
		e.preventDefault();

		var step2 = {
			make: 'Make',
			model: 'Model'
		}

		var first = $("#make").text();
		var second = $("#model").text();
		if((first != step2.make && second != step2.model)) {
			$('.steps2.active').removeClass('active').addClass('done')
			$('.steps3').removeClass('default').addClass('active')
			$('.steps2-content').removeClass('active').removeClass('show')
			$('.steps3-content').addClass('active').addClass('show')

			$('.steps1').click(function(e){
				$(this).parents('.steps-form').find('.steps2.active').removeClass('active')
				$(this).parents('.steps-form').find('.steps3.active').removeClass('active')
				$(this).addClass('active')
				$('.steps1-content').addClass('active').addClass('show')
				$('.steps2-content').removeClass('active').removeClass('show')
				$('.steps3-content').removeClass('active').removeClass('show')
				e.preventDefault();


				$('.steps3-content .btn-device-submit').removeClass('none')
				$('.steps3-content .submit-image').removeClass('block')
				$('.steps3-content .thanks-message').removeClass('block')
			})
			$('.steps2').click(function(e){
				$(this).parents('.steps-form').find('.steps1.active').removeClass('active')
				$(this).parents('.steps-form').find('.steps3.active').removeClass('active')
				$(this).addClass('active')
				$('.steps2-content').addClass('active').addClass('show')
				$('.steps1-content').removeClass('active').removeClass('show')
				$('.steps3-content').removeClass('active').removeClass('show')
				e.preventDefault();


				$('.steps3-content .btn-device-submit').removeClass('none')
				$('.steps3-content .submit-image').removeClass('block')
				$('.steps3-content .thanks-message').removeClass('block')
			})
			$('.steps3').click(function(e){
				$(this).parents('.steps-form').find('.steps1.active').removeClass('active')
				$(this).parents('.steps-form').find('.steps2.active').removeClass('active')
				$(this).addClass('active')
				$('.steps3-content').addClass('active').addClass('show')
				$('.steps1-content').removeClass('active').removeClass('show')
				$('.steps2-content').removeClass('active').removeClass('show')
				e.preventDefault();


				$('.steps3-content .btn-device-submit').removeClass('none')
				$('.steps3-content .submit-image').removeClass('block')
				$('.steps3-content .thanks-message').removeClass('block')
			})

		}
	})



	// submit button
	$(".btn-device-submit").click(function(){
	    
		$(this).addClass('none')
		$('.submit-image').addClass('block')
	 

		setTimeout(function() { 
			$('.submit-image').removeClass('block')
			$('.thanks-message').addClass('block')
		}, 4300);

	})



	// SWIPPER  SLIDER (Supprted brands section)
	var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        loopFillGroupWithBlank: true,
        pagination: {
		    el: '.swiper-pagination',
		    type: 'bullets',
		},
        grabCursor: true,
        roundLengths: true,
        freeMode: true,
        spaceBetween: 30,
        autoplay: {
		    delay: 1200,
		},
        slidesPerView: 'auto',
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    })


	$('body').on('click','.scrollable', function(e) {
		e.preventDefault()
		var selector = $(this).attr('href')
		var $el = $(selector)
		var $header_h = $('.navbar-fixed').height()
		$('body, html').animate({
		    scrollTop: $el.offset().top + 1 - $header_h
		}, 800)

		$('.header-main-collapse').removeClass('show')
		$('.navbar-toggler').attr("aria-expanded","false")

	})


	if ($(window).width() > 991) {

		var footer_pos = $('#brands').offset().top
		var foot = $('.footer')

		foot[$(window).scrollTop() >= footer_pos ? 'addClass' : 'removeClass']('fixed')

		$(window).scroll(function(){
			foot[$(window).scrollTop() >= footer_pos ? 'addClass' : 'removeClass']('fixed')
		})

	} else {
		var foot = $('.footer')

		foot.removeClass('fixed')
	}	


	// Second-nav fixed
	var header_height = $('.navbar-fixed')[0].offsetHeight
	$('#second-nav-container').css({
		'top': 30 + 'px'
	});

	$(window).scroll(function(){

		var nav = $('#small-nav')[0].offsetHeight
		var header_height = $('.navbar-fixed')[0].offsetHeight
		var nav_start = $('#small-nav').offset().top - header_height
		var nav_end = nav_start + nav
		var window_pos = $(window).scrollTop()

		if (window_pos < nav_start) {
			$('#second-nav-container').css({
				'position': 'absolute',
				'top': 30 + 'px'
			})
		}
		else if (window_pos > nav_end) {
			$('#second-nav-container').css({
				'position': 'absolute',
				'top': 30 + 'px'
			})
		}
		else {
			$('#second-nav-container').css({
				'position': 'fixed',
				'top': header_height + 'px'
			})
		}

	})



	var second_nav_height = $('#second-nav')[0].offsetHeight
	var all_nav = header_height + second_nav_height

	$('body').on('click','.scrollable-small', function(e) {
		e.preventDefault()
		var selector = $(this).attr('href')
		var $el = $(selector)
		var $header_h = $('.navbar-fixed').height()
		$('body, html').animate({
		    scrollTop: $el.offset().top - 1 - all_nav
		}, 800)
	})


    second_menu = $('#second-nav'),

    second_nav_items = second_menu.find("a"),
    scroll_second_items = second_nav_items.map(function(){
      var second_nav_item = $($(this).attr("href"))
      if (second_nav_item.length) { return second_nav_item; }
    })

    

	var doc_height = $(document).height();

	$(window).scroll(function(){
	   var from_top = $(this).scrollTop() + all_nav + 30
	   var cur = scroll_second_items.map(function(){
	     if ($(this).offset().top <= from_top)
	       return this
	   })

	   cur2 = cur[cur.length-1];
	   var id2 = cur2 && cur2.length ? cur2[0].id : ""

	    second_nav_items
	    .parent().removeClass("active")
	    .end().filter("[href='#"+id2+"']").parent().addClass("active")
	            
	})


	// FAQ's button to show all answers
	$('#js-show').click(function(e){

		$(this).toggleClass('open');

    	var btn_show = $('.show-text');
    	btn_show.text(btn_show.text() != 'Hide all' ? 'Hide all' : 'Show all');
		e.preventDefault();


  		if (btn_show.text() != 'Show all') {
  			$('#accordion-faq .card-header').attr("aria-expanded","true");
			$('.card .collapse').addClass('show');
  		} 
  		else {
    		$('#accordion-faq .card-header').attr("aria-expanded","false");
			$('.card .collapse').removeClass('show');
  		}
	});



	

    window.onorientationchange = function() { location.reload() };

    
});
