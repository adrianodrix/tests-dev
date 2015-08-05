<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/api'], function(){
    //Chat Rooms
    Route::get('/chat-rooms', ['as' => 'chat-room.index', 'uses' => 'ChatRoomController@index']);
    Route::get('/chat-rooms/{chatRoom}', ['as' => 'chat-room.show', 'uses' => 'ChatRoomController@show']);
    Route::post('/chat-rooms', ['as' => 'chat-room.create', 'uses' => 'ChatRoomController@create']);

    //Messages
    Route::get('/messages/{chatRoom}', ['as' => 'message.index', 'uses' => 'MessageController@getByChatRoom']);
    Route::post('/messages/{chatRoom}', ['as' => 'message.create', 'uses' => 'MessageController@createInChatRoom']);
    Route::get('/messages/{lastMessageId}/{chatRoom}', ['as' => 'messages.show', 'uses' => 'MessageController@getUpdates']);

    //Users
    Route::get('/users/login/kareem', ['as' => 'user.login.kareem', 'uses' => 'UserController@loginKareem']);
    Route::get('/users/login/mohamed', ['as' => 'user.login.mohamed', 'uses' => 'UserController@loginMohamed']);
});
