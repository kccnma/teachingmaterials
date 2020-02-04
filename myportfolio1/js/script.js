$( document ).ready(function() {

    //TOGGLE MENU NAV
    $(".menu-button").click(function(){
      $(this).toggleClass("expanded");
    });
    
    //TOGGLE ACCORDIAN
    $(".accordian h4").click(function(){
      $(this).parent().toggleClass("open");
    });
    
    //MIXITUP
    $(function(){
        $('.mixcontainer').mixItUp();
    });
    
});