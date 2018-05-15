window.onscroll = function() {
  // var h = document.querySelector('.pageHeader');
  // var m = document.getElementById('mainMenuWrap');
  // // if (h.getBoundingClientRect().top < (parseInt(m.offsetHeight) * -1)) {

  var doc = document.documentElement;
  var m = document.getElementById('mainMenuWrap');
  var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
  var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
  if (top > 0) {
    m.classList.add('small');
  } else {
    m.classList.remove('small');
  }
}

var teaserBoxes = document.querySelectorAll('.teaserBox');
for (var i = 0; i < teaserBoxes.length; i++ ) {
  var firstLink = teaserBoxes[i].querySelector('a');
  teaserBoxes[i].addEventListener('click',function(event){
    firstLink.click();
  });
}


jQuery(function(){
	$('a.lightbox').fancybox();
	$('a.fancybox').fancybox();

  $('.csc-textpic-caption').each(function(){
    var text = $(this).text();
    var image = $(this).prev();
    if (text.length > 0) {
        $(this).css({
          'width': image.outerWidth() + 'px'
        });
    }
  });

	$('.slickSlider').each(function(){
		if ($(this).attr('data-autoplay')==0 && $(this).attr('data-autoplay')) {
			var autoplay = false;
		} else {
			var autoplay = true;
		}

		var slideSpeed = (typeof $(this).attr('data-slidespeed') === 'undefined') ? 300 : $(this).attr('data-slidespeed'),
			autoSpeed = (typeof $(this).attr('data-autospeed') === 'undefined') ? 6400 : $(this).attr('data-autospeed');

		$(this).slick({
			dots: true,
			infinite: true,
      arrows: true,
			speed: parseInt(slideSpeed),
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: autoplay,
			autoplaySpeed: parseInt(autoSpeed),
			prevArrow: '<span href="#" class="prev slickNav"><i class="fa fa-angle-left"></i></span>',
			nextArrow: '<span href="#" class="next slickNav"><i class="fa fa-angle-right"></i></span>'
		});
	});

  $('.newsSlider').each(function(){
    $(this).slick({
      infinite: true,
      arrows: true,
      speed: 1500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });

  $(document).on('click touchstart','.newsSliderWrap .slickNav',function(event){
    event.preventDefault();
    var slider = $(this).parents('.newsSliderWrap').find('.newsSlider');
    slider.find('button.slick-' + $(this).attr('data-action')).trigger('click');
    return false;
  });


	$('#mediaMenu .icon').each(function(){
		var newMargin = parseInt($(this).find('.hint').outerWidth()) / 2;
		$(this).find('.hint').css({
			'margin-left': '-'+newMargin+'px'
		});
	});

  $(document).on('click touchstart','.breadcrumb ul li:eq(1) a',function(event){
    event.preventDefault();
  });


	$(document).on('click touchstart','#nav-toggle',function(event){
		event.preventDefault();
		$(this).next('.mainmenu').slideToggle(250);
		return false;
	});

	$(document).on('click touchstart','.accordionBox',function(event){
		$(this).toggleClass('open');
		$(this).next('.accordionInner').slideToggle(250);
	});

	$(document).on('click touchstart','#fontSizer a',function(event){
		event.preventDefault();
		var elementsToResize = '#page, .mainmenu, footer',
			currenFontSize = parseInt($(elementsToResize).css('font-size')),
			resizeDifference = 1;
		if ($(this).hasClass('makeItSmaller')) {
			var newSize = currenFontSize - resizeDifference;
		}
		if ($(this).hasClass('makeItBigger')) {
			var newSize = currenFontSize + resizeDifference;
		}
		$(elementsToResize).css({
			'font-size': newSize + 'px'
		});
		return false;
	});

  $('.submenu').hide();
  $('.Level1 li.dropdown').hover(function(){
    $(this).find('.submenu').stop().slideToggle();
    console.log($(this));
  });


  $(document).on('click touchstart','.offCanvasOpener',function(event){
      event.preventDefault();
      var currentStatus = document.getElementById('siteWrapper').getAttribute('data-status');
      if (currentStatus === 'close') {
        var newStatus = 'open';
      } else {
        var newStatus = 'close';
      }
      $('#siteWrapper').attr('data-status',newStatus);
      return false;
  });

  $(document).on('click touchstart','.offCanvasMenu .subOpener',function(event){
    event.preventDefault();
    var currentStatus = $(this).attr('data-status');
    console.log(currentStatus);
    switch (currentStatus) {
      case "open":
        $(this).attr('data-status','close');
        $(this).next().slideUp(250);
        break;
      case "close":
        $(this).attr('data-status','open');
        $(this).next().slideDown(250);
        break;
    }
    return false;
  });

  $(document).on('click touchstart','.accordeonWrapper .opener',function(){
    var status = $(this).attr('data-status');
    var thisElement = $(this);
    switch (status) {
      case "open":
        break;
      case "close":
        var openElement = $(this).parents('.accordeonWrapper').find('.opener[data-status="open"]');
        if (openElement.length > 0) {
          openElement.attr('data-status','close');
          openElement.next('.foldout').slideUp(250);
        }
        thisElement.attr('data-status','open');
        thisElement.next('.foldout').slideDown(250);
        break;
    }
  });

  $('a[rel="lightbox[myImageSet]"]').fancybox({
    maxWidth: 600,
    maxHeight: 600,
    padding: 0,
    autoSize: true,
    autoScale: true,
  });

	$('.fancybox, .lightbox').fancybox({
		maxWidth: 600,
		maxHeight: 600,
		padding: 0,
		autoSize: true,
		autoScale: true,
	});
});
