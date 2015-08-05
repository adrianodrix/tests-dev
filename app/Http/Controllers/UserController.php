<?php

namespace ChatApp\Http\Controllers;

use ChatApp\User;
use Illuminate\Http\Request;
use Auth;
use ChatApp\Http\Requests;
use ChatApp\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function loginKareem()
    {
        //Auth::loginById(1);
        if (Auth::loginUsingId(1)){
            return '1';
        } else {
            return '0';
        }
    }

    public function loginMohamed()
    {
        //Auth::loginById(1);
        if(Auth::loginUsingId(2)){
            return '1';
        } else {
            return '0';
        }
    }
}
