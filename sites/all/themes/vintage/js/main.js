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

  Drupal.behaviors.vintageFilterClone = {
    attach: function (context) {
      var $types = $('.page-gallery .frame-prices .pane-custom ul.col-md-3');
      if ($types.length) {
        var $filters = $('.form-item-field-picture-type-tid .form-type-bef-checkbox');
        
        $types.click(function(e) {
          var $this = $(this);
          var ind = $this.index();
          $this.toggleClass('active');
          var find = '.form-item-edit-field-picture-type-tid-' + (ind+1);
          var $checkbox = $filters.filter(find).find('input');
          $checkbox.click();
        });

        for (var i = 0, len = $filters.length; i < len; i++) {
          var $filter = $filters.eq(i);
          var filterClass = $filter.attr('class');
          var filterId = filterClass.split('-type-tid-');
          filterId = parseInt(filterId[1]) - 1;
          if ($filter.find('input').is(':checked')) {
            $types.eq(filterId).addClass('active');
          }
        }
      }

      var $inputs = $('.views-exposed-form input');
      var updateFilters = function() {
        setTimeout(function(){
          $('.views-exposed-form').closest('form').submit();
        }, 200);
      }

      $inputs.change(function(e) {
        var $this = $(this);
        updateFilters();
      });
    }
  }

  Drupal.behaviors.vintageAddTimesToTextarea = {
    attach: function (context) {
      if ($('body').hasClass('page-cart')) {
        var getPaintingsInCart = function() {
          var $view = $('.view-gallery.view-display-id-panel_pane_3');
          var $items = $view.find('.views-row');
          var text = '';
          for (var i = 0, len = $items.length; i < len; i++) {
            var $this = $items.eq(i);
            if ($this.find('.unflag-action').length) {
              text += 'Name: ' + $this.find('.views-field-field-picture-year a').text();
              text += '\n';
              text += 'Link: http://v1ntage.com/node/' + $this.find('.views-field-nid .field-content').text();
              text += '\n\n';
            }
          }
          console.log(text);
          $('#webform-component-paintings textarea').val(text);
        }
        getPaintingsInCart();

        $('.unflag-action').click(function() {
          setTimeout(function(){getPaintingsInCart();},500);
        });
      }
    }
  }

})(jQuery);
