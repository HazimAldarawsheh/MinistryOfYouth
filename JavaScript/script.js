var $sameer =$('.js--body');

var $test = $('.test');

$sameer.waypoint(function(dir) {
    if (dir == 'down') {
        $test.addClass('sticky');
        $test.addClass('navAn');
        $test.removeClass('cool-link');
        console.log('down');
    } else {
        $test.removeClass('sticky');
        console.log('up');
        $test.removeClass('navAn')
    }

}, { offset: '30px' });


