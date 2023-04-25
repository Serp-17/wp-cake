$(".scroll-link").on("click", "a", function (event) {
    event.preventDefault();
    if (!($('body').hasClass('home'))) {
      document.location='/'+$(this).attr('href')
    } else {
      var id  = $(this).attr('href'),
      top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 600);
      $('.menu').removeClass('show');
    }

});