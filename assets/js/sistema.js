// Obtém o elemento de link de saída pelo ID 'sair-link'
var sairLink = document.getElementById('sair-link');

// Adiciona um ouvinte de clique ao link de saída
sairLink.addEventListener('click', function() {
    // Envia uma solicitação AJAX para '../config.php' com uma ação 'sair'
    $.ajax({
        url: '../config.php',
        method: 'POST',
        data: { action: 'sair' }, // Envia uma ação 'sair' como parte da solicitação
        success: function(data) {
            // Redireciona para a página em branco após o logout
            window.location.href = '';
        }
    });
});

// Efeito de animação ativa para navegação responsiva
function test() {
    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
        "top": itemPosNewAnimTop.top + "px",
        "left": itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click", "li", function(e) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
    });
}

$(document).ready(function() {
    setTimeout(function() {
        test();
    });
});

$(window).on('resize', function() {
    setTimeout(function() {
        test();
    }, 500);
});

$(".navbar-toggler").click(function() {
    $(".navbar-collapse").slideToggle(300);
    setTimeout(function() {
        test();
    });
});

// Adiciona a classe ativa em outro link de página
jQuery(document).ready(function($) {
    // Obtém o caminho atual e encontra o link de destino
    var path = window.location.pathname.split("/").pop();

    // Considera a página inicial com caminho vazio
    if (path == '') {
        path = 'index.html';
    }

    var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
    // Adiciona a classe ativa ao link de destino
    target.parent().addClass('active');
});
