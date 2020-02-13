<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\VarDumper\Cloner\Data;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'firstname' => 'required | min:3',
            'surname' => 'required | min:3',
            'username' => 'required | min:3',
            'email' => 'required | email',
            'message' => 'required',
            // 'active' => 'required',
            // 'company_id' => 'required',
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));
        //dd(request()->all());

        // session()->flash('message', 'Thanks for your message. We\'ll be in touch.');

        return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
        
    }
    
}
