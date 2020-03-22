<!DOCTYPE html>
<html lang="en">

<head>
<!-- Google Tag Manager -->
<script>

// (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
// new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
// j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
// '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
// })(window,document,'script','dataLayer','GTM-TKGD7NP');

</script>
<!-- End Google Tag Manager -->

	<title>Newsfeed</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="js/libs/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/main.css">
	<!-- <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.min.css">


</head>
<body class="">

<style type="text/css">

.menu-wrapper {
	position: relative;
	max-width: 100vw;
	height: auto;
	margin: 1em auto;
	overflow-x: hidden;
	overflow-y: hidden;
}
 .menu {
 	height: auto;
	white-space: nowrap;
	overflow-x: hidden;
	overflow-y: hidden;
	-webkit-overflow-scrolling: touch;
}
 .menu .slider-item {
	display: inline-block;
	height: 50vh;
	border: 1px #757575 solid;
	margin: 0% 0.4% 0% 0%;
    border-radius: 10px;
    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.16), 0 0 0 2px rgba(0,0,0,0.08);
    width: 13rem !important;
}

.discover-card {
	border-radius: 6px;
	margin-bottom: 4%;
	color: grey;
	box-shadow: 2px 2px 2px 2px grey;
}

.card-img-top {
	width: 100%;
	/*height: auto;*/
	height: 20rem !important;
	border-radius: 6px 6px 0px 0px;
	object-fit: cover;
}
.slider-item .card-img-product {
	height: 12rem !important;
	/*width: 100% !important;*/
	border-radius: 10px 10px 0px 0px;
	/*object-fit: cover;*/
}
 .paddle {
	position: absolute;
	width: 5em;
	height: 5em;
	bottom: 40%;
	background-color: #fff;
	color: #757575;
	border-radius: 50px;
	text-align: center;
	box-shadow: 2px 2px 3px #999;
}
 .left-paddle {
	left: 0;
}
 .right-paddle {
	right: 0;
}
 .hidden {
	display: none;
}
 .print {
	margin: auto;
	max-width: 500px;
}
 .print span {
	display: inline-block;
	width: 100px;
}


img {
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	user-select: none;
	pointer-events: none;
}

.card-body {
  white-space: normal;
}
.arrow {
	font-size: 2em;
}

.left-sidebar {
	padding: 3% 4% 3% 9%; 
	font-weight: bolder; 
	border-top-right-radius: 35px; 
	border-bottom-right-radius: 35px; 
	margin-bottom: 4%; 
	cursor: pointer;
	color: black;
}

.left-sidebar:hover {
	color: blue;
}
.left-sidebar-element {
	margin-right: 4%; font-size: 3vh;
}
.active-element {
	margin-right: 4%; font-size: 3vh;
}
.active-left-sidebar {
	background-color: lightblue; 
	padding: 3% 4% 3% 9%; 
	font-weight: bolder; 
	color: blue; 
	border-top-right-radius: 35px; 
	border-bottom-right-radius: 35px; 
	margin-bottom: 4%; 
	cursor: pointer;
}

@media (max-width: 700px) {
	body {
		/*display: none;*/
		/*background-color: red;*/
	}
	.desktop {
		display: none;
	}
}

.video-js {
	width: 100% !important;
	height: auto;
}

.discover-cat-start {
	padding: 3%;
}
.discover-start-icon-parent {
	text-align: center;
	margin-bottom: 6%;
}
.discover-start-icon {
	border: 0.1px solid black;
	border-radius: 20px;
	padding: 3%;
	cursor: pointer;
	transition: 3s;
}
.discover-start-icon:hover {
	background: whitesmoke;
}
.discover-start-icon span {
	margin-right: 4%;
}

</style>

<div class="mobile-header" style="height: 6vh; position: sticky; top: 94%; z-index: 2; border: 1px solid black; background: black;"></div>


