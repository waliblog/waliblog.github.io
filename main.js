$(document).ready(function(){



    var btn = $("#button");
    $("#button").click(function(){
        var a = $("#name").val();
        
       $.post("stor.php",{name : a},function(data){
           $("li").html(data);
       })

       
       
       return false;

    })
})