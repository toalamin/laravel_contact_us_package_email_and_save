<?php

namespace Toalamin\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toalamin\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Toalamin\Contact\Mail\ContactMailable;

class ContactController extends Controller {

    public function index() {
        return view('contact::contacts');
    }

    public function send(Request $request) {

        //dd($request);
        //Contact::create($request->all());
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        return redirect(url('contact'));
    }

}
