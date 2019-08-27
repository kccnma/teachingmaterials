document.addEventListener('DOMContentLoaded', function() {

    //TOGGLE MENU NAV
    var sitenav = document.querySelector('.site-header .site-nav');
    var sitenavmenubutton = document.querySelector('.site-header .site-nav .menu-button');
    sitenavmenubutton.onclick = function(){
        sitenav.classList.toggle("expanded");
    }
    

    
});