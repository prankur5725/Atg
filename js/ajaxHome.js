$(document).ready(function(){ 
   
    $.ajax({
    
        url: "./include/loadHome.php",
        method: "post",
        data: "load",
        dataType:"text",
        success:function(data){
            $('#ajaxContent').html(data);
          
        }
    });
 
    
 });   



