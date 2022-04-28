<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller { 

   public function mail () { 
       
      $data = array(
         
         'name' => $_GET['name'],
         'email' => $_GET['email'],
         'phone_no' => $_GET['phone_no'],
         'subject' => $_GET['subject'],
         'company' => $_GET['company'],
         'messages' => $_GET['message']

      );
      
      $body = "Name - " . $data['name'] . "\n" . "Email - " . $data['email'] . "\n" . "Phone No - " . $data['phone_no'] . "\n" . "Subject - " . $data['subject'] . "\n" . "Company - " . $data['company'] . "\n\n" . "MESSAGE \n\n " . $data['messages'] . "\n";

      Mail::raw($body, function ($message) use ($data) {
        
         $message->to('tobi.akindele@gmail.com')
            ->from($data['email'], $data['name'])
            ->subject($data['subject']);
         });

         return view('mail')->with('name', $data['name']); 

   }

}