<!DOCTYPE html>
	
<html lang="en">

<head>
<meta charset="utf-8">

<!-- Check IP Addresses -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/blockedIP.php"; ?>

<!-- Browser Check (Primary Check) -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/browserCheck.php"; ?>

<!-- Browser Check (Library Page) -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/libraryCheck.php"; ?>

<!-- JS Files -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/jsFiles.php"; ?>

<!-- JS Off -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/jsOff.php"; ?>

	<title>Programming Help | Free Programming Tutorials Online</title>
</head>

<body>

<div class="header">

<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/headerContainer.php"; ?>
	
</div>

<!-- Primary Navigation -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/primaryNavigation.php"; ?>

<!-- Banner -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/banners/mainBanner.php"; ?>

<div class="mainBody">

	<div class="mainBodyContainer">
	
		<div class="libraryTitleContainer">Library</div>
		
		<div class="languages">
			<div class="language" >
				<span class="languageTitle">C++</span>
				<span class="languageDescription">Learn the fundamentals of the C++ programming language including variables, logic, and object-oriented programming. These tutorials assume you have no background programming experience.</span>
				<a href="http://www.programminghelp.org/lib/c++/"><div class="languageWatch"><span class="languageWatchText">Watch</span></div></a>
			</div>
		
			<div class="language">
				<span class="languageTitle">C#</span>
				<span class="languageDescription">Learn the C# programming language and the use of GUI applications. You will use GUI applications to apply processing techniques. These tutorials are similar to VB.</span>
				<a href="http://www.programminghelp.org/lib/c-sharp/"><div class="languageWatch"><span class="languageWatchText">Watch</span></div></a>
			</div>
		
			<div class="language">
				<span class="languageTitle">HTML/CSS</span>
				<span class="languageDescription">Learn basic web development by setting up a standard web page document and adding text, links, images, lists, and more. You will also learn to style your web page using CSS. Aesthetics will not be covered.</span>
				<a href="http://www.programminghelp.org/lib/html-css/"><div class="languageWatch"><span class="languageWatchText">Watch</span></div></a>
			</div>
		
			<div class="language">
				<span class="languageTitle">JavaScript</span>
				<span class="languageDescription">Learn basic JavaScript as a programming language. These tutorials assume you have knowledge in some version of (X)HTML and CSS.</span>
				<a href="http://www.programminghelp.org/lib/javascript/"><div class="languageWatch"><span class="languageWatchText">Watch</span></div></a>
			</div>
		
			<div class="language">
				<span class="languageTitle">Visual Basic</span>
				<span class="languageDescription">Learn the VB programming language and the use of GUI applications. You will use GUI applications to apply processing techniques. These tutorials are similar to C#.</span>
				<a href="http://www.programminghelp.org/lib/vb/"><div class="languageWatch"><span class="languageWatchText">Watch</span></div></a>
			</div>
		</div>
		
	</div>
	
</div>

<!-- Footer -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/sections/footer.php"; ?>

</body>

</html>
