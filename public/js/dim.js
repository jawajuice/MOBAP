
$(document).ready(function(){
    $( "#date-change" ).focus(function() {
      $(".dim").show();
    });

    $( "#date-change" ).focusout(function() {
      $(".dim").hide();
    });

    $( "#date-change" ).change(function() {
      $(".dim").hide();
    });
});


$(document).ready(function(){

    $( "#hobi-select" ).click(function() {
      $(".dim").toggle();
    });
});