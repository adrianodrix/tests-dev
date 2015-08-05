'use strict';

angular.module('chatApp')
    .controller('chatRoomsCtrl', ['$scope','ChatRoomService', '$location',
    function($scope, ChatRoomService, $location){
        var chatRoomsLoaded = function(chatRooms){
            $scope.chatRooms = chatRooms;
        }

        var handleErrors = function(errors){
            console.error(errors);
        }

        $scope.selectChatRoom = function(chatRoom){
            $location.path('chat-room/'+ chatRoom.id);
        }

        $scope.createChatRoom = function(chatRoom){
            ChatRoomService.create(chatRoom).then($scope.selectChatRoom);
        }

        ChatRoomService.getAll()
            .then(chatRoomsLoaded)
            .catch(handleErrors);
    }]);
