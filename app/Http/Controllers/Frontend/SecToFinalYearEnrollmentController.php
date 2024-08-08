<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FirstYearEnrollment;
use App\Models\SecToFinalYearEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SecToFinalYearEnrollmentController extends Controller
{
    public function index()
    {
        return view('frontend.SecYrToFinalSdt.index');
    }

    public function store(Request $request)
    {

        $profile_img_name = null;
        if($request->hasFile('profile_photo')){
            $profile_img_file = $request->file('profile_photo');
            $profile_img_name = uniqid().'_'. time().'.'.$profile_img_file->getClientOriginalExtension();
            Storage::disk('public')->put('profile/'.$profile_img_name,file_get_contents($profile_img_file));
        }


        $screenshot_for_result_marks_name = null;
        if($request->hasFile('screenshot_for_result_marks')){
            $screenshot_for_result_marks_file = $request->file('screenshot_for_result_marks');
            $screenshot_for_result_marks_name = uniqid().'_'. time().'.'.$screenshot_for_result_marks_file->getClientOriginalExtension();
            Storage::disk('public')->put('screenshot_for_result_marks/'.$screenshot_for_result_marks_name,file_get_contents($screenshot_for_result_marks_file));
        }


        $screenshot_for_certification_name = null;
        if($request->hasFile('screenshot_for_certification')){
            $screenshot_for_certification_file = $request->file('screenshot_for_certification');
            $screenshot_for_certification_name = uniqid().'_'. time().'.'.$screenshot_for_certification_file->getClientOriginalExtension();
            Storage::disk('public')->put('screenshot_for_certification/'.$screenshot_for_certification_name,file_get_contents($screenshot_for_certification_file));
        }

        $screenshot_for_letter_of_recommendation_name = null;
        if($request->hasFile('screenshot_for_letter_of_recommendation')){
            $screenshot_for_letter_of_recommendation_file = $request->file('screenshot_for_letter_of_recommendation');
            $screenshot_for_letter_of_recommendation_name = uniqid().'_'. time().'.'.$screenshot_for_letter_of_recommendation_file->getClientOriginalExtension();
            Storage::disk('public')->put('screenshot_for_letter_of_recommendation/'.$screenshot_for_letter_of_recommendation_name,file_get_contents($screenshot_for_letter_of_recommendation_file));
        }


        $sec_to_final_year_enrollment = new SecToFinalYearEnrollment();
        $sec_to_final_year_enrollment->this_year_roll_no = $request->get('this_year_roll_no');
        $sec_to_final_year_enrollment->m_name = $request->get('m_name');
        $sec_to_final_year_enrollment->e_name = $request->get('e_name');
        $sec_to_final_year_enrollment->nrc = $request->get('nrc');
        $sec_to_final_year_enrollment->m_father = $request->get('m_father');
        $sec_to_final_year_enrollment->e_father = $request->get('e_father');
        $sec_to_final_year_enrollment->f_nrc = $request->get('f_nrc');
        $sec_to_final_year_enrollment->m_mother = $request->get('m_mother');
        $sec_to_final_year_enrollment->e_mother  = $request->get('e_mother');
        $sec_to_final_year_enrollment->m_nrc = $request->get('m_nrc');
        $sec_to_final_year_enrollment->phone  = $request->get('phone');
        $sec_to_final_year_enrollment->nation  = $request->get('nation');
        $sec_to_final_year_enrollment->f_nation  = $request->get('f_nation');
        $sec_to_final_year_enrollment->m_nation = $request->get('m_nation');
        $sec_to_final_year_enrollment->religion = $request->get('religion');
        $sec_to_final_year_enrollment->f_religion = $request->get('f_religion');
        $sec_to_final_year_enrollment->m_religion = $request->get('m_religion');
        $sec_to_final_year_enrollment->course_year = $request->get('course_year');
        $sec_to_final_year_enrollment->course_name = $request->get('course_name');
        $sec_to_final_year_enrollment->this_year_roll_no = $request->get('this_year_roll_no');
        $sec_to_final_year_enrollment->last_year_roll_no = $request->get('last_year_roll_no');
        $sec_to_final_year_enrollment->birth_area = $request->get('birth_area');
        $sec_to_final_year_enrollment->parent_address_and_phone = $request->get('parent_address_and_phone');
        $sec_to_final_year_enrollment->student_address_and_phone = $request->get('student_address_and_phone');
        $sec_to_final_year_enrollment->kpay_id = $request->get('kpay_id');
        $sec_to_final_year_enrollment->profile_photo = $profile_img_name;
        $sec_to_final_year_enrollment->screenshot_for_result_marks = $screenshot_for_result_marks_name;
        $sec_to_final_year_enrollment->screenshot_for_certification = $screenshot_for_certification_name;
        $sec_to_final_year_enrollment->screenshot_for_letter_of_recommendation = $screenshot_for_letter_of_recommendation_name;
        $sec_to_final_year_enrollment->save();


        return redirect()->route('first_year.review');

    }

    public function review(){
        return view('frontend.firstYrSdt.review');
    }
}
