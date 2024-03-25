<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\OrderMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        // $mailData = [
        //     'title' => 'Mail from ItSolutionStuff.com',
        //     'body' => 'This is for testing email using smtp.'
        // ];
         
        // Mail::to('rani58chauhan@gmail.com')->send(new OrderMail($mailData));
           
        // dd("Email is sent successfully.");
        
$subject = "Thanks for your interest in Ignited Developers.";
// $txt = "Name of the Sender:-". "\n Email Address:-" . $req->Email . "\n Mobile Number:-" . $req->Mobile. "\n Message:-" . $req->Message;
$txt ="tp";
mail("info@igniteddevelopers.in",$subject,$txt);

return Redirect::back()->with('status','Thanks for your interest in Ignited Developers. We will try to solve your query.');

    }
}