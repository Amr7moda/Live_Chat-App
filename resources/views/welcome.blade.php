<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="text-center">
        <h2>Chat Messages</h2>
    </div>

    <div class="container">
        <h1 id="userName" class="d-none" data-userName="{{Auth::user()->name}}"></h1>
    </div>

    <div id="chat-box" class="chat-box">
        <div class="chat-box-header">
            <h3 id="showUsername">Message Us</h3>
            <p><i class="fa fa-times"></i></p>
        </div>
        <div class="chat-box-body" id="Showmessage">
        </div>

        <div class="chat-box-footer">
            <button id="addExtra">
                <i class="fa fa-plus"></i>
            </button>
            <input placeholder="Enter Your Message" id="Chatinput" type="text" />
            <i class="send far fa-paper-plane"></i>
        </div>

    </div>
    <div id="chat-button" class="chat-button"><span></span></div>
    <div class="modal" id="modal">
        <div class="modal-content">
            <span id="modal-close-button" class="modal-close-button">&times;</span>
            <h1>Add What you want here.</h1>
        </div>
    </div>

    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>