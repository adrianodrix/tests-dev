<?php

namespace ChatApp\Http\Controllers;

use ChatApp\ChatRoom;
use ChatApp\Message;
use Illuminate\Http\Request;

use ChatApp\Http\Requests;
use ChatApp\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * @var Message
     */
    private $message;

    /**
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * @param ChatRoom $chatRoom
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getByChatRoom(ChatRoom $chatRoom)
    {
        return $chatRoom->messages()->get();
    }

    /**
     * @param Request $request
     * @param ChatRoom $chatRoom
     * @return Message
     */
    public function createInChatRoom(Request $request, ChatRoom $chatRoom)
    {
        $message = new Message();
        $message->fill($request->all());
        $message->chatRoom()->associate($chatRoom);
        $message->user()->associate($this->me());
        $message->save();

        return $message;
    }

    public function getUpdates($lastMessageId, ChatRoom $chatRoom)
    {
        return $this->message->byChatRoom($chatRoom)->afterId($lastMessageId)->get();
    }
}
