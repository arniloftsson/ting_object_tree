(function($) {
    $(document).ready(function() {
           $.post("/ting/objecttreesearch", Drupal.settings.tingObjectTreeSearch.active, SearchExpansionResults);
console.log("test");
console.log(Drupal.settings.tingObjectTreeSearch.active);
      }); 
    
     var SearchExpansionResults= function(response) {
console.log(response);
        $.each (response, function(key, value ) {
            //var text = $( "#ting-search-expansion-link-" + key ).text().replace('...', value); 
            var li = $( "#" + key + " > a:first > span:first" );
            console.log( li );
            li.append(" " + value);
        });
     }
        


})(jQuery);
