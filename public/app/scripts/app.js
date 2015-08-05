'use strict';

angular.module('chatApp', ['ngRoute'])

    .config(function($routeProvider){
        $routeProvider
            .when('/chat-rooms', {
                templateUrl: 'partials/chat-rooms.html',
                controller: 'chatRoomsCtrl'
            })
            .when('/chat-room/:chatRoom', {
                templateUrl: 'partials/chat-room.html',
                controller: 'chatRoomCtrl'
            });

        $routeProvider.otherwise('/chat-rooms');
    });
