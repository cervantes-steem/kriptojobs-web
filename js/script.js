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


