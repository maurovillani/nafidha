<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="frontlib/fancybox/jquery.fancybox.min.js"></script> 
<script src="frontlib/isotope/isotope.min.js"></script>
<script src="frontlib/isotope/packery-mode.min.js"></script>
<script src="frontlib/imagesloaded/imagesloaded.min.js"></script>  
<script src="assets/js/main.js"></script>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
	ga('create', 'UA-41600629-4', 'auto');
	ga('send', 'pageview');

	var $grid = $('.grid').isotope({
		// options
		itemSelector: '.grid-item',
		percentPosition: true,
		layoutMode: 'masonry'
	});

	// layout Isotope after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.isotope('layout');
	});

	var $gridPlaces = $('.gridplaces').isotope({
		// options
		itemSelector: '.grid-item',
		percentPosition: true,
		layoutMode: 'masonry',
		getSortData: {
			name: '.titleimage', // text from querySelector
			category: '[data-category]', // value of attribute
			weight: function( itemElem ) { // function
				var weight = $( itemElem ).find('.weight').text();
				return parseFloat( weight.replace( /[\(\)]/g, '') );
			}
		},
		sortBy : 'name'
	});
	
	// layout Isotope after each image loads
	$gridPlaces.imagesLoaded().progress( function() {
	  $gridPlaces.isotope('layout');
	});
	
	// Setup filter isotope
	$("#selecttype").change(function() {
		var otherfilter = '';
		if($("#selecttransport").val() !== '*') {
			otherfilter = "." + $("#selecttransport").val();
		}
		if($(this).val() === '*') {
			if(otherfilter) $gridPlaces.isotope({ filter: otherfilter });
			else $gridPlaces.isotope({ filter: '*' });
		} else {
			$gridPlaces.isotope({ filter: '.'+$(this).val() + otherfilter });
		}
	});
	$("#selecttransport").change(function() {
		var otherfilter = '';
		if($("#selecttype").val() !== '*') {
			otherfilter = "." + $("#selecttype").val();
		}
		if($(this).val() === '*') {
			if(otherfilter) $gridPlaces.isotope({ filter: otherfilter });
			else $gridPlaces.isotope({ filter: '*' });
		} else {
			$gridPlaces.isotope({ filter: '.'+$(this).val() + otherfilter });
		}
	});
	
		
	
</script>
