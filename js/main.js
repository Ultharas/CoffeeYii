    $(document).ready(function(){
    $("#coffee-machine").click(function(){
    var selected = $(this).attr('href');	
    $.scrollTo(selected, 500);	
    return false;
    });	
    });