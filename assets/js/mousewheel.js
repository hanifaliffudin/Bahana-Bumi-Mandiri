$(document).ready(function () {
  if (parseInt($(window).width()) > 768) {
    var divs = $(".scrolldiv");
    var dir = "up"; // wheel scroll direction
    var div = 0; // current div
    $(document.body).on("DOMMouseScroll mousewheel", function (e) {
      if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
        dir = "down";
      } else {
        dir = "up";
      }
      // find currently visible div :
      div = -1;
      divs.each(function (i) {
        if (div < 0 && $(this).offset().top >= $(window).scrollTop()) {
          div = i;
        }
      });
      if (dir == "up" && div > 0) {
        div--;
      }
      if (dir == "down" && div < divs.length) {
        div++;
      }
      if (div == 8 && dir == "down") div--;
      if (div == 6 && dir == "up") div--;

      $("html,body")
        .stop()
        .animate(
          {
            scrollTop: divs.eq(div).offset().top,
          },
          500
        );
      return false;
    });
    $(window).resize(function () {
      $("html,body").scrollTop(divs.eq(div).offset().top);
    });
  }
});
