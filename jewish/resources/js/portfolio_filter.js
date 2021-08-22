$(document).ready(function() {

  $('.filter_isotope').isotope({
    itemSelector: '.filter_isotope__block'
  });

  $('#filters a').click(function(){

    $('#filters a').removeClass('current');
    $(this).addClass('current');
    var selector = $(this).attr('data-filter');

    $('.filter_isotope').isotope({
      filter: selector,
      animationOptions: {
        duration: 1000,
        easing: 'easeOutQuart',
        queue: false
      }
    });
    return false;

  });

});
