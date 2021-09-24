<?php

namespace App\Http\Controllers;
use App\Contact;use Mail;
use Illuminate\Http\Request;


class contactController extends Controller
{

    public function getContact() {

        return view('contact/contact-us');
      }



      public function saveContact(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;

        $contact->message = $request->message;

        $contact->save();
        \Mail::send('contact_email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),

            'user_message' => $request->get('message'),
        ), function($message) use ($request)
          {
             $message->from($request->email);
             $message->to('benmustapha.yesmine@gmail.com');
          });

        return back()->with('success', 'Thank you for contact us!');



    }

}
