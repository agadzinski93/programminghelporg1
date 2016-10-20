<!DOCTYPE html>
	
<html lang="en">

<head>
<meta charset="utf-8">

<!-- Check IP Addresses -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/blockedIP.php"; ?>

<!-- Browser Check (Primary Check) -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/browserCheck.php"; ?>

<!-- Browser Check (Video Page) -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/tutorialCheck.php"; ?>

<!-- JS Files -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/jsFiles.php"; ?>

<!-- JS Off -->
<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/jsOff.php"; ?>

	<title>C++ | Lesson 1</title>
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
	
	<!-- Ad Code -->
	<?php require_once "/home/users/web/b1812/ipg.programminghelporg1/files/adAbove.php"; ?>
	
		<div class="mainVideoContainer">
			<div class="videoTitleContainer">
				<div class="prev vidLink"></div>
				<div class="videoTitle vidLink"><a href="http://www.youtube.com/watch?v=xfgcEjCd9as"><span class="vidLinkText">1 - Introduction to C++ 2010</span></a></div>
				<div class="next vidLink"><a href="http://www.programminghelp.org/lib/c++/lesson-2/"><span class="vidLinkText">NEXT</span></a></div>
			</div>
			<div class="videoContainer">
				<iframe width="640" height="360" src="//www.youtube.com/embed/xfgcEjCd9as" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="videoAssignments">
				<div class="assignmentsTitleContainer"><span class="assignmentsTitle">Assignments</span></div>
				<div class="assignments">No files.</div>
			</div>
			<div class="videoDescription">
				<p class="descriptionTitle">Description</p>
				<p class="description">This tutorial pretty much shows you how to set up Microsoft Visual Studio 2010 and how to properly set up your code that we will be using in every tutorial from here on out.<br /><br /><span class="descriptionLinks">Download - <a href="http://www.microsoft.com/visualstudio/en-us/products/2010-editions/visual-cpp-express">Visual C++ 2010 Express</a></span></p>
			</div>
		</div>
	</div>
	
</div>

<!-- Footer -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/sections/footer.php"; ?>

</body>

</html>
