<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FirstYear;
use App\Models\SecToFinalYear;
use App\Models\SecToFinalYearEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InboxForSecToFinalYearController extends Controller
{
    public function index(){
        $users = SecToFinalYearEnrollment::all();
        return view('backend.inbox_sec_to_final_year.index',compact('users'));
    }

    public function detail($id){
        $user_detail = SecToFinalYearEnrollment::findOrFail($id);
        $users = SecToFinalYearEnrollment::all();
        return view('backend.inbox_sec_to_final_year.detail',compact('user_detail','users'));
    }

    public function archive($id){
        DB::transaction(function () use ($id) {
            // Fetch the record
            $record = SecToFinalYearEnrollment::find($id);

            if ($record) {
                // Insert into archived_records
                SecToFinalYear::create($record->toArray());

                // Delete from records
                $record->delete();
            }
        });

        return redirect('admin/inbox_sec_to_final_year');
    }

    public function delete($id){
        DB::transaction(function () use ($id) {
            // Fetch the record
            $record = SecToFinalYearEnrollment::find($id);

            if ($record) {

                // Delete from records
                $record->delete();
            }
        });

        return redirect('admin/inbox_sec_to_final_year');
    }
}
