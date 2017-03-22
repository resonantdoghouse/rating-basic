
// Hover state highlighting
$('.bcw-star-rating .fa-star').hover(
  function(){
    $('.bcw-star-rating .fa-star').removeClass('hover');
    $(this).prevAll('.fa-star').addBack().addClass('hover');
  },
  function(){
    $('.bcw-star-rating .fa-star').removeClass('hover');
  }
);

// Active state when star clicked
$('.bcw-star-rating .fa-star').click(function () {
    $('.bcw-star-rating .fa-star').removeClass('active');
    $(this).prevAll('.fa-star').addBack().addClass('active');

    var rating = $(this).attr( "data-rating" );

    console.log(rating);
});

