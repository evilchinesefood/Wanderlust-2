function makeSpark(){
	var numb = Math.ceil(Math.random() * 5);
	$newdiv = $('<div/>').addClass( "spark" + numb );
	
	var posx = (Math.random() * ($('#parchment').width())).toFixed();
	var posy = (Math.random() * ($('#parchment').height())).toFixed();
	
	$newdiv.css({
		'width':'32px',
		'height':'32px',
		'position':'absolute',
		'left':posx+'px',
		'top':posy+'px',
		'display':'none'
	}).appendTo( '#parchment' ).fadeIn(400).delay(Math.ceil(Math.random() * 1000)).fadeOut(400, function(){
	   $(this).remove();
	   makeSpark();
	}); 
};
	
$(document).ready(function () {
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
	setTimeout(makeSpark(), Math.ceil(Math.random() * 500));
});