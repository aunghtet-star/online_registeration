<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirstYearEnrollmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'majorOrder' => 'required',
            'm_name' => 'required',
            'e_name' => 'required',
            'nrc' => 'required',
            'm_father' => 'required',
            'e_father' => 'required',
            'f_nrc' =>  'required' ,
            'm_mother' => 'required',
            'e_mother' => 'required',
            'm_nrc' => 'required' ,
            'phone' => 'required',
            'nation' => 'required',
            'f_nation' => 'required',
            'm_nation' => 'required',
            'religion' => 'required',
            'f_religion' => 'required',
            'm_religion' => 'required',
            'entry_no' => 'required',
            'ten_roll_no' => 'required',
            'ten_result_mark' => 'required',
            'birth_area' => 'required',
            'parent_address_and_phone' => 'required',
            'student_address_and_phone' => 'required',
            'profile_photo' => 'required | mimes:jpeg,jpg,png | max:10000',
            'screenshot_for_result_marks' => 'required | mimes:jpeg,jpg,png | max:10000 | min:3',
            'screenshot_for_kpay' => 'required | mimes:jpeg,jpg,png | max:10000',
        ];
    }
}
