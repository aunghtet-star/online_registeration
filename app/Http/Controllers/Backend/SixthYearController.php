<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SecToFinalYear;
use Illuminate\Http\Request;

class SixthYearController extends Controller
{

    public function civil(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','civil')->get();
        return view('backend.sec_to_final_year.civil',compact('users'));
    }
    public function ec(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','ec')->get();
        return view('backend.sec_to_final_year.ec',compact('users'));
    }
    public function ep(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','ep')->get();
        return view('backend.sec_to_final_year.ep',compact('users'));
    }
    public function mech(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','mech')->get();
        return view('backend.sec_to_final_year.mech',compact('users'));
    }
    public function it(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','it')->get();
        return view('backend.sec_to_final_year.it',compact('users'));
    }
    public function mc(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','mc')->get();
        return view('backend.sec_to_final_year.mc',compact('users'));
    }
    public function met(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','met')->get();
        return view('backend.sec_to_final_year.met',compact('users'));
    }
    public function BioT(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','BioT')->get();
        return view('backend.sec_to_final_year.BioT',compact('users'));
    }

    public function nt(){
        $users = SecToFinalYear::where('course_year','sixth-year')->where('course_name','nt')->get();
        return view('backend.sec_to_final_year.nt',compact('users'));
    }
}
