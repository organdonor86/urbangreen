

$('#menu-item-227').hover(function() {
  $(this).find('.sub-menu').stop(true, true).fadeIn(300);
}, function() {
  $(this).find('.sub-menu').stop(true, true).fadeOut(700);
});


// Stop link for services page being followed
$('#menu-item-227 a').first().click(function(event) {
    event.preventDefault();
});
//
// $('#menu-item-227 ul').hover(function(event) {
//     event.preventDefault();
// });



// When mouse over nav link fade nav text to black
//   If has hidden sub menu fade in sub menu
