

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
    openEffect  : 'none',
    closeEffect : 'none'
  });
  $(".mostrar").fancybox({
    'autoScale'     : false,
    'transitionIn'    : 'none',
    'transitionOut'   : 'none',
    'width'       : 800,
    'height'      : 800,
    'type'        : 'iframe'
  });
});


