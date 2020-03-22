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
	height: 60vh;
	border: 1px #757575 solid;
	margin: 0% 0.4% 0% 0%;
    border-radius: 10px;
    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.16), 0 0 0 2px rgba(0,0,0,0.08);
    width: 13rem !important;
}
.slider-item .card-img-top {
	height: 12rem !important;
	border-radius: 10px 10px 0px 0px;
	object-fit: cover;
}
.slider-item .card-img-product {
	height: 12rem !important;
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



/*
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
  margin: 0;
  padding: 0;
  display: flex;
  background: #7A419B;
  min-height: 100vh;
  background: linear-gradient(135deg, #7c1599 0%,#921099 48%,#7e4ae8 100%);
  background-size: cover;
  align-items: center;
  justify-content: center;
}
*/


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

</style>
<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKGD7NP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->


<!-- Preloader -->

<!-- <div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>-->

<!-- ... end Preloader -->


<!-- Fixed Sidebar Left -->

<!-- ... end Responsive Header-BP -->
<!-- <div class="header-spacer"></div> -->

<?php include "include/header.php" ?>


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
			<div id="newsfeed-items-grid">

				<?php for ($i = 0; $i < 3; ++$i) { ?>

					<div class="row news-item">
						<div class="col-8" style="">
							<a class="title" >Dems demand Twitter take down edited video of Pelosi ripping State of the Union speech posted by Trump </a>
							<p class="subtitle">At least 11 Americans are among the dozens of people aboard a cruise ship moored in Japan who have tested positive for the ...</p>
							<span class="row source-info"><span class="col-sm-12"> <img src="img/news-logo1.png" style="margin-right: 2%;"> <span>ABC News <span class="span-seperation"> | </span> 3 days ago </span></span></span>
						</div>
						<div class="col-4 news-img-cover">
							<img src="img/news1.jpg" class="news-img" alt="photo">
						</div>

					</div>

				<?php } ?>

				<div class="ui-block">
					
					<article class="" style="padding: 2%;">
					
						<p>Upcoming Events</p>
						<?php $flowId = sha1(uniqid('')); ?>

						<div id="<?= $flowId ?>" class="swipet" scrolls="100">
							<div class="menu-wrapper">
								<div class="menu">
									
									<?php for ($i = 0; $i < 12; ++$i) { ?>

										<div class="slider-item card" style="width: 18rem;">
										  <img src="img/post__thumb1.jpg" class="card-img-top" alt="...">
										  <div class="card-body">
										    <h5 class="card-title">Meghee Academy - Kids can code</h5>
										    <!-- <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										    <a href="#" class="btn btn-primary">Go somewhere</a>
										  </div>
										</div>

									<?php } ?>
								
								</div>

								<div class="paddles">
									<button class="left-paddle paddle hidden" onclick="horizontalSliderActionLeft('#<?= $flowId ?>');">
										<strong class="arrow"> < </strong>
									</button>
									
									<button class="right-paddle paddle" onclick="horizontalSliderActionRight('#<?= $flowId ?>');">
										<strong class="arrow"> > </strong>
									</button>
								</div>

							</div>
						</div>				
						
					
					</article>
				</div>

				<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">My Spotify Playlist</h6>
					<a href="#" class="more">
						<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
					</a>
				</div>

				<!-- W-Playlist -->
				
				<ol class="widget w-playlist">
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="img/playlist6.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">The Past Starts Slow...</a>
							<a href="#" class="composition-author">System of a Revenge</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">3:22</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
				
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="img/playlist7.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">The Pretender</a>
							<a href="#" class="composition-author">Kung Fighters</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">5:48</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="img/playlist8.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">Blood Brothers</a>
							<a href="#" class="composition-author">Iron Maid</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">3:06</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="img/playlist9.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">Seven Nation Army</a>
							<a href="#" class="composition-author">The Black Stripes</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">6:17</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
					<li class="js-open-popup" data-popup-target=".playlist-popup">
						<div class="playlist-thumb">
							<img src="img/playlist10.jpg" alt="thumb-composition">
							<div class="overlay"></div>
							<a href="#" class="play-icon">
								<svg class="olymp-music-play-icon-big">
									<use xlink:href="svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use>
								</svg>
							</a>
						</div>
				
						<div class="composition">
							<a href="#" class="composition-name">Killer Queen</a>
							<a href="#" class="composition-author">Archiduke</a>
						</div>
				
						<div class="composition-time">
							<time class="published" datetime="2017-03-24T18:18">5:40</time>
							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Add Song to Player</a>
									</li>
									<li>
										<a href="#">Add Playlist to Player</a>
									</li>
								</ul>
							</div>
						</div>
				
					</li>
				</ol>
				
				<!-- .. end W-Playlist -->
			</div>

				<?php for ($i = 0; $i < 3; ++$i) { ?>

					<div class="row news-item">
						<div class="col-8" style="">
							<a class="title" >Dems demand Twitter take down edited video of Pelosi ripping State of the Union speech posted by Trump </a>
							<p class="subtitle">At least 11 Americans are among the dozens of people aboard a cruise ship moored in Japan who have tested positive for the ...</p>
							<span class="row source-info"><span class="col-sm-12"> <img src="img/news-logo1.png" style="margin-right: 2%;"> <span>ABC News <span class="span-seperation"> | </span> 3 days ago </span></span></span>
						</div>
						<div class="col-4 news-img-cover">
							<img src="img/news1.jpg" class="news-img" alt="photo">
						</div>

					</div>

				<?php } ?>

				<div class="ui-block">
					
					<article class="" style="padding: 2%;">
					
						<p>Trending Products</p>
						<?php $flowId = sha1(uniqid('')); ?>

						<div id="<?= $flowId ?>" class="swipet" scrolls="100">
							<div class="menu-wrapper">
								<div class="menu">
									
									<?php for ($i = 1; $i < 7; ++$i) { ?>

										<div class="slider-item card" style="width: 18rem;">
										  <img src="img/product-small<?= $i ?>.png" class="card-img-product" alt="...">
										  <div class="card-body">
										    <h5 class="card-title">Meghee Academy - T-shirt</h5>
										    <!-- <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
										    <a href="#" class="btn btn-primary">Buy</a>
										  </div>
										</div>

									<?php } ?>
								
								</div>

								<div class="paddles">
									<button class="left-paddle paddle hidden" onclick="horizontalSliderActionLeft('#<?= $flowId ?>');">
										<strong class="arrow"> < </strong>
									</button>
									
									<button class="right-paddle paddle" onclick="horizontalSliderActionRight('#<?= $flowId ?>');">
										<strong class="arrow"> > </strong>
									</button>
								</div>

							</div>
						</div>				
						
					
					</article>
				</div>

				
			</div>

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"></a>

		</main>

		<!-- ... end Main Content -->

		<!-- Right Sidebar -->

		<aside class="col-lg-3 desktop">

			<div class="ui-block sidebar">
				<div class="ui-block-title">
					<h6 class="title">Trending Now</h6>
					<a href="#" class="more"></a>
				</div>

				
				
				<!-- W-Action -->
				
				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar38-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Francine Smith</a>
							<span class="chat-message-item">8 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar39-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Hugh Wilson</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar40-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Karen Masters</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar39-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Hugh Wilson</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar40-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Karen Masters</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar40-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Karen Masters</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>

					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar39-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Hugh Wilson</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="img/avatar40-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Karen Masters</a>
							<span class="chat-message-item">6 Friends in Common</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
					</li>
				
				</ul>
				
				<!-- ... end W-Action -->
			</div>

		</aside>

		<!-- ... end Right Sidebar -->
		

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