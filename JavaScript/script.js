var $sameer =$('.js--body');

var $test = $('.test');

$sameer.waypoint(function(dir) {
    if (dir == 'down') {
        $test.addClass('sticky');
        console.log('down');
    } else {
        $test.removeClass('sticky');
        console.log('up');
    }

}, { offset: '30px' });
