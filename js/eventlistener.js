/**
 * Created by Jon on 2017-04-26.
 * Listens for events from EventGenerator.php and plugs them in to the event zone. This didn't work in iis at work and
 * I had to use long polling,
 * maybe it'll work in apache2
 */
$(document).ready(function () {
    if(typeof(EventSource) !== "undefined" ){
        var source = new EventSource("serverside/EventGenerator.php");
        source.onmessage = function (e) {
            $("#eventResponse").html(e.data);
        }
    }
    else {
        $("#eventResponse").html("Browser does not support server sent events.");
    }
});