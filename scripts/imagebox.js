$(document).ready(function()
{
	$('#slideshow').cycle({
		fx: 'fade',
		pause: 1,
		prev: '#prev',
		next: '#next'
		});
});

$(function() {$('.link').hover(
        
    function() {
        
        $('.link').addClass('hoverLink');
        
    }, function() {
        
        $('.link').removeClass('hoverLink');

    });
});