'use strict';

angular.module('chatApp')
    .factory('MessageService', ['webService', function(webService){
        return {
            getByChatRoom: function(chatRoom){
                return webService.get('messages/'+ chatRoom.id);
            },
            createInChatRoom: function(chatRoom, message){
                return webService.post('messages/'+ chatRoom.id, message);
            },
            getUpdates: function(chatRoom, lastMessage){
                if (!lastMessage){
                    lastMessage = {"id": 0};
                }
                return webService.get('messages/'+ lastMessage.id +'/'+ chatRoom.id);
            },
        }
    }]);