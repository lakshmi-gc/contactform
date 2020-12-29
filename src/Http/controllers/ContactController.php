<?php

namespace Gcl\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gcl\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
    	return view('contact::contactform');
    }

    public function saveData(Request $request){
    	Contact::create($request->all());

    	return redirect(route('contact'));


    }
}
