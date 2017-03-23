
// Hover state highlighting
$('.bcw-star-rating .star-label').hover(
  function(){
    $('.bcw-star-rating .star-label').removeClass('hover');
    $(this).prevAll('.star-label').addBack().addClass('hover');
  },
  function(){
    $('.bcw-star-rating .star-label').removeClass('hover');
  }
);

// Active state when star clicked
$('.bcw-star-rating .star-label').click(function () {
    $('.bcw-star-rating .star-label').removeClass('active');
    $(this).prevAll('.star-label').addBack().addClass('active');

    rating = $('input', this).val();

    console.log(rating);
});


$("input[type='text'], textarea").on("keyup", function(){
    if($(this).val() != "" && $("textarea").val() != "" && $("input[name='rating']").is(":checked") == true){
        $("button[type='submit']").removeAttr("disabled");
    }
});

$("input[name='rating']").on("change", function(){
    if($(this).val() != "" && $("textarea").val() != "" && $("input[name='rating']").is(":checked") == true){
        $("button[type='submit']").removeAttr("disabled");
    }
});

console.log('updated 2');


