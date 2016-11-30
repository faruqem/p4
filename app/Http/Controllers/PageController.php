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
    public function home()
    {
        return view('page.home');
    }
    /*************** End of Home Page ******************************/

    /***************************************************************
    * Contact page
    ****************************************************************/
    #Show the page
    public function contact()
    {
        return view('page.contact');
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

        #Retrieve form values
        $name = $request->input('name');
        $userEmail = $request->input('email');
        $message = $request->input('message');
        $to = 'faruqem@yahoo.com';
        $subject = 'Message from Developer Best Friends Site';

        #Instantiate and call the SendEmail class instance to send the message
        $sendMail = new SendEmail($name, $userEmail, $message, $to, $subject);
        $confMessage = $sendMail->send();

        #Return the send status message by redirecting to the same page
        return \Redirect::to('/contact')->with('svConfMessage',$confMessage);
    }
    /*************** End of Contact Page ******************************/

}
