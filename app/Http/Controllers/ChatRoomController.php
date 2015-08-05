<?php

namespace ChatApp\Http\Controllers;

use ChatApp\ChatRoom;
use Illuminate\Http\Request;

use ChatApp\Http\Requests;
use ChatApp\Http\Controllers\Controller;

class ChatRoomController extends Controller
{
    /**
     * @var ChatRoom
     */
    private $chatRoom;

    public function __construct(ChatRoom $chatRoom)
    {
        $this->chatRoom = $chatRoom;
    }

    public function index()
    {
        return $this->chatRoom->all();
    }

    public function create(Request $request)
    {
        return $this->chatRoom->create($request->all());
    }

    /**
     * @param ChatRoom $chatRoom
     * @return ChatRoom
     */
    public function show(ChatRoom $chatRoom)
    {
        return $chatRoom;
    }
}
