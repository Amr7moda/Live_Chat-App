let chatButton = document.getElementById('chat-button');
let chatBox = document.getElementById('chat-box');
let close = document.querySelector('.chat-box .chat-box-header p'); 
let addExtra = document.getElementById('addExtra')
let modal = document.getElementById('modal')
let modal_close = document.getElementById('modal-close-button')

chatButton.addEventListener('click', () => {
    chatButton.style.display = 'none';
    chatBox.style.visibility = 'visible';
})

close.addEventListener('click', () => {
    chatButton.style.display = 'block';
    chatBox.style.visibility = 'hidden';
})

addExtra.addEventListener('click', () => {
    modal.classList.toggle("show-modal")
})

modal_close.addEventListener('click', () => {
    modal.classList.toggle("show-modal")
})


//////////////////////////////////// send & recieve data ////////////////////////////////////

let ip_address = '127.0.0.1';
let port = '3000';
let socket = io(ip_address + ':' + port);

let Chatinput = document.getElementById('Chatinput')
let user = document.getElementById('userName');
let showUsername = document.getElementById('showUsername')

Chatinput.addEventListener('keypress', (message) => {
    if (message.key === "Enter") {
        message.preventDefault();
        let Showmessage = document.getElementById('Showmessage');
        let time = new Date().toLocaleTimeString();
        let div = document.createElement('div');
        let p = document.createElement('p');
        let span = document.createElement('span');

        message = message.target.value
        userName = user.dataset.username;

        Showmessage.append(div);
        div.appendChild(p)
        div.appendChild(span)

        div.classList.add('chat-box-body-send')
        span.classList.add('time-right')

        p.textContent = message;
        span.textContent = time;

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
    let Showmessage = document.getElementById('Showmessage');
    let div = document.createElement('div');
    let p = document.createElement('p');
    let span = document.createElement('span');
    let time = new Date().toLocaleTimeString();

    console.log(data);
    Showmessage.append(div);
    div.appendChild(p)
    div.appendChild(span)

    span.classList.add('time-right')
    div.classList.add('chat-box-body-receive')

    p.textContent = data.message;
    span.textContent = time;

    showUsername.innerHTML = data.user
})