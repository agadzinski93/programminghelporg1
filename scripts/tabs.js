$(function() {
$(".tutorialContainer").tabs();
});

$(function() {
$(".lessonContainer").tabs();
});

$(document).ready(function() {
	$('.tutorialList li').click(function() {
		$(this).siblings().removeClass('selected');
		$(this).addClass('selected');
	});
	
	$('.lessonList li').click(function() {
		$(this).siblings().removeClass('selected');
		$(this).addClass('selected');
	});
});