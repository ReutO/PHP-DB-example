(function(){
    
    "use strict";
    
    $(function(){
        
        $.ajax({
            method:"get",
            url:"api.php",
            data:{
                 command:"selectAll"
        },
        error: function(err){
            alert("Error:"+err.status.Text);
        },
        success:function (response){
            alert(response);
            
            
            var animals=JSON.parse(response);
            for (var i= 0; i< animals.length; i++){
                var tdID = "<td>"+animals[i].id+"</td>";
                var tdName = "<td>"+animals[i].name+"</td>";
                var tddescription = "<td>"+animals[i].description+"</td>";
                var tdTypeName = "<td>"+animals[i].typename+"</td>";
                var tr = "<tr>"+tdID+tdName+tddescription+tdTypeName+"</tr>";
                $("table").append(tr);
            }
        }
       });
     });
})()


