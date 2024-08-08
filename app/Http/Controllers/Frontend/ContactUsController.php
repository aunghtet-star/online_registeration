<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact(Request $request){

        $letter = new ContactUs();
        $letter->name = $request->input('name');
        $letter->email = $request->input('email');
        $letter->message = $request->input('message');
        $letter->save();

        return redirect('/');
    }

}
