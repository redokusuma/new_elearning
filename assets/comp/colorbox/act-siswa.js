$(document).ready(function(){
    $(".iframe").colorbox({
        iframe:true, 
        width:"400", 
        height:"200", 
        fixed:true,
        onClosed : function() {
            location.reload(); 
        }
    });
    $(".iframe-2").colorbox({
        iframe:true, 
        width:"400", 
        height:"205", 
        fixed:true,
        onClosed : function() {
            location.reload(); 
        }
    });
    $(".iframe-3").colorbox({
        iframe:true, 
        width:"500", 
        height:"305", 
        fixed:true,
        onClosed : function() {
            location.reload(); 
        }
    });
    $(".iframe-4").colorbox({
        iframe:true, 
        width:"600", 
        height:"605", 
        fixed:true,
        onClosed : function() {
            location.reload(); 
        }
    });
    $(".iframe-5").colorbox({
        iframe:true, 
        width:"450", 
        height:"340", 
        fixed:true,
        onClosed : function() {
            location.reload(); 
        }
    });
});