var $sameer =$('.js--body');
var $burger =$('.burger-menu');
var $navjq = $('.nav-jq');
var $topright=$('.top-right')

$sameer.waypoint(function(dir) {
    if (dir == 'down') {
        $navjq.addClass('sticky');
        $navjq.addClass('navAn');
        $topright.removeClass('cool-linkN');
        $burger.removeClass('burger');
        $burger.removeClass('shadow-5');

    } else {
        $navjq.removeClass('sticky');
        $navjq.removeClass('navAn');
        $topright.addClass('cool-linkN');
        $burger.addClass('burger');
        $burger.addClass('shadow-5');


    }

}, { offset: '100px' });





function burgerMenu() {
    var menu = document.getElementById('burgerDis');
    if (menu.style.display === "block") {
     menu.style.display = "none";
    } else {
     menu.style.display = "block";
     menu.classList.add('topnav');
    }
  }