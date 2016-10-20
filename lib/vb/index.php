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

	<link rel="stylesheet" type="text/css" href="http://www.programminghelp.org/styles/tutorialList/vb-tabs.css" />
	<title>Programming Help | Free Visual Basic Programming Tutorials Online</title>

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
			<p class="title">Visual Basic Tutorials</p>
			
			<h2>Select Tutorial Set</h2>
			<!-- Version Tabs -->
			<ul class="tutorialList">
				<li class="selected"><a href="#tabs-1">VS 2010</a></li>
				<!--<li><a href="#tabs-2">VS 2013</a></li>-->
			</ul>
			</div>
			
			<!-- Tools Section -->
			<div id="tabs-1">
				<p class="toolsTitle unfinished">Tools</p>
				<div class="tools">
					<a href="http://www.microsoft.com/visualstudio/en-us/products/2010-editions/visual-basic-express">Visual Basic 2010 Express</a>
				</div>
				
				<!-- Lesson Tabs -->
				<div class="lessonContainer">
					<ul class="lessonList">
						<li class="selected"><a href="#tabs-level1">Level 1</a></li>
					</ul>
					
					<!-- Lesson List -->
					<div id="tabs-level1">
						<div class="tools">
						
							<a class="lessonLink" href="http://www.programminghelp.org/lib/vb/lesson-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 1: Introduction in Visual Basic 2010</div><br />
								<div class="lessonDescription">Just an overview of what this playlist will be about. Not so much with the programming until the next video. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 2: Controls, Comments, Variables, and Data Types</div><br />
								<div class="lessonDescription">Quite a bit of information that will be covered including comments, alert, confirm, and prompt boxes. We will also discuss strings and variables as well. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-3/"><div class="lesson">
								<div class="lessonTitle">Lesson 3: Buttons, Textboxes, Boxes, and Arithmetic and Assignment Operators</div><br />
								<div class="lessonDescription">We will learn a few more controls on the windows form GUI as well as the math and assignment operators.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-4/"><div class="lesson">
								<div class="lessonTitle">Lesson 4: If Statements and Comparison and Logical Operators</div><br />
								<div class="lessonDescription">Conditional logic using the infamous if statement as well as using comparison and logical operators with these statements.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-5/"><div class="lesson">
								<div class="lessonTitle">Lesson 5: Constants, Strings, String Functions</div><br />
								<div class="lessonDescription">Learn how to create constant variables, strings as well as pre-made functions that you can use with strings.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-6/"><div class="lesson">
								<div class="lessonTitle">Lesson 6: Data Type Conversion and Formatting Decimals</div><br />
								<div class="lessonDescription">Here, we will learn various techniques of data type conversion as well as some tricks to easily format numbers.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-7/"><div class="lesson">
								<div class="lessonTitle">Lesson 7: Option Strict, Message Boxes, Focus, and Select Case</div><br />
								<div class="lessonDescription">Learn what option strict does, how to use message boxes, place focus, and use the select case.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-8/"><div class="lesson">
								<div class="lessonTitle">Lesson 8: GUI - Input Boxes and List Boxes</div><br />
								<div class="lessonDescription">Here, we will learn how to collect data through the user as well as create list boxes.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-9/"><div class="lesson">
								<div class="lessonTitle">Lesson 9: Loops</div><br />
								<div class="lessonDescription">Here, you'll learn about three different types of loops: do while, do until, and the for next.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-10/"><div class="lesson">
								<div class="lessonTitle">Lesson 10: Nesting, Exiting, and Continuing Loops, Tricks with Strings</div><br />
								<div class="lessonDescription">You will learn about nesting loops as well as how to exit them or continue them. You will also learn how to place quotations in a string and how to break text to the next line.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-11/"><div class="lesson">
								<div class="lessonTitle">Lesson 11: Procedures, Functions, and Variable Scope</div><br />
								<div class="lessonDescription">Here, you'll learn about the difference between procedures (subroutines) and functions as well as different levels of variable scope.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-12/"><div class="lesson">
								<div class="lessonTitle">Lesson 12: Static Variables and Multiple Forms</div><br />
								<div class="lessonDescription">You'll learn the usefulness of static variables and how to create multiple forms and use them.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-13/"><div class="lesson">
								<div class="lessonTitle">Lesson 13: Modules</div><br />
								<div class="lessonDescription">You will learn how to create a module and use it to store a procedure or a function.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-14/"><div class="lesson">
								<div class="lessonTitle">Lesson 14: Arrays</div><br />
								<div class="lessonDescription">You will learn how to create arrays and do some stuff with them.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-15/"><div class="lesson">
								<div class="lessonTitle">Lesson 15: Arrays as Parameters and Multi-Dimensional Arrays</div><br />
								<div class="lessonDescription">You will learn a good reason to pass an array as a parameter as well as a solid example of using multi-dimensional arrays.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-16/"><div class="lesson">
								<div class="lessonTitle">Lesson 16: Timers and Random Numbers</div><br />
								<div class="lessonDescription">Learn how to use timers as well as generate random numbers to determine what task will be accomplished (trust me, you'll like this example).</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-17/"><div class="lesson">
								<div class="lessonTitle">Lesson 17: Enumerations</div><br />
								<div class="lessonDescription">This tutorial will cover have to create and use enumerated data types.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-18/"><div class="lesson">
								<div class="lessonTitle">Lesson 18: Structures</div><br />
								<div class="lessonDescription">This tutorial will cover how to create and use structures in our code.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-19/"><div class="lesson">
								<div class="lessonTitle">Lesson 19: Files - Opening and Saving</div><br />
								<div class="lessonDescription">In this tutorial, we will learn how to save text in a windows form application as well as opening txt files.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-20/"><div class="lesson">
								<div class="lessonTitle">Lesson 20: Classes</div><br />
								<div class="lessonDescription">This tutorial will cover how to create and implement classes and objects.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-21/"><div class="lesson">
								<div class="lessonTitle">Lesson 21: Class Overview and Properties</div><br />
								<div class="lessonDescription">This tutorial will cover how to create and use properties with classes.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-22/"><div class="lesson">
								<div class="lessonTitle">Lesson 22: Collections</div><br />
								<div class="lessonDescription">This tutorial will cover how to create collections for objects.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-23/"><div class="lesson">
								<div class="lessonTitle">Lesson 23: Introduction to the Graphical User Interface</div><br />
								<div class="lessonDescription">This tutorial will cover many of the controls found with windows form applications including: group boxes, check boxes, checklist boxes, radio buttons, combo boxes, numeric ups and downs, picture boxes, richtext boxes, tooltips, link labels, and more!</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/vb/lesson-24/"><div class="lesson">
								<div class="lessonTitle">Lesson 24: Dates, Track Bars, and Menus</div><br />
								<div class="lessonDescription">Here we will learn how to use the date object with the DateTimePicker control as well as use the track bars, We will also briefly look at HScrollBars and VScrollBars and create menu strips with separators and shortcut keys.</div>
							</div></a><br />
						
						</div>
					</div>
					
				</div>
				
			</div>
			
			<!--<div id="tabs-2">
				<p class="toolsTitle">Tools</p>
				<div class="tools">
					<a href="http://www.microsoft.com/en-us/download/details.aspx?id=40787">Visual Studio 2013 Express</a>
				</div>
			</div>-->
			
		</div>
		
	</div>
	
</div>

<!-- Footer -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/footer.php"; ?>

</body>

</html>
