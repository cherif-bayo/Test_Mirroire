

 $(document).ready(function() {
    "use strict";
  
    $('selectedNav').click(function(){
        console.log('u cliqued me');
     
      $( this ).addClass('selectedclass');
    });
  });