<div class="containerx">
	<div class="" style="display: flex;">

		<!-- Left Sidebar -->

		<aside class="col-lg-3 desktop">
		
			<div class="sidebar" style="padding: 0% 3% 1% 3%;">
				<!-- <h1>Hello World</h1> -->
				<div class="active-left-sidebar">
					<strong class="fal fa-address-card active-element"></strong> <strong>Top Stories</strong>
				</div>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-user left-sidebar-element"></strong> <strong>For You</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-star left-sidebar-element"></strong> <strong>Following</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-search left-sidebar-element"></strong> <strong>Saved Searches</strong>
				</div></a>
				<hr style="background-color: black;">

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-flag left-sidebar-element"></strong> <strong>Nigeria</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-globe left-sidebar-element"></strong> <strong>World</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-map left-sidebar-element"></strong> <strong>Your local news</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-building left-sidebar-element"></strong> <strong>Business</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-phone left-sidebar-element"></strong> <strong>Technology</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-location left-sidebar-element"></strong> <strong>Entertainment</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-bicycle left-sidebar-element"></strong> <strong>Sports</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-hourglass left-sidebar-element"></strong> <strong>Science</strong>
				</div></a>

				<a href="content.php"><div class='left-sidebar'>
					<strong class="fal fa-tachometer-fastest left-sidebar-element"></strong> <strong>Health</strong>
				</div></a>

		</aside>

		<!-- ... end Left Sidebar -->

		<!-- Main Content -->

		<main class="col-lg-c">

			<div class="discover-cat-start">
				<div class="discover-start-icon-parent">
					<span class="discover-start-icon"> <span class="fal fa-star-of-life"></span> Nature Photography</span>
				</div>
				
				<?php for ($i = 1; $i < 4; ++$i) { ?>

					<a href="discover-view.php">
						<div class="card discover-card" style="background: whitesmoke;">
						  <img src="img/moab.webp" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5> Herb Garden Planters That Will Let You Cling to Summer a Little Longer</h5>
						    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...</p>
						    <span class="row source-info"><span class="col-sm-12"> <img src="img/news-logo1.png" style="margin-right: 2%;"> <span>ABC News <span class="span-seperation"> | </span> 3 days ago </span></span></span>
						  </div>
						</div>
					</a>
				<?php } ?>
				
			</div>
			

		</main>		

	</div>
</div>


<div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup" aria-hidden="true">

	<audio id="mediaplayer" data-showplaylist="true">
		<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.png" type="audio/mpeg">
	</audio>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<!-- JS Scripts -->
<script src="js/jQuery/jquery-3.4.1.js"></script>
<script src="js/jQuery/mobile.js"></script>
<script src="js/libs/jquery.appear.js"></script>
<script src="js/libs/jquery.mousewheel.js"></script>
<script src="js/libs/perfect-scrollbar.js"></script>
<script src="js/libs/jquery.matchHeight.js"></script>
<script src="js/libs/svgxuse.js"></script>
<script src="js/libs/imagesloaded.pkgd.js"></script>
<script src="js/libs/Headroom.js"></script>
<script src="js/libs/velocity.js"></script>
<script src="js/libs/ScrollMagic.js"></script>
<script src="js/libs/jquery.waypoints.js"></script>
<script src="js/libs/jquery.countTo.js"></script>
<script src="js/libs/popper.min.js"></script>
<script src="js/libs/material.min.js"></script>
<script src="js/libs/bootstrap-select.js"></script>
<script src="js/libs/smooth-scroll.js"></script>
<script src="js/libs/selectize.js"></script>
<script src="js/libs/swiper.jquery.js"></script>
<script src="js/libs/moment.js"></script>
<script src="js/libs/daterangepicker.js"></script>
<script src="js/libs/fullcalendar.js"></script>
<script src="js/libs/isotope.pkgd.js"></script>
<script src="js/libs/ajax-pagination.js"></script>
<script src="js/libs/Chart.js"></script>
<script src="js/libs/chartjs-plugin-deferred.js"></script>
<script src="js/libs/circle-progress.js"></script>
<script src="js/libs/loader.js"></script>
<script src="js/libs/run-chart.js"></script>
<script src="js/libs/jquery.magnific-popup.js"></script>
<script src="js/libs/jquery.gifplayer.js"></script>
<script src="js/libs/mediaelement-and-player.js"></script>
<script src="js/libs/mediaelement-playlist-plugin.min.js"></script>
<script src="js/libs/ion.rangeSlider.js"></script>
<script src="js/libs/leaflet.js"></script>
<script src="js/libs/MarkerClusterGroup.js"></script>

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>
<script defer src="fonts/fontawesome-all.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>

<script type="text/javascript">

