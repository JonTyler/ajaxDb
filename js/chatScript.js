/**
 * Created by Jon on 2017-05-09.
 */
//start a websocket connection
var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};