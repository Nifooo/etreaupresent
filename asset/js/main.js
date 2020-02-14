function openNav() {
    document.getElementById("myNav").style.width = "100%";
    $('.menuBurger').css('display', "none")
    setTimeout(function () {
        $('.overlay-content').css('display', "block")
    }, 100);
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    setTimeout(function () {
        $('.menuBurger').css('display', "inline-block")
    },300);
    setTimeout(function () {
        $('.overlay-content').css('display', "none")
    }, 200);


}

function burgerHover() {
    $('.menuBurger').css('transform', 'rotate(360deg)')
    $('.menuBurger').css('transition', '0.5s')

}
function burgerUnhover() {
    $('.menuBurger').css('transform', 'rotate(0deg)')
    $('.menuBurger').css('transition', '0.5s')
}




var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-66px";
    }
    prevScrollpos = currentScrollPos;
}

var mass = $('.mass')

function effectMassage() {
    mass.css('width', '70%')  
    mass.css('margin-left', '15%')
    mass.css('line-height', '16px') 
}

function effectMassageInverse() {
    mass.css('width', '80%')  
    mass.css('margin-left', '10%')
    mass.css('line-height', '20px')  
}


$(document).ready(function(){
    $("a").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 600, function(){

                window.location.hash = hash;
            });
        }
    });
});

