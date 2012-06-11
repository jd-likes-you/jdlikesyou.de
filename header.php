<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>jd likes you | hello my friend</title>
  <meta name="description" content="">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
  <!-- 1140px Grid styles for IE -->
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />
	
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dosis.css">
  <link rel="stylesheet" href="/js/libs/orbit/orbit.css">

  <link rel="stylesheet" href="css/main.css">
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
   
  <div class="container">
	<div class="row">
		<div class="threecol" id="sidebar">
			<a href="/">
				<img src="/images/logo.png" alt="jd likes you" id="intro-img";>
			</a>

			<div>
				<p>
					Julia Dechert 
					<br> 
					Grafik-&amp; Webdesign
				</p>
				<p>
					<a href="/kontakt.php">Contact me !</a>
				</p>
			</div>
			
			<nav>
				<ul>
					<li>
						<a href="/webdesign.php">Bla</a>
					</li>
					<li>
						<a href="/print.php">Blupp</a>
					</li>
					<li>
						<a href="/diverses.php">Foo</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="ninecol last">
			<nav id="nav-top">
				<?php 
					$navigationItems = array(
						'/webdesign.php' => 'Webdesign',
						'/print.php' => 'Print',
						'/diverses.php' => 'Diverses',
						'/vita.php' => 'Vita',
						'/kontakt.php' => 'Kontakt',
						'/impressum.php' => 'Impressum'
					);
					
					foreach ($navigationItems as $navigationItemUrl => $navigationItemTitle)
					{
						$navigationEntry = '<a ';
						
						if ($navigationItemUrl === $_SERVER['REQUEST_URI'])
						{
							$navigationEntry .= 'class="active" ';
						}
						
						$navigationEntry .= 'href="' . $navigationItemUrl . '">' . $navigationItemTitle . '</a>';
						echo $navigationEntry;
					}
				?>
			</nav>
					
			<div role="main">
				<article>