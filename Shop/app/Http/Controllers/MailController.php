<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    
    public function send_mail(){
        
        $data=['name'=>'Rajesh Bishnoi'];

        Mail::send(['html' => 'mail'], $data , function ($message) {

        $message->to('bishnoiorajesh209@gmail.com', 'Rajesh Bishnoi')->subject('Your Reminder!');
        $message->from('bishnoiorajesh209@gmail.com', 'Your Application');

});

echo 'send succefully';
	}
}
