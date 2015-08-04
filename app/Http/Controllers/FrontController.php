<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin'] );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('front/index');
    }

    public function contact()
    {
        return view('front/contact');
    }

    public function reviews()
    {
        return view('front/reviews');
    }

    public function admin()
    {
        return view('admin/index');
    }
}
