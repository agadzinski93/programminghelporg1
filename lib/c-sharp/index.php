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

	<link rel="stylesheet" type="text/css" href="http://www.programminghelp.org/styles/tutorialList/c-sharp-tabs.css" />
	<title>Programming Help | Free C# Programming Tutorials Online</title>

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
			<p class="title">C# Tutorials</p>
			
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
					<a href="http://www.microsoft.com/visualstudio/en-us/products/2010-editions/visual-csharp-express">Visual C# 2010 Express</a>
				</div>
				
				<!-- Lesson Tabs -->
				<div class="lessonContainer">
					<ul class="lessonList">
						<li class="selected"><a href="#tabs-level1">Level 1</a></li>
					</ul>
					
					<!-- Lesson List -->
					<div id="tabs-level1">
						<div class="tools">
						
							<a class="lessonLink" href="http://www.programminghelp.org/lib/c-sharp/lesson-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 1: Introduction in C# 2010</div><br />
								<div class="lessonDescription">Just a video in getting started with Microsoft Visual Studio using the C# programming language. I will show you around the IDE (Integrated Development Environment) as well as introduce you to this series which will cover an introductory college course in C#. </div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 2: Controls, Comments, Variables, and Data Types</div><br />
								<div class="lessonDescription">In this tutorial, we will learn about controls for the GUI, how to create comments, how to declare and initialize variables, and various data types from floating types to string types.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-3/"><div class="lesson">
								<div class="lessonTitle">Lesson 3: Buttons, Textboxes, and Arithmetic and Assignment Operators</div><br />
								<div class="lessonDescription">This tutorial will cover buttons on the windows form, textboxes, as well as arithmetic (math) and assignment operators.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-4/"><div class="lesson">
								<div class="lessonTitle">Lesson 4: If Statements and Comparison and Logical Operators</div><br />
								<div class="lessonDescription">This tutorial will cover decision making using if statements as well as comparison and logical operators in order to determine validity.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-5/"><div class="lesson">
								<div class="lessonTitle">Lesson 5: Constants, Strings, and String Functions</div><br />
								<div class="lessonDescription">This tutorial will cover constants, strings and pre-defined functions that you can use with strings.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-6/"><div class="lesson">
								<div class="lessonTitle">Lesson 6: Formatting Numbers, Message Boxes, Focus, and the Switch</div><br />
								<div class="lessonDescription">This tutorial will cover topics including formatting numbers, message box icons and buttons, focus, pre-made text, and the switch statement.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-7/"><div class="lesson">
								<div class="lessonTitle">Lesson 7: GUI - List Boxes</div><br />
								<div class="lessonDescription">This tutorial will cover how to use list boxes.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-8/"><div class="lesson">
								<div class="lessonTitle">Lesson 8: Loops</div><br />
								<div class="lessonDescription">This tutorial will cover while, do while, and for loops.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-9/"><div class="lesson">
								<div class="lessonTitle">Lesson 9: Nesting, Exiting, and Continuing Loops, Quotes in Strings</div><br />
								<div class="lessonDescription">This tutorial will cover topics including how to exit and continue loops using the break and continue keywords as well as nesting them. I will also show you how to place quotes within strings.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-10/"><div class="lesson">
								<div class="lessonTitle">Lesson 10: Functions, Parameters, and Variable Scope</div><br />
								<div class="lessonDescription">This tutorial will cover how to declare and implement functions. I will also show you how to pass parameters into functions and discuss a bit on variable scope.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-11/"><div class="lesson">
								<div class="lessonTitle">Lesson 11: Passing by Reference and Passing Functions as Parameters</div><br />
								<div class="lessonDescription">Here, I will show you the difference between passing a parameter by value and by reference. I will also pass a function as a parameter into a function.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-12/"><div class="lesson">
								<div class="lessonTitle">Lesson 12: Static Variables and Multiple Forms</div><br />
								<div class="lessonDescription">This tutorial will cover how to use static variables and what their advantages are as well as how to create and open multiple forms.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-13/"><div class="lesson">
								<div class="lessonTitle">Lesson 13: Arrays</div><br />
								<div class="lessonDescription">This tutorial will cover arrays.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-14/"><div class="lesson">
								<div class="lessonTitle">Lesson 14: Arrays as Parameters and Multi-Dimensional Arrays</div><br />
								<div class="lessonDescription">This tutorial will cover how to pass an array as a parameter into a function and how to create a multi-dimensional array.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-15/"><div class="lesson">
								<div class="lessonTitle">Lesson 15: Timers and Random Numbers</div><br />
								<div class="lessonDescription">Here, we will learn how to generate random numbers and bytes. We will also learn about how to use the timer control.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-16/"><div class="lesson">
								<div class="lessonTitle">Lesson 16: Enumerations</div><br />
								<div class="lessonDescription">This tutorial will show how to create and use enumerated data types.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-17-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 17-1: Classes and Object-Oriented Programming (Part 1)</div><br />
								<div class="lessonDescription">This tutorial is part 1 of how to create a class and instantiate an object of that particular class. We will be creating a default constructor, overload constructor, and member variables.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-17-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 17-2: Classes and Object-Oriented Programming (Part 2)</div><br />
								<div class="lessonDescription">This is part 2 of creating a class and here we will be creating our accessor functions and our mutator functions.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-18/"><div class="lesson">
								<div class="lessonTitle">Lesson 18: Inheritance</div><br />
								<div class="lessonDescription">This tutorial will show you how you can inherit variables and functions/methods from one class into another class. You can also do this with properties.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-19/"><div class="lesson">
								<div class="lessonTitle">Lesson 19: Structures</div><br />
								<div class="lessonDescription">We will learn how to create structures and analyze when it would be better to use a structure as opposed to a class.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-20/"><div class="lesson">
								<div class="lessonTitle">Lesson 20: Properties</div><br />
								<div class="lessonDescription">Here, we will learn how to create properties that can act as accessors and/or mutators depending on whether you make them read only. You can also use properties to return other information besides private member variables of a class.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-21/"><div class="lesson">
								<div class="lessonTitle">Lesson 21: Files - Opening and Saving</div><br />
								<div class="lessonDescription">Here, we will learn how to open and save files using the OpenFileDialog and the SaveFileDialog manually. We will also be using the streamreader and streamwriter which rewuires us to import system.IO.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-22/"><div class="lesson">
								<div class="lessonTitle">Lesson 22: Introduction to the Graphical User Interface</div><br />
								<div class="lessonDescription">Here, we will learn as many controls as we can including: group boxes, check boxes, checklist boxes, radio buttons, combo boxes, numeric ups and downs, picture boxes, richtext boxes, tooltips, link labels, and more!</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c-sharp/lesson-23/"><div class="lesson">
								<div class="lessonTitle">Lesson 23: Dates, Track Bars, and Menus</div><br />
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
