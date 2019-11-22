<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WS test</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="public/js/script.js"></script>
    
</head>
<body>
    
    <div class="container">
        <div class="col-lg-8 col-lg-push-2">

            <div class="panel panel-primary">
                <div class="panel-body" id="chat_box" style="min-height:80vH;">
                    
                
                </div>
            
            </div>

           
            
            <div class="col-lg-12 chat_box">
                <input type="text" name="text" id="chat_text_input" class="form-control">
                <button class="btn btn-primary send_message">
                    Send
                </button>
                
            </div>

            


            <div class="clearfix"></div>
            <p id="action_bar"></p>
        
        </div>
    </div>

<script>
    $('.send_message').click(function(){
        message     =   $('#chat_text_input').val();  
    })

    $('.send_message').click(function(){
        message     =   $('#chat_text_input').val();

        data        =  [
                "send_message",
                message
                ];

        send_to_ws(data);
        message     =   $('#chat_text_input').val('');
        
    });

    $('#chat_text_input').keypress(function (e) { 
        data        =  [
                "typing",
                "User is typing..."
                ];

        send_to_ws(data);
    });

    $('#chat_text_input').keyup(function (e) { 
        data        =  [
                "typing_stop",
                ""
                ];

        send_to_ws(data);
    });

</script>
    
</body>
</html>