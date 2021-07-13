<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\SubscribeMail;
use App\Models\Admin\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $data = [
            'name' => 'prod555',
            'price' => '250'
        ];
        $subscribedUsers = Subscribe::all();
        foreach ($subscribedUsers as $subscribedUser)
        {
            Mail::to("$subscribedUser->email")->send(new SubscribeMail($data));
        }

    }
}
