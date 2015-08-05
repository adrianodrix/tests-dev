'use strict';

angular.module('chatApp')
    .controller('chatRoomCtrl', ['$scope','MessageService','ChatRoomService', '$routeParams', '$interval',
        function($scope, MessageService, ChatRoomService, $routeParams, $interval){
            var chatRoomLoaded = function(chatRoom){
                $scope.chatRoom = chatRoom;
                return chatRoom;
            }

            var getMessagesInRoom = function(chatRoom){
                return MessageService.getByChatRoom(chatRoom);
            }

            var MessagesLoaded = function(messages){
                $scope.messages = messages;
            }

            var handleErrors = function(errors){
                console.error(errors);
            }

            var getLastMessage = function(){
                return $scope.messages[$scope.messages.length - 1];
            }

            var getUpdates = function(){
                return MessageService.getUpdates($scope.chatRoom, getLastMessage())
                    .then(updatesLoaded);
            }

            var updatesLoaded = function(updates){
                $scope.messages = $scope.messages.concat(updates);
            }

            var clearModels = function(){
                $scope.message.body = '';
            }

            $scope.createMessage = function(chatRoom, message){
                MessageService.createInChatRoom(chatRoom, message)
                    .then(getUpdates)
                    .then(clearModels);
            }

            $interval(getUpdates,3000);

            ChatRoomService.show($routeParams.chatRoom)
                .then(chatRoomLoaded)
                .then(getMessagesInRoom)
                .then(MessagesLoaded)
                .catch(handleErrors);
    }]);

