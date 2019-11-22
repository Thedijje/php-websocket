let ws = new WebSocket("ws://localhost:8080");
ws.onopen = function(e) {
    first_connect   =   [
            "user_connected",
            "New user connected"
        
    ]
    ws.send(first_connect);
};

ws.onmessage = function(event) {
    response    =   JSON.parse(event.data.split(","));
    response    =   response.split(",");

    if(response[0]=='send_message' || response[0]=='user_connected'){
        $('#chat_box').append(response[1]+"<br>");    
        $('#action_bar').html(''); 
    }

    if(response[0]=='typing'){
        $('#action_bar').html(response[1]); 
    }

    
};

setInterval(() => {
    $('#action_bar').html('');
}, 2000);


ws.onclose = function(event) {
 
      alert('[close] Connection died');
};


function send_to_ws(message){
    ws.send(message);
    
}








