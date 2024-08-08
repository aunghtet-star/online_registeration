<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class BContactUsController extends Controller
{
    public function index(){
        $letters = ContactUs::all();
        return view('backend.contact_us',compact('letters'));
    }
}
