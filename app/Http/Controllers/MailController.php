<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\bookingsMail;
use App\Mail\contactUsMail;
use App\Mail\membershipMail;
use App\Mail\subscribeMail;

class MailController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['sendBookingMail', 'sendContactUsMail', 'sendMembershipMail', 'sendSubscribeMail']]);
    }

    public function sendBookingMail(Request $request){
        try{

            Mail::to(env("MAIL_TO"))->send(new bookingsMail($request));
            return response()->json([
                'message' => 'Email sent!',        
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Failed',
                'error' => $error
            ], 400);
        }
    }

    public function sendContactUsMail(Request $request){
        try{

            Mail::to(env("MAIL_TO"))->send(new contactUsMail($request));
            return response()->json([
                'message' => 'Email sent!',        
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Failed',
                'error' => $error
            ], 400);
        }
    }

    public function sendMembershipMail(Request $request){
        try{

            Mail::to(env("MAIL_TO"))->send(new membershipMail($request));
            return response()->json([
                'message' => 'Email sent!',        
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Failed',
                'error' => $error
            ], 400);
        }
    }
    public function sendSubscribeMail(Request $request){
        try{

            Mail::to(env("MAIL_TO"))->send(new subscribeMail($request));
            return response()->json([
                'message' => 'Email sent!',        
            ], 200);
        }catch(Exception $error){
            return response()->json([
                'message' => 'Failed',
                'error' => $error
            ], 400);
        }
    }


}