function horizontalSliderActionRight (sliderId) {
	// var sliderId = '#flow123';
	var slider = $(sliderId);
	// duration of scroll animation
	var scrollDuration = 1000;
	// paddles
	var leftPaddle = $(`${sliderId} .left-paddle`);
	var rightPaddle = $(`${sliderId} .right-paddle`);
	// get items dimensions
	var itemsLength = $(`${sliderId} .slider-item`).length;
	var itemSize = $(`${sliderId} .slider-item`).outerWidth(true);

	// get some relevant size for the paddle triggering point
	var paddleMargin = 5;

	// get wrapper width
	var getMenuWrapperSize = function() {
		return $(`${sliderId} .menu-wrapper`).outerWidth();
	}
	var menuWrapperSize = getMenuWrapperSize();
	// the wrapper is responsive
	$(window).on(`resize`, function() {
		menuWrapperSize = getMenuWrapperSize();
	});
	// size of the visible part of the menu is equal as the wrapper size 
	var menuVisibleSize = menuWrapperSize;

	// get total width of all menu items
	var getMenuSize = function() {
		return itemsLength * itemSize;
	};
	var menuSize = getMenuSize();
	// get how much of menu is invisible
	var menuInvisibleSize = menuSize - menuWrapperSize;
	// var menuInvisibleSizeOrg = menuSize - menuWrapperSize;

	menuInvisibleSize = 100;

	// get how much have we scrolled to the left
	var getMenuPosition = function() {
		return $(`${sliderId} .menu`).scrollLeft();
	};

	// finally, what happens when we are actually scrolling the menu
	$(`${sliderId} .menu`).on(`scroll`, function() {

		// get how much of menu is invisible
		menuInvisibleSize  = menuSize - menuWrapperSize;

		var menuPosition = getMenuPosition();

		var menuEndOffset = menuInvisibleSize - paddleMargin;
		// show & hide the paddles 
		// depending on scroll position

		if (menuPosition <= paddleMargin) {
			$(leftPaddle).addClass(`hidden`);
			$(rightPaddle).removeClass(`hidden`);
		} else if (menuPosition < menuEndOffset) {
			// show both paddles in the middle
			$(leftPaddle).removeClass(`hidden`);
			$(rightPaddle).removeClass(`hidden`);
		} else if (menuPosition >= menuEndOffset) {
			$(leftPaddle).removeClass(`hidden`);
			$(rightPaddle).addClass(`hidden`);
	}
	});

	// var scrolls = 100;
	var scrolls = Number(slider.attr('scrolls'));
	// scroll to left
	// $(rightPaddle).on(`click`, function() {
		scrolls = scrolls + 100;
		slider.attr('scrolls', scrolls);
		$(`${sliderId} .menu`).animate( { scrollLeft: scrolls}, scrollDuration);
	// });
};

function horizontalSliderActionLeft (sliderId) {
	// var sliderId = '#flow123';
	var slider = $(sliderId);
	// duration of scroll animation
	var scrollDuration = 1000;
	// paddles
	var leftPaddle = $(`${sliderId} .left-paddle`);
	var rightPaddle = $(`${sliderId} .right-paddle`);
	// get items dimensions
	var itemsLength = $(`${sliderId} .slider-item`).length;
	var itemSize = $(`${sliderId} .slider-item`).outerWidth(true);

	// get some relevant size for the paddle triggering point
	var paddleMargin = 5;

	// get wrapper width
	var getMenuWrapperSize = function() {
		return $(`${sliderId} .menu-wrapper`).outerWidth();
	}
	var menuWrapperSize = getMenuWrapperSize();
	// the wrapper is responsive
	$(window).on(`resize`, function() {
		menuWrapperSize = getMenuWrapperSize();
	});
	// size of the visible part of the menu is equal as the wrapper size 
	var menuVisibleSize = menuWrapperSize;

	// get total width of all menu items
	var getMenuSize = function() {
		return itemsLength * itemSize;
	};
	var menuSize = getMenuSize();
	// get how much of menu is invisible
	var menuInvisibleSize = menuSize - menuWrapperSize;
	// var menuInvisibleSizeOrg = menuSize - menuWrapperSize;

	menuInvisibleSize = 100;

	// get how much have we scrolled to the left
	var getMenuPosition = function() {
		return $(`${sliderId} .menu`).scrollLeft();
	};

	// finally, what happens when we are actually scrolling the menu
	$(`${sliderId} .menu`).on(`scroll`, function() {

		// get how much of menu is invisible
		menuInvisibleSize  = menuSize - menuWrapperSize;

		var menuPosition = getMenuPosition();

		var menuEndOffset = menuInvisibleSize - paddleMargin;
		// show & hide the paddles 
		// depending on scroll position

		if (menuPosition <= paddleMargin) {
			$(leftPaddle).addClass(`hidden`);
			$(rightPaddle).removeClass(`hidden`);
		} else if (menuPosition < menuEndOffset) {
			// show both paddles in the middle
			$(leftPaddle).removeClass(`hidden`);
			$(rightPaddle).removeClass(`hidden`);
		} else if (menuPosition >= menuEndOffset) {
			$(leftPaddle).removeClass(`hidden`);
			$(rightPaddle).addClass(`hidden`);
	}
	});

	// var scrolls = 100;
	var scrolls = Number(slider.attr('scrolls'));

	// scroll to right
	// $(leftPaddle).on(`click`, function() {
		scrolls = scrolls - 100;
		slider.attr('scrolls', scrolls);
		$(`${sliderId} .menu`).animate( { scrollLeft: scrolls }, scrollDuration);
	// });
};

$(function () {
	$('.swipet').on('swipeleft', function () {
		var menuParentElementId = $(this).attr('id'),
		menuParentElement = $(`#${menuParentElementId}`),
		rightPaddleElement = $(`#${menuParentElementId} .right-paddle`);
		rightPaddleElement.click();
	});
	$('.swipet').on('swiperight', function () {
		var menuParentElementId = $(this).attr('id'),
		menuParentElement = $(`#${menuParentElementId}`),
		leftPaddleElement = $(`#${menuParentElementId} .left-paddle`);
		leftPaddleIsHidden = leftPaddleElement.hasClass('hidden');

		if (!leftPaddleIsHidden) {
			leftPaddleElement.click();
		}
	});
});

</script>

</body>

</html>