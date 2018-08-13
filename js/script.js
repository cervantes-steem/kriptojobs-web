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