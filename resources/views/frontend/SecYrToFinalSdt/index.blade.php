@extends('frontend.layouts.app')
@section('content')

    <form action="{{url('sec-to-final-yr-enroll/store')}}" class="group bg-gray-200 dark:bg-slate-900 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" enctype="multipart/form-data" id="enroll-form" novalidate>
        @csrf
        <h5 class="underline dark:text-xl flex justify-center dark:text-gray-300 mb-6">ကျောင်းသားအဖြစ်မှတ်ပုံတင်ခွင့်တောင်းခံလွှာ</h5>

        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3 mb-6">
            <!-- Photo File Input -->
            <input type="file" class="hidden" name="profile_photo" required x-ref="photo" x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);
             ">

            <label class="block text-gray-700 dark:text-gray-200 text-sm font-bold mb-2 text-center" for="photo">
                Profile Photo <span class="text-red-600"> </span>
            </label>

            <div class="text-center">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-40 h-40 m-auto rounded-full shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
            <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
            </span>
                </div>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                    Select New Photo
                </button>
            </div>
        </div>

        <div class="grid md:grid-cols-3">
            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="m-name">
                    Name (Myanmar)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" name="m_name" id="m-name" type="text" placeholder="Myanmar Name" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Username is required (eg. ကောင်းထက်မိုး)</span>
            </div>

            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="e-name">
                    Name (English)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" name="e_name" id="e-name" type="text"  placeholder="English Name" required pattern="^[A-Za-z][A-Za-z '-]*[A-Za-z]$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Username is required (eg. Kaung Htet Moe)</span>
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="nrc">
                    နိုင်ငံသားစိစစ်ရေးကတ်အမှတ်
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nrc" id="nrc" type="text" placeholder="NRC Number" required pattern="^\d\/[A-Z]{6}\([A-Z]\)\d{6}$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Please enter a valid NRC number (e.g., 1/ABC(N)123456)</span>
            </div>
        </div>

        <div class="md:grid md:grid-cols-3">
            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="m-father">
                    Father (Myanmar)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="m-father" name="m_father" type="text" placeholder="Father (Myanmar)" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Username is required (eg. ဦး)</span>
            </div>

            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="e_father">
                    Father (English)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="e-father" name="e_father" type="text" placeholder="Father (English)" required pattern="^[A-Za-z][A-Za-z '-]*[A-Za-z]$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Username is required (eg. U Hla)</span>
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="f-nrc">
                    နိုင်ငံသားစိစစ်ရေးကတ်အမှတ် (Father)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="f-nrc" type="text" name="f_nrc" placeholder="NRC Number" required pattern="^\d\/[A-Z]{6}\([A-Z]\)\d{6}$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Please enter a valid NRC number (e.g., 1/ABC(N)123456)</span>
            </div>
        </div>

        <div class="md:grid md:grid-cols-3">
            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="m-mother">
                    Mother (Myanmar)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="m_mother" name="m_mother" type="text" placeholder="Mother (Myanmar)" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Username is required (eg. ဒေါ်မြ)</span>
            </div>

            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="e-mother">
                    Mother (English)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="e_mother" name="e_mother" type="text" placeholder="Mother (English)" required pattern="^[A-Za-z][A-Za-z '-]*[A-Za-z]$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Username is required (eg. Daw Mya)</span>
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="m-nrc">
                    နိုင်ငံသားစိစစ်ရေးကတ်အမှတ် (Mother)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="m-nrc" type="text" name="m_nrc" placeholder="NRC Number" required pattern="^\d\/[A-Z]{6}\([A-Z]\)\d{6}$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Please enter a valid NRC number (e.g., 1/ABC(N)123456)</span>
            </div>
        </div>

        <div class="md:grid md:grid-cols-3">
            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="nation">
                    လူမျိုး
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="nation" name="nation" type="text" placeholder="Nation" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Nation is required </span>
            </div>

            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="f-nation">
                    လူမျိုး (Father)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="f-nation" name="f_nation" type="text" placeholder="Nation" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Nation is required </span>
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="m-nation">
                    လူမျိုး (Mother)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="m-nation" name="m_nation" type="text" placeholder="Nation" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Nation is required </span>
            </div>
        </div>

        <div class="md:grid md:grid-cols-3">
            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="religion">
                    ကိုးကွယ်သည့်ဘာသာ
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="religion" name="religion" type="text" placeholder="Religion" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Religion is required </span>
            </div>

            <div class="mb-4 md:mr-6">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="f-religion">
                    ကိုးကွယ်သည့်ဘာသာ (Father)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="f-religion" name="f_religion" type="text" placeholder="Religion" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Religion is required </span>
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="m-religion">
                    ကိုးကွယ်သည့်ဘာသာ (Mother)
                </label>
                <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="m-religion" name="m_religion" type="text" placeholder="Religion" required pattern="^[\u1000-\u109F]+[\u1000-\u109F]*$">
                <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Religion is required </span>
            </div>
        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="phone">
                အမြဲတမ်းဆက်သွယ်ရန်ဖုန်းနံပါတ်
            </label>
            <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="phone" name="phone" type="text" placeholder="Phone (0912345678)" required pattern="^09\d{5,9}$">
            <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Phone is required (eg.0912345678) min(7) , max(11) </span>
        </div>



        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="birth-area">
                မွေးဖွေးရာဒေသ
            </label>
            <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="birth-area" name="birth_area" type="text" placeholder="Birth Area" required pattern=".{1,}">
            <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Birth Area is required </span>
        </div>







        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="course-year">
                သင်တန်းနှစ်
            </label>

            <div class="flex flex-wrap">
                <div class="flex items-center me-4 mb-4">
                    <input id="second-year" type="radio" value="second-year" name="course_year" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="second-year" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Second Year</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="third-year" type="radio" value="third-year" name="course_year" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="third-year" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Third Year</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="forth-year" type="radio" value="forth-year" name="course_year" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="forth-year" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Forth Year</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="fifth-year" type="radio" value="fifth-year" name="course_year" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="fifth-year" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fifth Year</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="sixth-year" type="radio" value="sixth-year" name="course_year" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="sixth-year" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sixth Year</label>
                </div>

            </div>
        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="course-name">
                သင်တန်းအမည်
            </label>
            <div class="flex flex-wrap">
                <div class="flex items-center me-4 mb-4">
                    <input id="civil" type="radio" value="civil" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="civil" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Civil Technology</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="ep" type="radio" value="ep" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ep" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Electronic and Communication Technology</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="ec" type="radio" value="ec" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ec" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Electrical Power Technology</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="mech" type="radio" value="mech" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="mech" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mechanical</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="it" type="radio" value="it" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="it" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Information Technology</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="mc" type="radio" value="mc" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="mc" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mechatronic</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="met" type="radio" value="met" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="met" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Metallurgy</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="BioT" type="radio" value="BioT" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="BioT" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bio Technology</label>
                </div>

                <div class="flex items-center me-4 mb-4">
                    <input id="nt" type="radio" value="nt" name="course_name" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="nt" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nuclear Technology</label>
                </div>

            </div>
        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="this-year-roll-no">
                ယခုနှစ်ခုံအမှတ်
            </label>
            <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="this-year-roll-no" name="this_year_roll_no" type="text" placeholder="This year roll no" required pattern="^[A-Za-z][A-Za-z '-]*[A-Za-z]$">
            <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">This year roll number is required (eg . VI-IT-15)</span>
        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="last-year-roll-no">
                လွန်ခဲ့သောနှစ်မှစာမေးပွဲခုံအမှတ်
            </label>
            <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="last-year-roll-no" name="last_year_roll_no" type="text" placeholder="last year roll number" required pattern="^[A-Za-z][A-Za-z '-]*[A-Za-z]$">
            <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Last year roll number is required (eg . V-IT-5)</span>
        </div>


        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="parent-address-and-phone">
                မိဘ/အုပ်ထိန်းသူထံဆက်သွယ်ရန်လိပ်စာအပြည့်အစုံနှင့်ဖုန်းနံပါတ်
            </label>
            <textarea rows="4" class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="parent-address-and-phone" type="text" name="parent_address_and_phone" required placeholder="Parent's full address and phone" ></textarea>
            <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Parent's address and phone is required </span>
        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="student-address-and-phone">
                ကျောင်းသား/သူထံဆက်သွယ်ရန်လိပ်စာအပြည့်အစုံနှင့်ဖုန်းနံပါတ်
            </label>
            <textarea rows="4" class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="student-address-and-phone" type="text" name="student_address_and_phone" required placeholder="student's full address and phone"></textarea>
            <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1">Student's address and phone is required </span>
        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="screenshot-for-result-marks">
                 အမှတ်စာရင်းမူရင်း (ပုံထည့်ရန်) (Max: 2MB)
            </label>


            <div class="w-full bg-white">
                <div class="h-full">
                    <div id="images-container"></div>
                    <div class="flex w-full">
                        <div id="multi-upload-button"
                             class="inline-flex items-center px-4 py-2 bg-gray-600 border border-gray-600 rounded-l font-semibold cursor-pointer text-sm text-white tracking-widest hover:bg-gray-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ">
                            Click to browse
                        </div>
                        <div class="w-4/12 lg:w-3/12 border border-gray-300 rounded-r-md flex items-center justify-between">
                            <span id="multi-upload-text" class="p-2"></span>
                            <button id="multi-upload-delete" class="hidden" onclick="removeMultiUpload()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-red-700 w-3 h-3"
                                     viewBox="0 0 320 512">
                                    <path
                                        d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <input type="file" id="multi-upload-input" name="screenshot_for_result_marks" class="hidden" required/>
                </div>
            </div>

        </div>


        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="screenshot-for-certification">
                တက္ကသိုလ်ဝင်တန်းအောင်လက်မှတ် ၊ (ပုံထည့်ရန်) (Max: 2MB)
            </label>
            <div class="w-full bg-white">
                <div class="h-full">
                    <div id="images-container-certification"></div>
                    <div class="flex w-full">
                        <div id="multi-upload-button-certification"
                             class="inline-flex items-center px-4 py-2 bg-gray-600 border border-gray-600 rounded-l font-semibold cursor-pointer text-sm text-white tracking-widest hover:bg-gray-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ">
                            Click to browse
                        </div>
                        <div class="w-4/12 lg:w-3/12 border border-gray-300 rounded-r-md flex items-center justify-between">
                            <span id="multi-upload-text-certification" class="p-2"></span>
                            <button id="multi-upload-delete-certification" class="hidden" onclick="removeMultiUploadCertification()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-red-700 w-3 h-3"
                                     viewBox="0 0 320 512">
                                    <path
                                        d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <input type="file" id="multi-upload-input-certification" name="screenshot_for_certification" class="hidden" required/>
                </div>
            </div>

        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="screenshot-for-letter_of_recommendation">
                ရဲစခန်းထောက်ခံစာမူရင်း ၊ (ပုံထည့်ရန်) (Max: 2MB)
            </label>

            <div class="w-full bg-white">
                <div class="h-full">
                    <div id="images-container-letter_of_recommendation"></div>
                    <div class="flex w-full">
                        <div id="multi-upload-button-letter_of_recommendation"
                             class="inline-flex items-center px-4 py-2 bg-gray-600 border border-gray-600 rounded-l font-semibold cursor-pointer text-sm text-white tracking-widest hover:bg-gray-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ">
                            Click to browse
                        </div>
                        <div class="w-4/12 lg:w-3/12 border border-gray-300 rounded-r-md flex items-center justify-between">
                            <span id="multi-upload-text-letter_of_recommendation" class="p-2"></span>
                            <button id="multi-upload-delete-letter_of_recommendation" class="hidden" onclick="removeMultiUploadLetterOfRecommendation()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-red-700 w-3 h-3"
                                     viewBox="0 0 320 512">
                                    <path
                                        d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <input type="file" id="multi-upload-input-letter_of_recommendation"  accept="image/*" name="screenshot_for_letter_of_recommendation" class="hidden" required/>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <label class="block dark:text-gray-200 text-sm font-bold mb-2" for="kpay_id">
                အောက်ပါနံပါတ်သို့ K pay လွှဲပြီး transaction id ကို ရိုက်ထည့်‌ပေးပါ။
            </label>
            <p class="dark:text-gray-300 md:text-lg font-semibold mb-3">Kpay - 09969861379 (Aung Htet Thu)</p>
            <input class="peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:[&:not(:placeholder-shown):not(:focus)]:border-red-500" id="kpay_id" type="text" name="kpay_id" placeholder="Kpay transaction Id ထည့်ပါ" required pattern="^\d{20}$">
            <span class="peer-[&:not(:placeholder-shown):not(:focus):invalid]:block hidden text-red-500 text-xs mt-1"> (eg. 0000 xxxx xxxx xxxx 1234) </span>
        </div>

        <p class="dark:text-xl dark:text-gray-300 mb-6">ဖော်ပြပါအချက်အလက်များမှန်ကန်ကြောင်းဝန်ခံပါသည်။ မှားယွင်းချက်တစ်စုံတစ်ရာရှိခဲ့ပါက ကျွန်တော်/ကျွန်မ၏တာဝန်သာဖြစ်ပါသည်။</p>



        <div class="flex items-center">
            <input id="link-checkbox" data-modal-target="static-modal" data-modal-toggle="static-modal" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
            <label for="link-checkbox" class="ms-2 text-sm  md:text-lg  font-medium text-gray-900 dark:text-gray-300">I agree with the <span  class="text-blue-600 dark:text-blue-500 hover:underline">terms and conditions</span>.</label>
        </div>



        <div class="flex justify-end mt-3 group-invalid:pointer-events-none group-invalid:opacity-30">
            <x-primary-button class="ms-3">
                Submit
            </x-primary-button>
        </div>
    </form>


    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        ကျောင်းသား/သူများစည်းကမ်းများလိုက်နာရန်ဝန်ခံချက်
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        ၁။ ကျောင်းသား/သူများသည် ဝန်ကြီးဌာန၊ ဦးစီးဌာန၊ တက္ကသိုလ်တိုမှ ချမှတ်ထားသောစည်းကမ်းများကို လိုက်နာရမည်ဖြစ်ပြီး အောက်ပါ စည်းကမ်းများ ချိုးဖောက်ပါက ဝန်ကြီးဌာန၊ ဦးစီးဌာန၊တက္ကသိုလ်တိုမှ ချမှတ် ထားသော စည်းကမ်းများအရသော်လည်းကောင်း၊ အပြစ်ကြီးငယ်အလိုက် ပြင်းထန်စွာ သတိပေးခြင်း၊ ကျောင်းမှ ထုတ်ပယ်ခြင်းစသော အပြစ်ဒဏ်များကို ပေးပိုင်ခွင့်ရှိသည်။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁)ရာဇဝတ်မှုတစ်ခုခုကျူးလွန်ခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၂)ကျောင်းတွင်း၊ကျောင်းပြင်ခိုက်ရန်ဖြစ်ပွားခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၃)ျကျောင်းတွင်း၊ကျောင်းပြင်လောင်းကစားမှုပြုလုပ်ခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၄)ကျောင်းတွင်း၊ကျောင်းပြင်အရက်သေရည်သောက်စားမူးယစ်ခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၅)ကျောင်းအဆောက်အဦအတွင်း ဆေးလိပ်သောက်ခြင်း၊ကွမ်းစားခြင်း၊ကွမ်းတံတွေးထွေးခြင်း။

                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၆)မူးယစ်ထုံထိုင်းဘေးဖြစ်စေတတ်သော ဆေးဝါးများသုံးစွဲခြင်း၊ ထားသိုခြင်း၊ သယ်ယူခြင်း၊ ရောင်းချခြင်း၊ ဖြန့်ဖြူးခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၇)နိုင်ငံပိုင်၊ကျောင်းပိုင်အဆောက်အဦများ၊ပစ္စည်းများနှင့်ကျောင်းသားအချင်းချင်းပိုင်ပစ္စည်းများ ကိုဖျက်ဆီးခြင်း၊ခိုးယူခြင်း၊အဓမ္မယူခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၈)နေ့စဉ်ကျောင်းတက်ရာတွင် ဤတက္ကသိုလ်မှ သတ်မှတ်ထားသောကျောင်းဝတ်စုံများအတိုင်း (ကျောင်းသားကဒ်အပါအဝင်) ပြည့်စုံစွာမဝတ်ဆင်ခြင်း နှင့် ကျောင်းသား/ကျောင်းသူများ၏ အင်္ဂါရပ် နှင့် မလျှော်ညီသောဝတ်စားဆင်ယင်မှုပြုခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၉)ကျောင်း၏ဂုဏ်သိက္ခာ၊ ပါမောက္ခချုပ်၊ဆရာ/ဆရာမများ၊ ကျောင်းသား၊ ကျောင်းသူများနှင့် အ များပြည်သူများ၏ဂုဏ်သိက္ခာ/အိန္ဒြေပျက်ပြားအောင်ပြောဆိုခြင်း၊ပြုမူ ခြင်း၊လုပ်ဆောင်ခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁၀)ဆရာ/ဆရာမများ၏ ဆိုဆုံးမမှုများကိုမနာခံခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁၁)အေးချမ်းစွာပညာသင်ကြားရေးကို အနှောင့်အယှက်ဖြစ်စေရန်ပြောဆိုပြုမူလုပ်ဆောင်ခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁၂)ပါမောက္ခချုပ်၏ ခွင့်ပြုချက် မရဘဲကျောင်းဝင်းအတွင်းဖြစ်စေ၊ ကျောင်းပိုင်အဆောက်အဦ အတွင်းဖြစ်စေ၊အစည်းအဝေးပြုလုပ်ခြင်း၊စာသင်ခန်းနှင့်ပရိဘောဂများကို သုံးစွဲခြင်း၊စာရွက်စာတမ်းများဝေငှခြင်း၊ကြော်ငြာစာတမ်းကပ်ခြင်း၊ဟောပြောခြင်း၊အသင်းဖွဲစည်းခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁၃)မိမိတို့လေ့လာသင်ယူသည့် မေဂျာတွင်ရှိသော ဘာသာရပ်တစ်ခုခြင်းစီတွင် ကျောင်းခေါ်ချိန် ၇၅% မပြည့်မီခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁၄) တက္ကသိုလ်မှအခါအားလျော်စွာ ထုတ်ပြန်ထားသော စည်းကမ်းများကိုမလိုက်နာခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁၅)သင်တန်းတက်ရောက်ခွင့်ရလျှင် ပညာရေးဝန်ကြီးဌာန၏ ကျောင်းသား/ကျောင်းသူများ အတွက် ထုတ်ပြန်သည့် စည်းကမ်းချက်များကို ထိန်းသိမ်းလိုက်နာမှုမရှိခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        (၁၆)နည်းပညာတက္ကသိုလ်တွင် ကျင်းပသော စာမေးပွဲများတွင် မသမာသောနည်းဖြင့် ဖြေဆိုခြင်း၊ ကူးယူခြင်း၊ ခိုးချခြင်း။
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        ၂။ အထက်ဖော်ပြပါကျောင်းစည်းကမ်းများကို ဝန်ခံကတိပြုလက်မှတ်ရေးထိုးအပ်ပါသည်။ သေချာစွာဖတ်ရှုသိရှိပြီးဖြစ်၍လိုက်နာမည်ဖြစ်ကြောင်းဝန်ခံကတိပြုလက်မှတ်ရေးထိုးအပ်ပါသည်။
                    </p>


                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection


