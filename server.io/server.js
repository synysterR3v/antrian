
var express = require('express');

var app = express();

var server =require('http').createServer(app);

// const Server = require('socket.io');

// const io = new Server(7000);

var io = require('socket.io').listen(server);

var request=require("request");

var redis = require('redis');

connections = [];

server.listen(7000);

console.log('Server is running...');



const users     = {};

io.sockets.on('connection', function(socket){

    // connections.push(socket);

    console.log('Terhubung: %s sockets sedang terhubung', connections.length);

    socket.on('send data', function (data) {

        io.sockets.emit('new data', data);

    });

});