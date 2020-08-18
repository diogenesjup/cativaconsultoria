// MENU FIXO NAS PÁGINAS INTERNA
jQuery(document).ready(function ($) {
  var entreiAnimateNumber = 0;
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
     if (scroll < 400){
         $("header.fixo").css("top","-120%");
     }
     if (scroll > 400){
         $("header.fixo").css("top","0px");
     }
  });
});


// ABRIR OU FECHAR MENU MOBILE
var controleMenu = 0;
function abrirFecharMenuMobile(){
  
  if(controleMenu==0){
    $(".area-mobile").css("top","69px");
    controleMenu = 1;
  }else{
    $(".area-mobile").css("top","-169%");
    controleMenu = 0;
  }

}




// FUNÇÕES PARA DIMINUIR OU AUMENTAR O TAMANHO DA FONTE DO CONTEÚDO DO TEXTO
var tamanhoFonte = 18;
var tamanhoLinha = tamanhoFonte + 10;

var tamanhoTitulo = 24;

function diminuirFonte(){
    console.log("%c INICIANDO FUNÇÃO PARA DIMINUIR TAMANHO DA FONTE","background:#D62261;color:#fff;");
    tamanhoFonte = tamanhoFonte - 2;
    tamanhoTitulo = tamanhoTitulo-2;
    if(tamanhoFonte==0){
      tamanhoFonte = 2;
    }
    tamanhoLinha = tamanhoFonte + 10;
    $("article p").css("font-size",tamanhoFonte+"px");
    $("article h3").css("font-size",tamanhoTitulo+"px");
    $("article ul").css("font-size",tamanhoFonte+"px");
    $("article ul li").css("font-size",tamanhoFonte+"px");
    $("article ol").css("font-size",tamanhoFonte+"px");
    $("article blockquote").css("font-size",tamanhoFonte+"px");
    $("article p").css("line-height",tamanhoLinha+"px");
    $("article ul").css("line-height",tamanhoLinha+"px");
    $("article ul li").css("line-height",tamanhoLinha+"px");
    $("article ol").css("line-height",tamanhoLinha+"px");
    $("article blockquote").css("line-height",tamanhoLinha+"px");
}




function aumentarFonte(){
  console.log("%c INICIANDO FUNÇÃO PARA AUMENTAR TAMANHO DA FONTE","background:#D62261;color:#fff;");
  tamanhoFonte = tamanhoFonte + 2;
  tamanhoTitulo = tamanhoTitulo+2;
    if(tamanhoFonte==60){
      tamanhoFonte = 58;
    }
    tamanhoLinha = tamanhoFonte + 10;

    $("article h3").css("font-size",tamanhoTitulo+"px");
    $("article p").css("font-size",tamanhoFonte+"px");
    $("article ul").css("font-size",tamanhoFonte+"px");
    $("article ul li").css("font-size",tamanhoFonte+"px");
    $("article ol").css("font-size",tamanhoFonte+"px");
    $("article blockquote").css("font-size",tamanhoFonte+"px");
    $("article p").css("line-height",tamanhoLinha+"px");
    $("article ul").css("line-height",tamanhoLinha+"px");
    $("article ul li").css("line-height",tamanhoLinha+"px");
    $("article ol").css("line-height",tamanhoLinha+"px");
    $("article blockquote").css("line-height",tamanhoLinha+"px");
}






// VÍDEO BANNER CONTAINER
  $( document ).ready(function() {
    scaleVideoContainer();
    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');
    $(window).on('resize', function() {
      scaleVideoContainer();
      scaleBannerVideoSize('.video-container .poster img');
      scaleBannerVideoSize('.video-container .filter');
      scaleBannerVideoSize('.video-container video');
    });
  });
  function scaleVideoContainer() {
    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);
  }
  function initBannerVideoSize(element){
    $(element).each(function(){
      $(this).data('height', $(this).height());
      $(this).data('width', $(this).width());
    });
    scaleBannerVideoSize(element);
  }
  function scaleBannerVideoSize(element) {
    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;
    // console.log(windowHeight);
    $(element).each(function(){
      var videoAspectRatio = $(this).data('height')/$(this).data('width');
      $(this).width(windowWidth);
      if(windowWidth < 1000){
          videoHeight = windowHeight;
          videoWidth = videoHeight / videoAspectRatio;
          $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
          $(this).width(videoWidth).height(videoHeight);
      }
      $('.homepage-hero-module .video-container video').addClass('fadeIn animated');
    });
  }