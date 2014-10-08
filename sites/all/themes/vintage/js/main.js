(function ($) {

  'use strict';

  /**
   * A simple Drupal behavior example.
   */
  Drupal.behaviors.cirlceThemeExample = {
    attach: function (context) {
      $(document).ready(function() {
        $("nav li a").click(function() {
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top
            }, 2000);
        });

        // BEGIN: main slider
        var _$main_slide = $('#main-slide'),
          _$main_slide_nav = $('.bottom-menu li'),
          main_slide_nav_len = _$main_slide_nav.length - 1;
        _$main_slide.flexslider({
          animation: "fade",
          controlNav: true,
          directionNav: false,
          start: function(slider){
            _$main_slide_nav.eq(slider.animatingTo + 1).addClass("active");
          },
          before: function(slider){
            _$main_slide_nav.each(function(){
              $(this).removeClass("active");
            });
            _$main_slide_nav.eq(slider.animatingTo + 1).addClass("active");
          }
        });
        var main_slide_instance = _$main_slide.data('flexslider');
        _$main_slide_nav.each(function(index){
          var _$this = $(this);
          if(index == 0){
            _$this.click(function(){
              main_slide_instance.flexAnimate(main_slide_instance.getTarget("prev"), main_slide_instance.vars.pauseOnAction);
            });
          }else if(index == main_slide_nav_len){
            _$this.click(function(){
              main_slide_instance.flexAnimate(main_slide_instance.getTarget("next"), main_slide_instance.vars.pauseOnAction);
            });
          }else{
            _$this.click(function(){
              $(".flex-control-nav li").eq($(this).index()-1).children().click();
            });
          }
        });
        _$main_slide_nav.last().click(function(){
        });
        // END: main slider

        $('#gallery').flexslider({
          animation: "fade",
          controlNav: true,
          directionNav: false
        });
        $('#artist-list').flexslider({
          animation: "fade",
          controlNav: false,
          directionNav: true,
          pauseOnHover: true,
          prevText: "",
          nextText: ""
        });
      });
    }
  };

})(jQuery);
