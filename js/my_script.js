$(document).ready(function(){
    setInterval(function(){
        $("#show").load("get_data.php")
    }, 100); 
});