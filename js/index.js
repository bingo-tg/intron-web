$(function() {
	$("#logo").hover(function(){
		$(this).stop().animate({top: '-15px',}, {duration: 1000, easing: 'easeOutElastic',});
	}, function(){
		$(this).stop().animate({top: '-20px',}, {duration: 1000, easing: 'easeOutElastic',});
	});
});

$(function() {
	$("#header li").hover(function() {
		$(this).children('ul').fadeIn({duration: 200,});
		$(this).find('img.on').animate({opacity: 1}, {duration: 200,});
		$(this).find('img.off').animate({opacity: 0}, {duration: 200,});
	}, function() {
		$(this).children('ul').hide();
		$(this).find('img.on').animate({opacity: 0}, {duration: 0,});
		$(this).find('img.off').animate({opacity: 1}, {duration: 0,});
	});
});

$(function() {
	$("#footer li").hover(function() {
		$(this).find('img.on').animate({opacity: 1}, {duration: 200,});
		$(this).find('img.off').animate({opacity: 0}, {duration: 200,});
	}, function() {
		$(this).find('img.on').animate({opacity: 0}, {duration: 0,});
		$(this).find('img.off').animate({opacity: 1}, {duration: 0,});
	});
});

/*$(function() {
	setTimeout(function() {
		$("#panel1").fadeIn({duration: 3000, queue: false,});
	}, 0);
});

$(function() {
	setTimeout(function() {
		$("#panel2").fadeIn({duration: 3000, queue: false,});
	}, 100);
});

$(function() {
	setTimeout(function() {
		$("#panel3").fadeIn({duration: 3000, queue: false,});
	}, 200);
});

$(function() {
	setTimeout(function() {
		$("#panel4").fadeIn({duration: 3000, queue: false,});
	}, 300);
});*/

$(function() {
	setTimeout(function() {
		$("#panel1").fadeIn({duration: 3000, queue: false,}).animate({left: '0px',}, {duration: 1500, queue: false,});
	}, 0);
});

$(function() {
	setTimeout(function() {
		$("#panel2").fadeIn({duration: 3000, queue: false,}).animate({left: '0px',}, {duration: 1500, queue: false,});
	}, 100);
});

$(function() {
	setTimeout(function() {
		$("#panel3").fadeIn({duration: 3000, queue: false,}).animate({left: '0px',}, {duration: 1500, queue: false,});
	}, 200);
});

$(function() {
	setTimeout(function() {
		$("#panel4").fadeIn({duration: 3000, queue: false,}).animate({left: '0px',}, {duration: 1500, queue: false,});
	}, 300);
});

$(function() {
	$("#keywords span").each(function(){
		var txt = $(this).text();
		var width = $(this).width() + 48;
		$(this).after('<span class="normal" style="margin-left:-' + width + 'px;">' + txt + '</span>');
	});
	$(".normal").hover(function(){
		$(this).stop().animate({opacity: 0.0,}, {duration: 1000,});
	}, function(){
		$(this).stop().animate({opacity: 1.0,}, {duration: 1000,});
	});
});

$(function() {
	$(".new").each(function(){
		$(this).prepend('<img class="newimg" src="img/new.png">');
	});
});

$(function() {
	$('#slider').cycle({
		fx: 'scrollHorz',
		speed: 200,
		pager: "#pager",
		next: "#next",
		prev: "#prev"
	});
});

$(function() {
	$('#slider2').cycle({
		fx: 'scrollHorz',
		speed: 200,
		next: "#next",
		prev: "#prev"
	});
});

$(function() {
	$(".fancybox").fancybox({
		padding: 0,
		prevEffect: 'none',
		nextEffect: 'none',
		loop: false
	});
});