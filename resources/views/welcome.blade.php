<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container .darker {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 30px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }

        #Receivedmessage .darker p {
            margin: 0;
        }




        @import url("https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap");

        body {
            background: #E8EBF5;
            padding: 0;
            margin: 0;
            font-family: Raleway;
        }

        .chat-box {
            height: 90%;
            width: 400px;
            position: absolute;
            margin: 0 auto;
            overflow: hidden;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            z-index: 15;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.005);
            right: 0;
            bottom: 0;
            margin: 15px;
            background: #fff;
            border-radius: 15px;
            visibility: hidden;
        }

        .chat-box-header {
            height: 8%;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            display: flex;
            font-size: 14px;
            padding: 0.5em 0;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2),
                0 -1px 10px rgba(172, 54, 195, 0.3);
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.025);
        }

        .chat-box-header h3 {
            font-family: ubuntu;
            font-weight: 400;
            float: left;
            position: absolute;
            left: 25px;
        }

        .chat-box-header p {
            float: right;
            position: absolute;
            right: 16px;
            cursor: pointer;
            height: 50px;
            width: 50px;
            text-align: center;
            line-height: 3.25;
            margin: 0;
        }


        .chat-box-body {
            height: 75%;
            background: #f8f8f8;
            overflow-y: scroll;
            padding: 12px;
        }

        .chat-box-body-send {
            width: 250px;
            float: right;
            background: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.015);
            margin-bottom: 14px;
        }

        .chat-box-body-send p {
            margin: 0;
            color: #444;
            font-size: 14px;
            margin-bottom: 0.25rem;
        }

        .chat-box-body-send span {
            float: right;
            color: #777;
            font-size: 10px;
        }

        .chat-box-body-receive-receive {
            width: 250px;
            float: left;
            background: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.015);
            margin-bottom: 14px;
        }

        .chat-box-body-receive-receive p {
            margin: 0;
            color: #444;
            font-size: 14px;
            margin-bottom: 0.25rem;
        }

        .chat-box-body-receive-receive span {
            float: right;
            color: #777;
            font-size: 10px;
        }


        .chat-box::-webkit-scrollbar {
            width: 5px;
            opacity: 0;
        }


        .chat-box-footer {
            position: relative;
            display: flex;
        }

        .chat-box-footer button {
            border: none;
            padding: 16px;
            font-size: 14px;
            background: white;
            cursor: pointer;
        }

        .chat-box-footer button:focus {
            outline: none;
        }

        .chat-box-footer input {
            padding: 10px;
            border: none;
            -webkit-appearance: none;
            border-radius: 50px;
            background: whitesmoke;
            margin: 10px;
            font-family: ubuntu;
            font-weight: 600;
            color: #444;
            width: 280px;
        }

        .chat-box-footer:focus {
            outline: none;
        }

        .chat-box-footer .send {
            vertical-align: middle;
            align-items: center;
            justify-content: center;
            transform: translate(0px, 20px);
            cursor: pointer;
        }

        .chat-button {
            padding: 25px 16px;
            background: #2C50EF;
            width: 120px;
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 15px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            box-shadow: 0 2px 15px rgba(#2C50EF, 0.21);
            cursor: pointer;
        }

        .chat-button span::before {
            content: "";
            height: 15px;
            width: 15px;
            background: #47cf73;
            position: absolute;
            transform: translate(0, -7px);
            border-radius: 15px;
        }

        .chat-button span::after {
            content: "Message Us";
            font-size: 14px;
            color: white;
            position: absolute;
            left: 50px;
            top: 18px;
        }

        .modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transform: scale(1.1);
            transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 1rem 1.5rem;
            width: 24rem;
            border-radius: 0.5rem;
        }

        .modal-close-button {
            float: right;
            width: 1.5rem;
            line-height: 1.5rem;
            text-align: center;
            cursor: pointer;
            border-radius: 0.25rem;
            background-color: lightgray;
        }

        .close-button:hover {
            background-color: darkgray;
        }

        .show-modal {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
            z-index: 30;
        }
    </style>
</head>

<body>


    <h2>Chat Messages</h2>

    <div class="container" id="Receivedmessage">
        <h1 id="userName" class="d-none" data-userName="{{Auth::user()->name}}"></h1>
        <h1 id="showUsername"></h1>
    </div>

    <input type="text" id="Chatinput">


    <div id="chat-box" class="chat-box">
        <div class="chat-box-header">
            <h3>Message Us</h3>
            <p><i class="fa fa-times"></i></p>
        </div>
        <div class="chat-box-body">
            <div class="chat-box-body-send">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
            <div class="chat-box-body-receive">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
            <div class="chat-box-body-receive">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
            <div class="chat-box-body-send">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
            <div class="chat-box-body-send">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
            <div class="chat-box-body-receive">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
            <div class="chat-box-body-receive">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
            <div class="chat-box-body-send">
                <p>This is my message.</p>
                <span>12:00</span>
            </div>
        </div>
        <div class="chat-box-footer">
            <button id="addExtra"><i class="fa fa-plus"></i></button>
            <input placeholder="Enter Your Message" type="text" />
            <i class="send far fa-paper-plane"></i>
        </div>
    </div>
    <div id="chat-button" class="chat-button"><span></span></div>
    <div class="modal">
        <div class="modal-content">
            <span class="modal-close-button">&times;</span>
            <h1>Add What you want here.</h1>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
    <script>
        let chatButton = document.getElementById('chat-button');
        let chatBox = document.getElementById('chat-box');

        chatButton.addEventListener('click', () => {
            chatButton.style.display = 'none';
            chatBox.style.visibility = 'visible';
        })


        // $('.chat-box .chat-box-header p').on('click', function() {
        //     $('.chat-button').css({
        //         "display": "block"
        //     });
        //     $('.chat-box').css({
        //         "visibility": "hidden"
        //     });

        // }) $("#addExtra").on("click", function() {
        //     $(".modal").toggleClass("show-modal");
        // }) $(".modal-close-button").on("click", function() {
        //     $(".modal").toggleClass("show-modal");
        // })
    </script>

    <script>
        let ip_address = '127.0.0.1';
        let port = '3000';
        let socket = io(ip_address + ':' + port);

        let Chatinput = document.getElementById('Chatinput')
        let user = document.getElementById('userName');
        let showUsername = document.getElementById('showUsername')

        Chatinput.addEventListener('keypress', (message) => {
            if (message.key === "Enter") {
                message.preventDefault();
                message = message.target.value
                userName = user.dataset.username;

                let data = {
                    'message': message,
                    'user': userName
                }

                socket.emit('SendMeassgeToServer', data);
                Chatinput.value = '';
                return false;
            }
        });

        socket.on('SendMessageToClient', (data) => {
            let Receivedmessage = document.getElementById('Receivedmessage');
            let div = document.createElement('div');
            let p = document.createElement('p');
            let span = document.createElement('span');

            let time = new Date().toLocaleTimeString();


            Receivedmessage.append(div);
            div.appendChild(p)
            div.appendChild(span)

            div.classList.add('darker')
            span.classList.add('time-right')

            p.textContent = data.message;
            span.textContent = time;

            showUsername.innerHTML = data.user
        })
    </script>
</body>

</html>