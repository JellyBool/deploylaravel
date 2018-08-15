<?php

namespace App\Http\Controllers;

use App\Jobs\SendDeployEmail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function deploy()
    {
        $user = auth()->user();

        dispatch(new SendDeployEmail($user->email))->delay(10);

        return 'Email sent';
    }
}
