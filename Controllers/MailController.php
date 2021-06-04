<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send(){
        $name = request()->username;
        $email = request()->email;
        $text = request()->text;
        Mail::send(['send'=>'mail'], ['name'=>'ItShop'], function ($message) use ($text, $name, $email) {
            $message->to('seva.plaks0110@gmail.com', "От $name")->subject($text);
            $message->from('seva.plaks@gmail.com', $email);
        });
        return redirect('index');
    }
}
