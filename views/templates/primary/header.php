<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf=8">
	
		<?php 
	
		checkBlockedIPs();
	
		$browser = checkBrowser();
		printCSS($browser, $css);
	
		?>
	
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	
		<noscript>
			<link rel="stylesheet" type="text/css" href="http://www.programminghelp.org/styles/jsOff.css" />
		</noscript>
		<link rel="icon" type="image/x-icon" href="http://www.programminghelp.org/styles/icons/fav-icon.png" />
	
		<title><?php echo $title; ?></title>
		<meta name="description" content="Check out all of our free online programming tutorials. Our tutorials cover topics from basic programming methodology to web development.">
		<meta name="keywords" content="free, online, programming, tutorials, help, C++, html, javascript">
		<meta name="author" content="Adam Huntley">
	</head>
	
	<body>

		<div class="header">
		
			<div class="headerContainer">
				<img class="headerImage" alt="no logo yet" src="http://www.programminghelp.org/" />
		
				<!-- Include Social Media -->
				<div id="social">
					<a href="https://www.facebook.com/pages/Programminghelporg/504187309694019"><img alt="fb" class="socialImage" title="Facebook" src="http://www.programminghelp.org/styles/icons/facebook.png" /></a>
					<a href="http://www.youtube.com/user/programminghelporg"><img alt="yt" class="socialImage" title="YouTube" src="http://www.programminghelp.org/styles/icons/youtube.png" /></a>
					<a href="https://twitter.com/ahuntley06"><img alt="tw" class="socialImage" title="Twitter" src="http://www.programminghelp.org/styles/icons/twitter.png" /></a>
				</div>
		
				<!-- Include Google Search -->
				<div id="searchGoogle">
					<form method="get" action="http://www.google.com/search">
						<input class="searchBar" type="text" name="q" size="30" maxlength="255" value="" />
						<img alt="google" src="http://www.programminghelp.org/styles/images/poweredByGoogle.png" />
					</form>
				</div>
		
			</div>
		</div>
			
		<div class="navigation">

			<div class="navigationContainer">
		
				<!-- Horizontal Navigation -->
				<div id="links_horizontal">
					<ul class="nav">
					<li><a class="link dropDown" href="http://www.programminghelp.org/lib/"><div class="linkText">PROGRAMMING<span id="downArrow">▼</span></div></a>
					
					<!-- Sub List -->
					<div class="list">
				
						<div class="columnOne">
							<p class="listTitle">Programming</p>
							<ul class="subNav">
								<li><a class="linkList" href="http://www.programminghelp.org/lib/c-sharp/">C#</a></li>
								<li><a class="linkList" href="http://www.programminghelp.org/lib/c++/">C++</a></li>
								<li><a class="linkList" href="http://www.programminghelp.org/lib/vb/">Visual Basic</a></li>
							</ul>
						</div>
				
						<div class="columnTwo">
							<p class="listTitle">Web</p>
							<ul class="subNav">
								<li><a class="linkList" href="http://www.programminghelp.org/lib/html-css/">HTML/CSS</a></li>
								<li><a class="linkList" href="http://www.programminghelp.org/lib/javascript/">JavaScript</a></li>
							</ul>
						</div>
					</div>
					</li>
				
					<!--<li><a class="link" href="http://www.youtube.com/"><div class="linkText">LET'S PLAY</div></a></li>-->
					</ul>
				</div>
			
			</div>
		</div>
			
		<div class="banner">

			<div class="bannerContainer mobileOff">

				<!-- Include Slideshow -->
				<?php if ($page == 'contact') { ?>
				<div id="slideshow">
					<img alt="contact" class="active" src="styles/images/contactUs.jpg" />
				</div>

				<!-- Slideshow Caption -->
				<div id="slideshow_caption">
					<span id="caption_Background">
						<span id="caption_header">Contact Us</span>
					</span>
					<span id="caption_text">Learn common material found in computer science curricula around the world. Create projects from scratch and apply your knowledge in creating anything from desktop applications to web sites.</span>
				</div>
				
				<?php }else{ ?>
				<script type="text/javascript" src="http://www.programminghelp.org/scripts/imagebox.min.js"></script>
				<script type="text/javascript" src="http://www.programminghelp.org/scripts/jquery-cycle-all.min.js"></script>
				<div id="slideshow">
					<img alt="" class="active" src="http://www.programminghelp.org/styles/images/sample1.jpg" />
					<img alt="" class="activeAdditional" src="http://www.programminghelp.org/styles/images/keyboard.jpg" />
					<img alt="" class="activeAdditional" src="http://www.programminghelp.org/styles/images/sample3.png" />
				</div>

				<!-- Slideshow Caption -->
				<div id="slideshow_caption">
					<span id="caption_Background">
						<span id="caption_header">Learn to Program</span>
					</span>
					<span id="caption_text">Learn common material found in computer science curricula around the world. Create projects from scratch and apply your knowledge in creating anything from desktop applications to web sites.</span>
				</div>
				<?php } ?>
			</div>
		</div>		
		
		<div class="bannerBase">

		</div>