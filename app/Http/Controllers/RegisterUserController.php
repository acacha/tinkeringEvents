<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Registered;
use Log;

class RegisterUserController extends Controller
{

    public function register()
    {
        $user = User::find(1);
//        $user = new \App\User();

//        $user->name = 'prova';
//        $user->email = 'prova@gmail.com';

        Log::info('Before event');
        \Debugbar::startMeasure('render','Time for sending email');
        event(new Registered($user));
        \Debugbar::stopMeasure('render');
        Log::info('After event');
        return view('mails.welcome');
    }
}
