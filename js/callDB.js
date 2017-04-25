/**
 * Created by Jon on 2017-04-25.
 */
//call the dbCheck.php file
$(document).ready(function(){
    $.get("serverside/dbCheck.php", function( response ) {
        $("#response").html(response);
    });
});
