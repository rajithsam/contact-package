<?php

namespace Radius\Contact\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Radius\Contact\Models\Contact;

use Radius\Contact\Mail\ContactMailable;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Mail::to( config('contact.send_email_to') )->send( new ContactMailable( $request->all() ) );

        Contact::create( $request->all() );

        return redirect(route('contact'));
    }
}
