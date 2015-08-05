'use strict';

angular.module('chatApp')
.factory('ChatRoomService', ['webService', function(webService){
        return {
            getAll: function(){
                return webService.get('chat-rooms');
            },
            show: function(id){
                return webService.get('chat-rooms/'+ id);
            },
            create: function(chatRoom){
                return webService.post('chat-rooms', chatRoom);
            }
        }
    }]);