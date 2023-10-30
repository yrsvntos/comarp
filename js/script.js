document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('header-scroll').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.header-menu').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('header-scroll').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 

/* ------- Tooltip script ------- */

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

/* -------- Contagem dos números --------- */

$('.counter-count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 5000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

/* ------- Script das Datas ------- */
const novaData = new Date('23 Oct 23 23:36:59').getTime()

const contagem = setInterval(() =>{
  
    const data = new Date().getTime()
    const diff = novaData - data

    // const mes =  Math.floor((diff % (1000 * 60 * 60 * 24 * (365.25 / 12) * 365)) / (1000 * 60 * 60 * 24 * (365.25 / 12)))
    const dias = Math.floor(diff % (1000 * 60 * 60 * 24 * (365.25 / 12) * 365) / (1000 * 60 * 60 * 24))
    const horas =  Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60))
    const minutos = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60))
    const segundos = Math.floor((diff % (1000 * 60)) / 1000)

    document.querySelector(".segundos").innerHTML = segundos < 10 ? '0' + segundos : segundos;
    document.querySelector(".minutos").innerHTML = minutos < 10 ? '0' + minutos : minutos;
    document.querySelector(".horas").innerHTML = horas < 10 ? '0' + horas : horas;
    document.querySelector(".dias").innerHTML = dias < 10 ? '0' + dias : dias;
    // document.querySelector(".mes").innerHTML = mes < 10 ? '0' + mes : mes

    if(diff < 0){
        clearInterval(contagem)
        document.querySelector(".segundos").innerHTML = "00";
        document.querySelector(".minutos").innerHTML = "00";
        document.querySelector(".horas").innerHTML = "00";
        document.querySelector(".dias").innerHTML = "00";
    }

}, 1000)


/* ------- Carousel script ------- */
//Clients owlCarousel
$('.clients .owl-carousel').owlCarousel({
    loop: true
    , margin: 30
    , mouseDrag: true
    , autoplay: true
    , dots: false
    , responsiveClass: true
    , responsive: {
        0: {
            margin: 10
            , items: 3
        }
        , 600: {
            items: 3
        }
        , 1000: {
            items: 7
        }
    }
});

// Testemunhos
$('.testemunhos .owl-carousel').owlCarousel({
    loop: true
    , margin: 30
    , mouseDrag: true
    , autoplay: true
    , dots: true
    , responsiveClass: true
    , responsive: {
        0: {
            items: 1
        }
        , 600: {
            items: 1
        }
        , 1000: {
            items: 1
        }
    }
});

$("#preloader").fadeOut(700);
$(".preloader-bg").delay(600).fadeOut(700);
    
var wind = $(window);

/* ------- BacktoTop ------- */
//  Scroll back to top
var progressPath = document.querySelector('.progress-wrap path');
var pathLength = progressPath.getTotalLength();
progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
progressPath.style.strokeDashoffset = pathLength;
progressPath.getBoundingClientRect();
progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;
}
updateProgress();
$(window).scroll(updateProgress);
var offset = 150;
var duration = 550;
jQuery(window).on('scroll', function () {
    if (jQuery(this).scrollTop() > offset) {
        jQuery('.progress-wrap').addClass('active-progress');
    } else {
        jQuery('.progress-wrap').removeClass('active-progress');
    }
});
jQuery('.progress-wrap').on('click', function (event) {
    event.preventDefault();
    jQuery('html, body').animate({ scrollTop: 0 }, duration);
    return false;
})

$(document).ready(function() {
    $('#example').DataTable({
        "language": {
          "emptyTable": "Nenhum registro encontrado",
          "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
          "infoEmpty": "Mostrando 0 até 0 de 0 registros",
          "infoFiltered": "(Filtrados de _MAX_ registros)",
          "infoThousands": ".",
          "loadingRecords": "Carregando...",
          "processing": "Processando...",
          "zeroRecords": "Nenhum registro encontrado",
          "search": "Pesquisar",
          "paginate": {
              "next": "Próximo",
              "previous": "Anterior",
              "first": "Primeiro",
              "last": "Último"
          },
          "aria": {
              "sortAscending": ": Ordenar colunas de forma ascendente",
              "sortDescending": ": Ordenar colunas de forma descendente"
          },
           "lengthMenu": "Exibir _MENU_ resultados por página",
        },
        // scrollY: '23vh',
        // scrollCollapse: true,
        // paging: false,
    });
} );

/* ------- Script do botão menu -------- */

$(document).ready(function(){
  
  // Identifica o clique no botão
  $('#botaoMenu').on('click', function(){
    $('#menu').slideToggle();
  });
});

