$('.center-slick').slick({
  centerMode: true,
  arrows:false,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('#sandbox-container .time.date').datepicker({
    startView: 2,
    language: "es",
    multidate: false,
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true,
    
});


var editor = new wysihtml5.Editor("some-textarea", { // id of textarea element
  toolbar:      "wysihtml5-toolbar", // id of toolbar element
  parserRules:  wysihtmlParserRules // defined in parser rules set 
});





/* Elementos que clonan el html */
$('.wrapper').on('click', '.remove', function() {
  $('.remove').closest('.wrapper').find('.element').not(':first').last().remove();
});
$('.wrapper').on('click', '.clone', function() {
  $('.clone').closest('.wrapper').find('.element').first().clone().appendTo('.results');
   $('.clone').closest('.wrapper').find('.clone').not(':first').last().remove();
});
var editor = new wysihtml5.Editor("some-textarea2", { // id of textarea element
  toolbar:      "wysihtml5-toolbar2", // id of toolbar element
  parserRules:  wysihtmlParserRules // defined in parser rules set 
});

$('#rangofechasestudio .time-daterange').datepicker({
    startView: 2,
    minViewMode: 1,
    clearBtn: true,
    language: "es",
    autoclose: true,
    toggleActive: true
});


/* Fin Elementos que se deben clonar */

/* Elementos que clonan el html */
$('.wrapper-experiencia').on('click', '.remove-experiencia', function() {
  $('.remove-experiencia').closest('.wrapper-experiencia').find('.element-experiencia').not(':first').last().remove();
});
$('.wrapper-experiencia').on('click', '.clone-experiencia', function() {
  $('.clone-experiencia').closest('.wrapper-experiencia').find('.element-experiencia').first().clone().appendTo('.results-experiencia');
  $('.clone-experiencia').closest('.wrapper-experiencia').find('.clone-experiencia').not(':first').last().remove();
});
var editor = new wysihtml5.Editor("some-textarea-experiencia", { // id of textarea element
  toolbar:      "wysihtml5-toolbar-experiencia", // id of toolbar element
  parserRules:  wysihtmlParserRules // defined in parser rules set 
});

$('#rangofechasestudio-experiencia .time-daterange').datepicker({
    startView: 2,
    minViewMode: 1,
    clearBtn: true,
    language: "es",
    autoclose: true,
    toggleActive: true
});


/* Fin Elementos que se deben clonar */


$('.wrapper-idioma').on('click', '.remove-idioma', function() {
  $('.remove-idioma').closest('.wrapper-idioma').find('.element-idioma').not(':first').last().remove();
});
$('.wrapper-idioma').on('click', '.clone-idioma', function() {
  $('.clone-idioma').closest('.wrapper-idioma').find('.element-idioma').first().clone().appendTo('.results-idioma');
  $('.clone-idioma').closest('.wrapper-idioma').find('.clone-idioma').not(':first').last().remove();
});

$('.wrapper-habilidades').on('click', '.remove-habilidades', function() {
  $('.remove-habilidades').closest('.wrapper-habilidades').find('.element-habilidades').not(':first').last().remove();
});
$('.wrapper-habilidades').on('click', '.clone-habilidades', function() {
  $('.clone-habilidades').closest('.wrapper-habilidades').find('.element-habilidades').first().clone().appendTo('.results-habilidades');
  $('.clone-habilidades').closest('.wrapper-habilidades').find('.clone-habilidades').not(':first').last().remove();
});

    