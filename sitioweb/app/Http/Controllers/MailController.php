<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Mailclass;
use Illuminate\Http\Request;



class MailController extends Controller
{
    public function getMail(string $mail) : void
    {
        $data = ['name' => 'Mauricio'];
        //Mail::to($mail)->send(new Mailclass($data));
    }
}
