<!DOCTYPE html>
	
<html lang="en">

<head>
<meta charset="utf-8">

<!-- Check IP Addresses -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/blockedIP.php"; ?>

<!-- Browser Check (Primary Check) -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/browserCheck.php"; ?>

<!-- Browser Check (Tutorial Page) -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/tutorialListCheck.php"; ?>

<!-- JS Files -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/jsFiles.php"; ?>

<!-- JS Off -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/jsOff.php"; ?>

<!-- Tabs -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/tabs.php"; ?>

	<link rel="stylesheet" type="text/css" href="http://www.programminghelp.org/styles/tutorialList/html-css-tabs.css" />
	<title>Programming Help | Free HTML/CSS Programming Tutorials Online</title>

</head>

<body>

<div class="header">

<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/headerContainer.php"; ?>
	
</div>

<!-- Primary Navigation -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/primaryNavigation.php"; ?>

<!-- Banner -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/banners/mainBanner.php"; ?>

<div class="bannerBase">

</div>

<div class="mainBody">

	<div class="mainBodyContainer">
		
		<!-- Tutorial Container -->
		<div class="tutorialContainer">
			<div class="tutorialSection">
			<p class="title">HTML and CSS Tutorials</p>
			
			<h2>Select Tutorial Set</h2>
			<!-- Version Tabs -->
			<ul class="tutorialList">
				<li class="selected"><a href="#tabs-1">XHTML/CSS</a></li>
			</ul>
			</div>
			
			<!-- Tools Section -->
			<div id="tabs-1">
				<p class="toolsTitle">Tools</p>
				<div class="tools">
					<a href="http://notepad-plus-plus.org/">Notepad++</a> or <a href="http://www.adobe.com/downloads/">Adobe Dreamweaver</a><br />
					<a href="http://filezilla-project.org/">Filezilla</a> (to upload your website)<br />
					<a href="http://www.mozilla.org/en-US/firefox/new/">Mozilla Firefox</a> (any browser will do)
				</div>
				
				<!-- Lesson Tabs -->
				<div class="lessonContainer">
					<ul class="lessonList">
						<li class="selected"><a href="#tabs-level1">XHTML</a></li>
						<li><a href="#tabs-level2">CSS</a></li>
					</ul>
					
					<!-- Lesson List -->
					<div id="tabs-level1">
						<div class="tools">
						
							<a class="lessonLink" href="http://www.programminghelp.org/lib/html-css/lesson-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 1: Introduction in XHTML</div><br />
								<div class="lessonDescription">In this tutorial, I will show you how to set up an XHTML file that we will be using to start off every tutorial from now through the rest of your web career. I hope you enjoy your ride through this awesome web adventure!</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 2: Basic Text Formatting</div><br />
								<div class="lessonDescription">In this tutorial, we are going to cover a few common tags used in formatting text. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-3/"><div class="lesson">
								<div class="lessonTitle">Lesson 3: Links</div><br />
								<div class="lessonDescription">In this tutorial we are going to learn about creating hyperlinks. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-4/"><div class="lesson">
								<div class="lessonTitle">Lesson 4: Email, Tool Tips, Horizontal Rule, Lists</div><br />
								<div class="lessonDescription">In this tutorial, we are going to learn about creating email links, create tool tips, horizontal rules, and ordered, unordered, and definition lists.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-5/"><div class="lesson">
								<div class="lessonTitle">Lesson 5: Images</div><br />
								<div class="lessonDescription">In this tutorial we will learn how to create images on our site using anchor tags. We will also learn how to resize them and other things, too!</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-6/"><div class="lesson">
								<div class="lessonTitle">Lesson 6: Backgrounds</div><br />
								<div class="lessonDescription">In this tutorial, we will learn how to apply background color and background images and mess with them a bit.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-7/"><div class="lesson">
								<div class="lessonTitle">Lesson 7: Tables</div><br />
								<div class="lessonDescription">In this tutorial, we will learn how to create tables and format them as we desire. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-8/"><div class="lesson">
								<div class="lessonTitle">Lesson 8: Image Links, Image Maps, and Comments</div><br />
								<div class="lessonDescription">In this tutorial, we will learn how to make a click-able image link, an image map, and comments.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-9/"><div class="lesson">
								<div class="lessonTitle">Lesson 9: Styles</div><br />
								<div class="lessonDescription">In this tutorial, we will learn the basics of different styles as well as an introduction in cascading style sheets.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-10/"><div class="lesson">
								<div class="lessonTitle">Lesson 10: Forms</div><br />
								<div class="lessonDescription">In this tutorial, we will learn how to create forms and a bunch of different input types for use with the form.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-11/"><div class="lesson">
								<div class="lessonTitle">Lesson 11: Multimedia</div><br />
								<div class="lessonDescription">In this tutorial, we will learn how to add embedded video and audio files to our website!</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-12/"><div class="lesson">
								<div class="lessonTitle">Lesson 12: Organizing and Uploading Your Website</div><br />
								<div class="lessonDescription">In this tutorial, I will give some advice on how to make a more efficient website and upload it using FileZilla!</div>
							</div></a><br />
						
						</div>
					</div>
					
					
					<div id="tabs-level2">
						<div class="tools">
							<a class="lessonLink" href="http://www.programminghelp.org/lib/html-css/lesson-css3-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 1: Introduction in Cascading Style Sheets</div><br />
								<div class="lessonDescription">We will review the differences between inline, embedded (internal), and external style sheets. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 2: Advanced Text Formatting</div><br />
								<div class="lessonDescription">We will discuss some advanced styles for formatting text. This is the real deal. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-3/"><div class="lesson">
								<div class="lessonTitle">Lesson 3: Lists, Backgrounds, Links, and Tables</div><br />
								<div class="lessonDescription">In this tutorial, we are going to learn how to style links, backgrounds, lists, and tables. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-4/"><div class="lesson">
								<div class="lessonTitle">Lesson 4: IDs, DIV, and Positioning</div><br />
								<div class="lessonDescription">In this tutorial, we are going to learn about ID (identifications), the DIV (division) tag, and how to position elements on a web page! </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-5/"><div class="lesson">
								<div class="lessonTitle">Lesson 5: Parent/Child Selectors and Classes</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about how to modify specific tags that are within other tags and we will learn about classes.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-6/"><div class="lesson">
								<div class="lessonTitle">Lesson 6: Pseudo Elements and Pseudo Classes</div><br />
								<div class="lessonDescription">In this tutorial, we will learn how to apply background color and background images and mess with them a bit.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-7/"><div class="lesson">
								<div class="lessonTitle">Lesson 7: Difference Between Classes and IDs</div><br />
								<div class="lessonDescription">This tutorial will cover when you should use a class and when to use an ID in XHTML/CSS.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-8/"><div class="lesson">
								<div class="lessonTitle">Lesson 8: Using the Float Property to Position Elements</div><br />
								<div class="lessonDescription">This tutorial will cover how to use the float and the overflow property in CSS.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-9/"><div class="lesson">
								<div class="lessonTitle">Lesson 9: Vertical and Horizontal Navigation Bars with Submenus</div><br />
								<div class="lessonDescription">This tutorial will cover how to create both horizontal and vertical navigation bars as well as add submenus for specific items.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/html-css/lesson-css3-10/"><div class="lesson">
								<div class="lessonTitle">Lesson 10: Structuring a Website with DIV Tags</div><br />
								<div class="lessonDescription">This tutorial will cover how to properly organize and structure a website using DIV (division) tags about each section of the page. We will wrap the entire one DIV tag known as the container.</div>
							</div></a><br />
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<!-- Footer -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/footer.php"; ?>

</body>

</html>
