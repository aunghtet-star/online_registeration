<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FirstYear;
use App\Models\FirstYearEnrollment;

class FirstYearController extends Controller
{
    public function index(){
        $users = FirstYear::all();
        return view('backend.first_year.index',compact('users'));
    }

    public function detail($id){
        $user_detail = FirstYear::findOrFail($id);

        return view('backend.first_year.detail',compact('user_detail'));
    }
}
