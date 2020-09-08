var $sameer =$('.js--body');

var $test = $('.test');
var $topright=$('.top-right')

$sameer.waypoint(function(dir) {
    if (dir == 'down') {
        $test.addClass('sticky');
        $test.addClass('navAn');
        $topright.removeClass('cool-linkN');
    } else {
        $test.removeClass('sticky');
        $test.removeClass('navAn');
        $topright.addClass('cool-linkN');
    }

}, { offset: '100px' });


