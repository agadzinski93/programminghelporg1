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

	<link rel="stylesheet" type="text/css" href="http://www.programminghelp.org/styles/tutorialList/javascript-tabs.css" />
	<title>Programming Help | Free JavaScript Programming Tutorials Online</title>

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
			<p class="title">JavaScript Tutorials</p>
			
			<h2>Select Tutorial Set</h2>
			<!-- Version Tabs -->
			<ul class="tutorialList">
				<li class="selected"><a href="#tabs-1">2012 Tutorials</a></li>
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
						<li class="selected"><a href="#tabs-level1">Level 1</a></li>
					</ul>
					
					<!-- Lesson List -->
					<div id="tabs-level1">
						<div class="tools">
						
							<a class="lessonLink" href="http://www.programminghelp.org/lib/javascript/lesson-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 1: Introduction in JavaScript</div><br />
								<div class="lessonDescription">Just an overview of what this playlist will be about. Not so much with the programming until the next video. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 2: Comments, Writing, Dialog Boxes, Strings, and Variables</div><br />
								<div class="lessonDescription">Quite a bit of information that will be covered including comments, alert, confirm, and prompt boxes. We will also discuss strings and variables as well.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-3/"><div class="lesson">
								<div class="lessonTitle">Lesson 3: Arithmetic (Math) and Assignment Operators</div><br />
								<div class="lessonDescription">An introduction in operators that can be used in JavaScript. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-4/"><div class="lesson">
								<div class="lessonTitle">Lesson 4: Decision Making, Logical & Comparison Operators, Nesting</div><br />
								<div class="lessonDescription">We will learn about how to make decisions with if statements as well as nesting them. We will also learn about comparison and logical operators. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-5/"><div class="lesson">
								<div class="lessonTitle">Lesson 5: Constants, Review Operators and the Switch</div><br />
								<div class="lessonDescription">We will learn about constants and how to use them, review the operators that we already know as well as the conditional operator. Then we will learn about the switch statement. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-6/"><div class="lesson">
								<div class="lessonTitle">Lesson 6: Data Type Conversion</div><br />
								<div class="lessonDescription">In this tutorial we will learn about data type conversion using parseInt, parseFloat, and the eval functions. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-7/"><div class="lesson">
								<div class="lessonTitle">Lesson 7: Loops</div><br />
								<div class="lessonDescription">In this tutorial we will learn about while, do while, and the for loop. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-8/"><div class="lesson">
								<div class="lessonTitle">Lesson 8: Functions, Parameters, and Variable Scope</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about functions, when to use parameters with functions, and local and global scope for variables. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-9/"><div class="lesson">
								<div class="lessonTitle">Lesson 9: Event Handlers and Buttons</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about event handlers, how to use them as functions, and how to access them using buttons.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-10/"><div class="lesson">
								<div class="lessonTitle">Lesson 10: SetTimeout, SetInterval, and External Scripts</div><br />
								<div class="lessonDescription">In this tutorial, we will learn the difference between the setTimeout and setInterval functions as well as how to create an external JavaScript file and link it back to our website.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-11-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 11-1: Custom Objects (Part 1)</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about what objects are and how to create them.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-11-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 11-2: Custom Objects (Part 2)</div><br />
								<div class="lessonDescription">Here, we are going to finish the example from the last video.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-12/"><div class="lesson">
								<div class="lessonTitle">Lesson 12: Date Object and Math Object</div><br />
								<div class="lessonDescription">In this tutorial, we will learn our first predefined objects in JavaScript: the Date and Math objects.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-13/"><div class="lesson">
								<div class="lessonTitle">Lesson 13: String Object, Number Object, and Boolean Object</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about the string, number, and boolean objects in JavaScript.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-14/"><div class="lesson">
								<div class="lessonTitle">Lesson 14: Browser Object Model (BOM)</div><br />
								<div class="lessonDescription">In this tutorial, I will be introducing the Browser Object Model in moderate detail.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-15/"><div class="lesson">
								<div class="lessonTitle">Lesson 15: Arrays</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about arrays and how we can use them to save space during execution.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-16/"><div class="lesson">
								<div class="lessonTitle">Lesson 16: More on Arrays and the Image Object</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about methods and properties concerning arrays as well as the image object and preloading images.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-17/"><div class="lesson">
								<div class="lessonTitle">Lesson 17: Form Object and Validation</div><br />
								<div class="lessonDescription">I will show you an example of using simple form validation to ensure a user types in what you want.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-18/"><div class="lesson">
								<div class="lessonTitle">Lesson 18: Document Object Model (DOM)</div><br />
								<div class="lessonDescription">This will be an introduction into the Document Object Model including nodes and innerHTML. I very do much plan to teach more advance uses of it when I make my Level 2 playlist for JavaScript.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-19/"><div class="lesson">
								<div class="lessonTitle">Lesson 19: DHTML</div><br />
								<div class="lessonDescription">In this tutorial, we will touch upon Dynamic HyperText Mark-up Language.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-20-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 20-1: Cookies (Part 1)</div><br />
								<div class="lessonDescription">In this tutorial we will learn about how to create cookies and use them to save user information.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/javascript/lesson-20-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 20-2: Cookies (Part 2)</div><br />
								<div class="lessonDescription">Just a heads up concerning some of this material that we did in the last video.</div>
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
