function sender(funcSuc, funcErr, params)
{
	$.ajax({
		type: 'GET',
		url: "handler.php",
		data: $.param( params ),
		cache: false,
		success: function(response)
		{
			try
			{
				funcSuc(response);
			}
			catch (e)
			{
				alert('Unexpected error: ' + response);
			}
			
		},
		error: function()
		{
			funcErr();
		}
	});
}


/* ----------
 * Функция плавного спуска скролла
 * ------------------------------------------ */

function goId(getId) {
	$(document).scrollTo('#' + getId, {
		axis:'y', 
		offset: { top: -60 },
		duration: 600,
		easing: 'easeInOutCubic'
	});	
}



/* ----------
 * Авторесайзинг
 * ------------------------------------------ */

$(document).ready(function(){
	
	resizeElementsByWidthBody();
	
	var currBodyW = $('body').width();
	
	setInterval(function(){
		
		if ( currBodyW != $('body').width() )
		{
			currBodyW = $('body').width();
			
			resizeElementsByWidthBody();

			releftElementsByWidthBody();
		}
		
	}, 100);

	resizeElementsByWidthBody();

	releftElementsByWidthBody();
});

function resizeElementsByWidthBody() {
	var documentSize = $('body').width() > 1920 ? 1920 : $('body').width();
	var newSizeLeft = (documentSize-980)/2;

	$('div[class*=auto-resize]').css('width', documentSize+'px');
	$('img[class*=auto-resize]').css('width', documentSize+'px');

	$('.for-autoresize-bot-bg style').eq(0).html(".bot_bg:after { width: "+documentSize+"px; }");
}

function releftElementsByWidthBody() {
	var documentSize = $('body').width() > 1920 ? 1920 : $('body').width();
	var newSizeLeft = (documentSize-980)/2;

	if ( documentSize-1024 <= 0 ) { newSizeLeft = '0'; }
	$('div[class*=auto-resize-left]').css('marginLeft', '-'+newSizeLeft+'px');
	$('img[class*=auto-resize-left]').css('marginLeft', '-'+newSizeLeft+'px');

	$('.for-autoresize-bot-bg style').eq(1).html(".bot_bg:after { margin-left: -"+newSizeLeft+"px; }");
}


/* ----------
 * Слайдер
 * ------------------------------------------ */

// slider = {

// 	imgCount : 0,

// 	currImg : 0,

// 	speed: 1200, // скорость анимации

// 	delay: 4500, // задержка

// 	init : function() {

// 		slider.imgCount = $('.slider .inner .img').length-1;

// 		setInterval(function(){

// 			if ( slider.currImg > slider.imgCount )
// 			{
// 				slider.currImg = 0;
// 			}

// 			$('.slider .inner').stop();
// 			$('.slider .inner').animate({
// 				marginLeft : '-' + (slider.currImg*100) + '%'
// 			}, slider.speed, 'easeInOutQuint');

// 			slider.currImg++;

// 		},	slider.delay);
// 	},

// }

slider2 = {

	animateStatus: false,

	pageCount : 2,

	currPage : 0,

	speed: 1200, // скорость анимации

	delay: 4500, // задержка

	effectStop: false,

	init : function() {

		$('.sld-partners-btn div').hover(
			function(){
				slider2.effectStop = true;
			},
			function(){
				slider2.effectStop = false;
			}
		);

		setInterval(function(){

			if ( slider2.effectStop ) { return; }

			if ( slider2.currPage > slider2.pageCount-1 )
			{
				slider2.currPage = 0;
			}

			//$('.partners-img .inner').stop();
			$('.partners-img .inner').animate({
				marginLeft : '-' + (slider2.currPage*1050) + 'px'
			}, slider2.speed, 'easeInOutQuint');

			slider2.changeBtn(slider2.currPage);

			slider2.currPage++;

		},	slider2.delay);
	},

	changeBtn : function(getId) {
		$(".sld-partners-btn div").attr('class', '');
		$(".sld-partners-btn div").eq(getId).attr('class', 'sld-partners-btn-active');
	},

	changeSlide : function(getId)
	{
		if ( slider2.animateStatus ) { return; }

		slider2.animateStatus = true;

		$('.partners-img .inner').stop();
		$('.partners-img .inner').animate({
			marginLeft : '-' + (getId*1050) + 'px'
		}, slider2.speed, 'easeInOutQuint', function() { slider2.animateStatus = false; });

		slider2.changeBtn(getId);
	},

}

$(document).ready(function(){

 	//slider.init();
 	slider2.init();

 });




$(window).scroll(function(){
	$('.menu2').stop();

	if ( $(window).scrollTop() >= 280 )
	{
		$('.menu2').css('marginTop', '0px');
	}
	else if ( $(window).scrollTop() <= 280 )
	{
		$('.menu2').css('marginTop', '-80px');
	}
});




/* ----------
 * Функция плавного спуска скролла
 * ------------------------------------------ */

function goId(event, getId) {
	event.preventDefault();
	$(document).scrollTo('#' + getId, {
		axis:'y', 
		offset: { top: -80 },
		duration: 600,
		easing: 'easeInOutCubic'
	});	
}