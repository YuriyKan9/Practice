<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;


class MailController extends Controller
{
    public function sendMail(){
        $name = auth()->user()->name;
        Mail::to('fake@mail.com')->send(new SignUp($name));
        return view('mail');
    }
    public function verifyMail(){
        $mytime = Carbon::now();
        User::where('id', auth()->user()->id)->update(array('email_verified' => True));
        User::where('id', auth()->user()->id)->update(array('email_verified_at' => $mytime ));
        return view('mail');
    }
}