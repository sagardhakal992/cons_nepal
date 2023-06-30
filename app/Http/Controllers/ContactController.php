<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
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

    public function sendBookingTime(BookingRequest $bookingRequest){
        try{
            $validatedData=$bookingRequest->validated();
            Mail::to("arcticnepal@gmail.com")->send(new ContactUsMail($validatedData,$type="booking"));
            return redirect()->route('home');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
