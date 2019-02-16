/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
 
/* --------------------------- TmplateTrip JS ------------------------------ */

/* ----------- Start Page-loader ----------- */
		$(window).load(function() 
		{ 
			$(".ttloading-bg").fadeOut("slow");
		})
/* ----------- End Page-loader ----------- */

$(document).ready(function(){
				   
/* Go to Top JS START */
		if ($('#goToTop').length) {
			var scrollTrigger = 100, // px
				backToTop = function () {
					var scrollTop = $(window).scrollTop();
					if (scrollTop > scrollTrigger) {
						$('#goToTop').addClass('show');
					} else {
						$('#goToTop').removeClass('show');
					}
				};
			backToTop();
			$(window).on('scroll', function () {
				backToTop();
			});
			$('#goToTop').on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
		}
	/* Go to Top JS END */
	
	/*---------------- Start Search ---------------- */

	$(".top-nav .ttsearch_button ").click(function() {
		
	$('.top-nav .ttsearchtoggle').parent().toggleClass('active');
	$('.top-nav .ttsearchtoggle').toggle('fast', function() {
	});
	$('.top-nav #search_query_top').attr('autofocus', 'autofocus').focus();
	});
	
	/*---------------- End Search ---------------- */
	/* ----------- Start Templatetrip User-info ----------- */
	
	$('.ttuserheading').click(function(event){
	$(this).toggleClass('active');
	event.stopPropagation();
	$(".user-info").slideToggle("fast");
	});
	$(".user-info").on("click", function (event) {
	event.stopPropagation();
	});
	$('#_desktop_language_selector').appendTo('.user-info');
	$('#_desktop_currency_selector').appendTo('.user-info');
	
	$('.ttdropdown').click(function(event){
	$(this).toggleClass('open');
	event.stopPropagation();
	$(this).find(".dropdown-menu").slideToggle("fast");
	});
	/* ----------- End Templatetrip User-info ----------- */

	
	/* -------------- Start Homepage Tab ------------------- */

	$("#hometab").prepend("<div class='tabs'><ul class='nav nav-tabs'></ul></div>");
	$("#hometab .ttfeatured-products .tab-title").wrap("<li class='nav-item'><a class='nav-link' data-toggle='tab' href='#ttfeatured-content'></a></li>");
	$("#hometab .ttbestseller-products .tab-title").wrap("<li class='nav-item'><a class='nav-link' data-toggle='tab' href='#ttbestseller-content'></a></li>");
	$("#hometab .ttnew-products .tab-title").wrap("<li class='nav-item'><a class='nav-link' data-toggle='tab' href='#ttnew-content'></a></li>");
	$("#hometab .tabs ul.nav-tabs").append($("#hometab > section li.nav-item"));
	
	$("#hometab > section.ttfeatured-products").wrap("<div class='tab-pane row fade' id='ttfeatured-content'>");
	$("#hometab > section.ttbestseller-products").wrap("<div class='tab-pane row fade' id='ttbestseller-content'>");
	$("#hometab > section.ttnew-products").wrap("<div class='tab-pane row fade' id='ttnew-content'>");
	$("#hometab > .tab-pane").wrapAll("<div class='home-tab-content' id='home-tab-content' />");
	$("#hometab").append($("#hometab > .home-tab-content"));
	
	$('#hometab .tabs ul.nav-tabs > li:first-child a').addClass('active');
	$('#hometab #home-tab-content .tab-pane:first-child').addClass('in active');

/* -------------- End Homepage Tab ------------------- */
	
	
		/* ------------ Start Add Product Bootsrap class JS --------------- */
	
	colsCarousel = $('#right-column, #left-column').length;
	if (colsCarousel == 2) {
		ci=2;
	} else if (colsCarousel == 1) {
		ci=3;
	} else {
		ci=3;
	}

	
		var cols_count = $('#right-column, #left-column').length;
		if (cols_count == 2) {
			$('#content .products .product-miniature, #content-wrapper .products .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols_count == 1) {
			$('#content .products .product-miniature, #content-wrapper .products .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		} else {
			$('#content .products .product-miniature, #content-wrapper .products .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}
		
	/* ------------ End Add Product Bootsrap class JS --------------- */
	
	
	
	/* ----------- Start Carousel For FeatureProduct / BestsellerProduct / NewProduct / SpecialProduct / ViewProduct / CategoryProduct ----------- */
	
	$(".ttfeatured-products .products, .ttbestseller-products .products, .ttnew-products .products").owlCarousel({
		navigation:true,
		navigationText: [
			"<i class='material-icons'>&#xE5CB;</i>",
			"<i class='material-icons'>&#xE5CC;</i>"],
		items: ci, //10 items above 1000px browser width
		itemsDesktop : [1200,ci], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,1] 
	});
	
	/* ----------- End Carousel For FeatureProduct / BestsellerProduct / NewProduct / SpecialProduct / ViewProduct / CategoryProduct ----------- */
	 $(".ttspecial-products .products, .crossselling-product .products, .view-product .products, .category-products .products, .product-accessories .products").owlCarousel({
		navigation:true,
		navigationText: [
			"<i class='material-icons'>&#xE5CB;</i>",
			"<i class='material-icons'>&#xE5CC;</i>"],
		items: 4, //10 items above 1000px browser width
		itemsDesktop : [1200,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,1] 
	}); 
	/* ----------- Start Carousel For Productpage Thumbs ----------- */
	  
	/* ----------- Start Carousel For Productpage Thumbs ----------- */
	
		$("#ttproduct-thumbs").owlCarousel({
		navigation:true,
		navigationText: [
			"<i class='material-icons'>&#xE5CB;</i>",
			"<i class='material-icons'>&#xE5CC;</i>"],
		items: 4, //10 items above 1000px browser width
		itemsDesktop : [1200,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [480,1] 
	});
	
	/* ----------- End Carousel Productpage Thumbs ----------- */	
	
  /* -----------Start carousel For Testimonial ----------- */
	 var tttestimonial= $("#tttestimonial-carousel");
      tttestimonial.owlCarousel({
		 autoPlay : true,
		 pagination : true,
         paginationNumbers : true,
     	 items : 1, //10 items above 1000px browser width
     	 itemsDesktop : [1200,1], 
     	 itemsDesktopSmall : [991,1], 
     	 itemsTablet: [767,1], 
     	 itemsMobile : [480,1] 
      });

 /* ----------- End carousel For Testimonial ----------- */
 
 /* -----------Start carousel For TT- brand logo ----------- */
	 var ttbrandlogo = $("#ttbrandlogo-carousel");
		  ttbrandlogo.owlCarousel({
			navigation:true,
			navigationText: [
					"<i class='material-icons'>&#xE5CB;</i>",
					"<i class='material-icons'>&#xE5CC;</i>"],
		  autoPlay : true,
			 items :5, //10 items above 1000px browser width
			 itemsDesktop : [1200,5], 
			 itemsDesktopSmall : [991,4], 
			 itemsTablet: [767,3], 
			 itemsMobile : [480,2] 
		  });
	
	/* -----------End carousel For TT brand logo ----------- */
 
 /* ----------- Start Templatetrip AddToCart Button ----------- */
 
	$( ".tt-button-container .add-to-cart" ).mousedown(function() {
	  var form_className = $(this).parent().attr('class');
	  $(this).parent().attr('id',form_className);
	
	  var hidden_page_className = $(this).parent().find('.product-quantity .product_page_product_id').attr('class');
	  $(this).parent().find('.product-quantity .product_page_product_id').attr('id',hidden_page_className);
	
	  var customization_className = $(this).parent().find('.product-quantity .product_customization_id').attr('class');
	  $(this).parent().find('.product-quantity .product_customization_id').attr('id',customization_className);
	
	  var quantity_className = $(this).parent().find('.product-quantity .quantity_wanted').attr('class');
	  $(this).parent().find('.product-quantity .quantity_wanted').attr('id',quantity_className);
	});
	
	$( ".tt-button-container .add-to-cart" ).mouseup(function() {
	  $(this).parent().removeAttr('id');
	  $(this).parent().find('.product-quantity > input').removeAttr('id');
	});

/* ----------- End Templatetrip AddToCart Button ----------- */
	
});	  

function bindGrid()
{
	var view = localStorage.getItem('display');
	if (view == 'list')
		display(view);
	else
		$('.display').find('#ttgrid').addClass('active');
	//Grid	
	$(document).on('click', '#ttgrid', function(e){
		e.preventDefault();
		display('grid');
	});
	//List
	$(document).on('click', '#ttlist', function(e){
		e.preventDefault();
		display('list');		
	});	
}

function display(view)
{
	if (view == 'list')
	{
		$('#ttgrid').removeClass('active');
		$('#ttlist').addClass('active');
		$('#content-wrapper .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-list col-xs-12');
		$('#content-wrapper .products.product-thumbs .product-miniature .ttproduct-image').attr('class', 'ttproduct-image col-xs-5 col-sm-5 col-md-4');
		$('#content-wrapper .products.product-thumbs .product-miniature .ttproduct-desc').attr('class', 'ttproduct-desc col-xs-7 col-sm-7 col-md-8');

		$('#ttlist').addClass('active');
		$('.grid-list').find('#ttlist').addClass('selected');
		$('.grid-list').find('#ttgrid').removeAttr('class');
		localStorage.setItem('display', 'list');
	}
	else
	{
		$('#ttlist').removeClass('active');
		$('#ttgrid').addClass('active');

		var cols_count = $('#right-column, #left-column').length;
		if (cols_count == 2) {
			$('#js-product-list .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols_count == 1) {
			$('#js-product-list .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		} else {
			$('#js-product-list .products.product-thumbs .product-miniature').attr('class', 'product-miniature js-product-miniature product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}

		$('#content-wrapper .products.product-thumbs .product-miniature .ttproduct-image').attr('class', 'ttproduct-image');
		$('#content-wrapper .products.product-thumbs .product-miniature .ttproduct-desc').attr('class', 'ttproduct-desc');
		
		$('.grid-list').find('#ttgrid').addClass('selected');
		$('.grid-list').find('#ttlist').removeAttr('class');
		localStorage.setItem('display', 'grid');
	}
}
$(document).ready(function(){
	bindGrid();
});


/* ------------ End Grid List JS --------------- */