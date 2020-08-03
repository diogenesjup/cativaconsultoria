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



