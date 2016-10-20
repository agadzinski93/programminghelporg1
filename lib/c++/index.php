<!DOCTYPE html>
	
<html lang="en">

<head>
<meta charset="utf-8">

<!-- Check IP Addresses -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/blockedIP.php"; ?>

<!-- Browser Check (Primary Check) -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/browserCheck.php"; ?>

<!-- Browser Check (Tutorial Page) -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/tutorialListCheck.php"; ?>

<!-- JS Files -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/jsFiles.php"; ?>

<!-- JS Off -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/jsOff.php"; ?>

<!-- Tabs -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/tabs.php"; ?>

	<link rel="stylesheet" type="text/css" href="http://programminghelp.org/styles/tutorialList/cpp-tabs.css" />
	<title>Programming Help | Free C++ Programming Tutorials Online</title>

</head>

<body>

<div class="header">

<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/sections/headerContainer.php"; ?>
	
</div>

<!-- Primary Navigation -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/sections/primaryNavigation.php"; ?>

<!-- Banner -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/sections/banners/mainBanner.php"; ?>

<div class="bannerBase">

</div>

<div class="mainBody">

	<div class="mainBodyContainer">
		
		<!-- Tutorial Container -->
		<div class="tutorialContainer">
			<p class="title">C++ Tutorials</p>
				
			<h2>Select Tutorial Set</h2>
			<!-- Version Tabs -->
			<ul class="tutorialList">
				<li class="selected"><a href="#tabs-1">VS 2010</a></li>
				<!--<li><a href="#tabs-2">VS 2013</a></li>-->
			</ul>
			
			<!-- Tools Section -->
			<div id="tabs-1">
				<p class="toolsTitle unfinished">Tools</p>
				<div class="tools">
					<a href="http://www.microsoft.com/visualstudio/eng/downloads#d-2010-express">Visual C++ 2010 Express</a>
				</div>
				
				<!-- Lesson Tabs -->
				<div class="lessonContainer">
					<ul class="lessonList">
						<li class="selected"><a href="#tabs-level1">Level 1</a></li>
						<!--<li><a href="#tabs-level2">Level 2</a></li>-->
					</ul>
					
					<!-- Lesson List -->
					<div id="tabs-level1">
						<div class="tools">
						
							<a class="lessonLink" href="http://www.programminghelp.org/lib/c++/lesson-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 1: Introduction to C++ 2010</div><br />
								<div class="lessonDescription">This tutorial pretty much shows you how to set up Microsoft Visual Studio 2010 and how to properly set up your code that we will be using in every tutorial from here on out.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 2: Comments, Variables, Data Types</div><br />
								<div class="lessonDescription">This tutorial will cover how to create comments and various data types you can assign to variables such as integers, doubles, floats, chars, strings, and Boolean.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-3/"><div class="lesson">
								<div class="lessonTitle">Lesson 3: Arithmetic and Assignment Operators</div><br />
								<div class="lessonDescription">This tutorial will cover both arithmetic and assignment operators in detail.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-4/"><div class="lesson">
								<div class="lessonTitle">Lesson 4: Math and Algorithm Class and Static Cast Conversion</div><br />
								<div class="lessonDescription">This tutorial will cover some functions from both the algorithm and the math classes. We will also review the static cast.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-5/"><div class="lesson">
								<div class="lessonTitle">Lesson 5: String, Getline, Concatenation, and String Functions</div><br />
								<div class="lessonDescription">This tutorial will review upon strings as well as using the getline function. We will also learn how to concatenate strings together as well as use some predefined string functions from the string class.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-6/"><div class="lesson">
								<div class="lessonTitle">Lesson 6: If Statements and Comparison and Logical Operators</div><br />
								<div class="lessonDescription">This tutorial will cover decision making via if and else if statements as well as use of the logical and comparison operators: && || ^</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-7/"><div class="lesson">
								<div class="lessonTitle">Lesson 7: Constants and Formatting Decimals</div><br />
								<div class="lessonDescription">This tutorial will cover the use of constants as well as formatting decimals to a fixed precision of trailing decimals.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-8/"><div class="lesson">
								<div class="lessonTitle">Lesson 8: Switch Statement</div><br />
								<div class="lessonDescription">This tutorial will cover how to use the switch statement with both integers and characters (chars) as the selected data type.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-9/"><div class="lesson">
								<div class="lessonTitle">Lesson 9: Loops</div><br />
								<div class="lessonDescription">This tutorial will discuss the syntax for the while, do while, and the for loop in the C++ programming language.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-10/"><div class="lesson">
								<div class="lessonTitle">Lesson 10: Nesting, Exiting, and Continuing Loops, Quotes in Strings</div><br />
								<div class="lessonDescription">This tutorial will show how to place quotes inside a string as well as nest if statements and loops within one another. We will also learn how to use the continue and break keywords with loops.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-11/"><div class="lesson">
								<div class="lessonTitle">Lesson 11: Functions</div><br />
								<div class="lessonDescription">This tutorial will cover how to make function declarations as well as function definitions in your main file.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-12/"><div class="lesson">
								<div class="lessonTitle">Lesson 12: Variable Scope and Parameters</div><br />
								<div class="lessonDescription">This tutorial will cover both local scope and global scope for variables as well as how to pass parameters into your functions.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-13/"><div class="lesson">
								<div class="lessonTitle">Lesson 13: Passing by Value vs Passing by Reference</div><br />
								<div class="lessonDescription">This tutorial will cover the difference between passing parameter by value and by reference.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-14/"><div class="lesson">
								<div class="lessonTitle">Lesson 14: Functions as Parameters</div><br />
								<div class="lessonDescription">This tutorial will cover how to pass functions that return a value as a parameter in to another function.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-15/"><div class="lesson">
								<div class="lessonTitle">Lesson 15: Arrays</div><br />
								<div class="lessonDescription">This tutorial will cover how to declare and fill arrays.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-16/"><div class="lesson">
								<div class="lessonTitle">Lesson 16: Arrays as Parameters</div><br />
								<div class="lessonDescription">This tutorial will cover how to pass arrays as parameters into function.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-17/"><div class="lesson">
								<div class="lessonTitle">Lesson 17: Multidimensional Arrays as Parameters</div><br />
								<div class="lessonDescription">This tutorial will cover how to create and pass multidimensional arrays as parameters into functions. This is a HARD tutorial! DON'T LET THIS TUTORIAL INTIMIDATE YOU!</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-18/"><div class="lesson">
								<div class="lessonTitle">Lesson 18: Vectors and Vector Functions</div><br />
								<div class="lessonDescription">This tutorial will cover how to declare vectors and use various vector functions such as push_back, at, insert, remove, clear, and empty.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-19/"><div class="lesson">
								<div class="lessonTitle">Lesson 19: Vectors as Parameters</div><br />
								<div class="lessonDescription">This tutorial will teach you how to pass vectors as parameters into functions. We will also learn how to print only the even elements in a vector, reverse print the elements backwards, and replace one integer with another in the vector.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-20-1/"><div class="lesson">
								<div class="lessonTitle">Lesson 20-1: Classes and Object-Oriented Programming (Part 1)</div><br />
								<div class="lessonDescription">This tutorial will detail how to create a class using a separate cpp file and a header file. In this part, we will successfully create a default constructor, an overload constructor, and how to instantiate an object using either of these constructors. We will also create member variables in the private access modifier.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-20-2/"><div class="lesson">
								<div class="lessonTitle">Lesson 20-2: Classes and Object-Oriented Programming (Part 2)</div><br />
								<div class="lessonDescription">This tutorial will finish up what we started in the last tutorial. Here, we will create our destructor, create our accessor functions and mutator functions, and create a function to calculate BMI (body mass index). I hope the tutorial is helpful.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-21/"><div class="lesson">
								<div class="lessonTitle">Lesson 21: Vectors of Objects</div><br />
								<div class="lessonDescription">This tutorial will teach you how to allow the user to create as many objects as they want using vectors.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-22/"><div class="lesson">
								<div class="lessonTitle">Lesson 22: Random Numbers and Static Variables</div><br />
								<div class="lessonDescription">This tutorial will cover how to implement random numbers as well as some intuition on static variables and how non-static variables are destroyed.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-23/"><div class="lesson">
								<div class="lessonTitle">Lesson 23: Static Member Variables</div><br />
								<div class="lessonDescription">This tutorial will teach you how to use static member variables in a class and how to modify them with constructors and destructors.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-24/"><div class="lesson">
								<div class="lessonTitle">Lesson 24: Inheritance</div><br />
								<div class="lessonDescription">This tutorial will cover how to use inheritance to inherit variables and/or functions from another class. Derived/Child classes inherit from the base/parent class. We will also learn how to use the protected access modifier.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-25/"><div class="lesson">
								<div class="lessonTitle">Lesson 25: Pointers</div><br />
								<div class="lessonDescription">This tutorial will cover how to create pointers, direct a pointer to a specific address, return the value, return the address of the value, and return the address of the pointer.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-26/"><div class="lesson">
								<div class="lessonTitle">Lesson 26: Dynamic Memory Allocation</div><br />
								<div class="lessonDescription">This tutorial will cover how to dynamically create variables as well as use them as normal variables.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-27/"><div class="lesson">
								<div class="lessonTitle">Lesson 27: Dynamic Arrays</div><br />
								<div class="lessonDescription">This tutorial will cover hot to dynamically create arrays as well as deallocate variables and arrays from memory (heap).</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-28/"><div class="lesson">
								<div class="lessonTitle">Lesson 28: Recursion</div><br />
								<div class="lessonDescription">This tutorial will cover how to use recursive statements in your program. It will also illustrate the difference between iteration and recursion as well as explain when one should be used over the other. We will also be introduced to stacks.</div>
							</div></a><br />
							<a href="http://www.programminghelp.org/lib/c++/lesson-29/"><div class="lesson">
								<div class="lessonTitle">Lesson 29: Reading and Writing to Files - fstream</div><br />
								<div class="lessonDescription">This tutorial will cover how to use the fstream library and read and write to files on your computer. It will show you some other techniques as well.</div>
							</div></a><br />
						
						</div>
					</div>
					
					<!--<div id="tabs-level2">
						<div class="tools">
							
						</div>
					</div>-->
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
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/sections/footer.php"; ?>

</body>

</html>
