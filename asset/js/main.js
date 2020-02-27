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

var switchButton 			= document.querySelector('.switch-button');
var switchBtnRight 			= document.querySelector('.switch-button-case.right');
var switchBtnLeft 			= document.querySelector('.switch-button-case.left');
var activeSwitch 			= document.querySelector('.active');

function switchLeft(){
	switchBtnRight.classList.remove('active-case');
	switchBtnLeft.classList.add('active-case');
    activeSwitch.style.left 						= '0%';
}

function switchRight(){
	switchBtnRight.classList.add('active-case');
	switchBtnLeft.classList.remove('active-case');
    activeSwitch.style.left 						= '50%';
}

switchBtnLeft.addEventListener('click', function(){
	switchLeft();
}, false);

switchBtnRight.addEventListener('click', function(){
	switchRight();
}, false);



$(document).ready(function(){
    $(".right").click(function(){
        $("#page1").fadeOut(1000);
    });
    $(".right").click(function(){
        $("#page2").fadeIn(4000);
    });
    $(".left").click(function(){
        $("#page2").fadeOut(1000);
    });
    $(".left").click(function(){
        $("#page1").fadeIn(4000);
    });
});
