<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller { 

   public function mail () { 
       
      $data = array(
         
         'name' => $_POST['name'],
         'email' => $_POST['email'],
         'phone_no' => $_POST['phone_no'],
         'subject' => $_POST['subject'],
         'company' => $_POST['company'],
         'messages' => $_POST['message']

      );
      
      $body = "Name - " . strip_tags($data['name']) . "\n" . "Email - " . strip_tags($data['email']) . "\n" . "Phone No - " . strip_tags($data['phone_no']) . "\n" . "Subject - " . strip_tags($data['subject']) . "\n" . "Company - " . strip_tags($data['company']) . "\n\n" . "MESSAGE \n\n " . strip_tags($data['messages']) . "\n";

      Mail::raw($body, function ($message) use ($data) {
        
         $message->to('info@ebenwebstudio.com') 
            ->subject(strip_tags($data['subject']));
         });

         return view('mail')->with('name', $data['name']); 

   }

}