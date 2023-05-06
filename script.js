const express = require('express');

const app = express();
const server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: { origin: '*' }
});

io.on('connection', (socket) => {
    socket.on('SendMeassgeToServer', (message) => {
        // io.sockets.emit('SendMessageToClient', message)
        socket.broadcast.emit('SendMessageToClient', message)
    })

    socket.on('disconnect', (socket) => {
        console.log('Disconnect');
    })
})

server.listen(3000, () => {
    console.log('server is running');
})


