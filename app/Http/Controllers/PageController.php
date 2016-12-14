<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Utilities\SendEmail;

class PageController extends Controller
{
    /***************************************************************
    * Home page
    ****************************************************************/
    #Display the page
    public function home(Request $request)
    {
        if($request->user()){
            return redirect('/search');
        } else {
            return view('page.home');
        }
    }
    /*************** End of Home Page ******************************/

    /***************************************************************
    * Contact page
    ****************************************************************/
    #Show the page
    public function contact()
    {
        return view('page.contact');
        //return view('glossary.create');
    }

    #Post the page
    public function contactPost(Request $request)
    {
        #Validate
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string|between:5,500',
        ]);

        $data = array(
            'request' => $request
        );

        \Mail::send([], $data, function ($message) use ($request) {
            #Retrieve form values
            $userName = $request->input('name');
            $userEmail = $request->input('email');
            $userMessage = $request->input('message') . ' *** Sender Details - Name: ' . $userName . ', Email: ' . $userEmail . ' ***';

            $to = 'faruqe@gmail.com';
            $subject = 'Message from Tessitura Report Catalog Site';

            $message->to($to)->subject($subject)->setBody($userMessage);
        });

        #Return the send status message by redirecting to the same page
        $confMessage = "Your message has been sent successfully. We will be in touch soon.";
        return \Redirect::to('/contact')->with('svConfMessage',$confMessage);
    }
    /*************** End of Contact Page ******************************/

}
