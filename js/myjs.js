$(document).ready(function(){

    $('.refresh').on('click', function() {
        $.ajax({
            url: "index.php",
            cache: false,
            success: function(data){
                $(".main").html(data);
            }
        });
    });

});