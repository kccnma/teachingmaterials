document.addEventListener('DOMContentLoaded', function () {

    // REVEAL ON SCROLL
    var revealerpoint = 100;
    window.addEventListener('scroll', reveal);
    reveal();

    function reveal() {
        //console.log("scrolling");
        var revealers = document.querySelectorAll('.revealer');
        for (var i = 0; i < revealers.length; i++) {
            var windowheight = window.innerHeight;
            var revealertop = revealers[i].getBoundingClientRect().top;
            var revealerbottom = revealers[i].getBoundingClientRect().bottom;
            //console.log("revealertop: " + revealertop);
            //console.log("revealerbottom: " + revealerbottom);
            if (revealertop < windowheight - revealerpoint) {
                revealers[i].classList.add('active')
            } else {
                revealers[i].classList.remove('active');
            };
            if (revealerbottom < 0 + revealerpoint) {
                revealers[i].classList.remove('active');
            }
        }
    };

});