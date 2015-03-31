
$(document).ready(function(){
	$(".ejemplo_1").fancybox({
		helpers: {
			title : {
				type : 'float'
			}
		}
	});
	$(".ejemplo_2").fancybox({
		helpers: {
			title : {
				type : 'float'
			}
		}
	});
	$(".ejemplo_3").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	$(".actualizar").fancybox({
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'width'				: 680,
		'height'			: 450,
		'type'				: 'iframe'
	});
});
