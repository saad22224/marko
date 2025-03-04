<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\Contact as ContactMail;
use Mail;
class ContactController extends Controller
{
    public function store(Request $request) {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

       Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message')
       ]);
    Mail::to('markoagency123@gmail.com')->send(new ContactMail(request('name'), request('email'), request('phone'), request('message')));

        return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح');
    }
}
