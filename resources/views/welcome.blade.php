<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chat</title>

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
            padding: 10px;
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
    </style>
</head>

<body>


    <h2>Chat Messages</h2>

    <!-- <div class="container" id="Sendedmessage">
        <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
        <p>Hello. How are you today?</p>
        <span class="time-right">11:00</span>
    </div> -->

    <div class="container" id="Receivedmessage">
        <h1> {{Auth::user()->name}} </h1>
        <!-- 
        <span class="time-left">11:01</span> -->
    </div>

    <input type="text" id="Chatinput">

    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>

    <script>
        let ip_address = '127.0.0.1';
        let port = '3000';
        let socket = io(ip_address + ':' + port);

        let Chatinput = document.getElementById('Chatinput')
        let div = document.createElement('div');
        let p = document.createElement('p');

        Chatinput.addEventListener('keypress', (message) => {
            if (message.key === "Enter") {
                message.preventDefault();
                message = message.target.value

                socket.emit('SendMeassgeToServer', message);
                Chatinput.value = '';
                return false;
            }
        });

        socket.on('SendMessageToClient', (message) => {
            let Receivedmessage = document.getElementById('Receivedmessage');

            Receivedmessage.append(div);
            div.appendChild(p)
            div.classList.add('darker')
            p.textContent = message;
        })
    </script>
</body>

</html>