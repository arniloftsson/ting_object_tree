(function($) {

  Drupal.behaviors.objecttreeCategories = {
    attach: function(context, settings) {
         
     $('.ting-object-tree-expand').once().click(function(){
        $(this).toggleClass('expanded');
        $(this).parent().find('.ting-object-tree-mobile-menu').slideToggle("fast");
    });
        
        
    }
  };

} (jQuery));