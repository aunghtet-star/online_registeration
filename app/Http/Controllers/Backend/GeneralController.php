<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FirstYear;
use App\Models\SecToFinalYear;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function detail($id){
        $user_detail = SecToFinalYear::findOrFail($id);

        return view('backend.general.sec_to_final_year_detail',compact('user_detail'));
    }
}
