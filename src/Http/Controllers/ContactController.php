<?php

namespace BasharDlaleh\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use BasharDlaleh\Contact\Mail\ContactMail;
use BasharDlaleh\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        // if we write contact without :: laravel will search in the resources/views folder
        return view('contact::contact');
    }

    public function send(Request $request){
        
        // config('contact.admin.email') will return admin email from config/contact.php in the pkg folder unless it's published then it will return from the published customized file
        Mail::to(config('contact.admin.email'))->send(new ContactMail($request->name, $request->email, $request->message));
        
        Contact::create($request->all());
        
        return redirect(route('contact'));
    }
}
