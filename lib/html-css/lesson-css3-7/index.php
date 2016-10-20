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

	<title>CSS | Lesson 7</title>
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
				<div class="prev vidLink"><a href="http://www.programminghelp.org/lib/html-css/lesson-css3-6/"><span class="vidLinkText">PREV</span></a></div>
				<div class="videoTitle vidLink"><a href="http://www.youtube.com/watch?v=1aU6_YV5vfw"><span class="vidLinkText">7 - Difference Between Class and ID</span></a></div>
				<div class="next vidLink"><a href="http://www.programminghelp.org/lib/html-css/lesson-css3-8/"><span class="vidLinkText">NEXT</span></a></div>
			</div>
			<div class="videoContainer">
				<iframe width="640" height="360" src="//www.youtube.com/embed/1aU6_YV5vfw" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="videoAssignments">
				<div class="assignmentsTitleContainer"><span class="assignmentsTitle">Assignments</span></div>
				<div class="assignments">No files.</div>
			</div>
			<div class="videoDescription">
				<p class="descriptionTitle">Description</p>
				<p class="description">This tutorial will cover when you should use a class and when to use an ID in XHTML/CSS.</p>
			</div>
		</div>
	</div>
	
</div>

<!-- Footer -->
<?php include "/home/users/web/b1812/ipg.programminghelporg1/files/sections/footer.php"; ?>

</body>

</html>
