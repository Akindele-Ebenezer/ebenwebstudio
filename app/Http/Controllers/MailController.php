<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller { 

   public function mail(Request $request) { 
       
      $data = array(
         
         'name' => $request->name,
         'email' => $request->email,
         'phone_no' => $request->phone_no,
         'subject' => $request->subject,
         'company' => $request->company,
         'messages' => $request->message

      );
      
      $body = "Name - " . strip_tags($data['name']) . "\n" . "Email - " . strip_tags($data['email']) . "\n" . "Phone No - " . strip_tags($data['phone_no']) . "\n" . "Subject - " . strip_tags($data['subject']) . "\n" . "Company - " . strip_tags($data['company']) . "\n\n" . "MESSAGE \n\n " . strip_tags($data['messages']) . "\n";

      Mail::raw($body, function ($message) use ($data) {
        
         $message->to('tobi.akindele@gmail.com') 
            ->from('tobi.akindele@gmail.com', 'Eben Web Studio')
            ->subject(strip_tags($data['subject']));
         });

         return view('mail')->with('name', $data['name']); 

   }

}