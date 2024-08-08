<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FirstYear;
use App\Models\FirstYearEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InboxController extends Controller
{
    public function index(){
        $users = FirstYearEnrollment::all();
        return view('backend.inbox.index',compact('users'));
    }

    public function detail($id){
        $user_detail = FirstYearEnrollment::findOrFail($id);
        $users = FirstYearEnrollment::all();
        return view('backend.inbox.detail',compact('user_detail','users'));
    }

    public function archive($id){
        DB::transaction(function () use ($id) {
            // Fetch the record
            $record = FirstYearEnrollment::find($id);

            if ($record) {
                // Insert into archived_records
                FirstYear::create($record->toArray());

                // Delete from records
                $record->delete();
            }
        });

        return redirect('admin/inbox');
    }

    public function delete($id){
        DB::transaction(function () use ($id) {
            // Fetch the record
            $record = FirstYearEnrollment::find($id);

            if ($record) {

                // Delete from records
                $record->delete();
            }
        });

        return redirect('admin/inbox');
    }
}
