<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactUsMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactMailToOrg(ContactRequest $contactRequest){
        try{
            $validatedData = $contactRequest->validated();
            Mail::to("arcticnepal@gmail.com")->send(new ContactUsMail($validatedData));
            return redirect()->route('contact');
        }catch(Exception $e){
            return redirect()->route('contact');
        }
    }
}
