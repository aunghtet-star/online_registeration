@extends('backend.layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class=" mb-3 flex justify-between">
                    <h1 class="md:text-3xl font-semibold dark:text-gray-200 ">Student Enrollment Form Dashboard</h1>
                    <div></div>
                    <div></div>
                </div>

                <section class="text-gray-400 bg-gray-900 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="text-center mb-20">
                             <img src="{{asset('storage/profile/'.$user_detail->profile_photo)}}" class="rounded-full w-40 h-40 inline-block" alt="">
                            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 my-10 mx-auto">{{$user_detail->e_name}}</p>
                            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 my-10 mx-auto capitalize">{{$user_detail->majorOrder}}</p>
                        </div>
                        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->m_name}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->e_name}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->nrc}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->m_father}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->e_father}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->f_nrc}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->m_mother}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->e_mother}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->m_nrc}}</span>
                                </div>
                            </div>

                            <div class="p-2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->phone}}</span>
                                </div>
                            </div>
                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->nation}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->f_nation}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->m_nation}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->religion}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->f_religion}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/3 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->m_religion}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">ကျောင်းဝင်ခွင့်နံပါတ် </span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->entry_no}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">10တန်း ခုံနံပါတ် </span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->ten_roll_no}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">10 တန်းစာမေးပွဲရမှတ်  </span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->ten_result_mark}}</span>
                                </div>
                            </div>
                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">မွေးဖွားရာ‌ဒေသ  </span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->birth_area}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">Parent's Full Address and Phone </span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->parent_address_and_phone}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">Student's Full Address and Phone </span>
                                </div>
                            </div>



                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">{{$user_detail->student_address_and_phone}}</span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white">Kpay Transaction ID </span>
                                </div>
                            </div>

                            <div class="p-2 sm:w-1/2 w-full">
                                <div class="bg-gray-800 rounded flex p-4 h-full items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-400 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                        <path d="M22 4L12 14.01l-3-3"></path>
                                    </svg>
                                    <span class="title-font font-medium text-white"> {{ $user_detail->kpay_id }} </span>
                                </div>
                            </div>

                            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                <div class="rounded-lg h-64 overflow-hidden">
                                    <img alt="content" class="object-cover object-center h-full w-full" src="{{asset('/storage/screenshot_for_certification/'.$user_detail->screenshot_for_certification)}}">
                                </div>
                            </div>

                            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                <div class="rounded-lg h-64 overflow-hidden">
                                    <img alt="content" class="object-cover object-center h-full w-full" src="{{asset('/storage/screenshot_for_result_marks/'.$user_detail->screenshot_for_result_marks)}}">
                                </div>
                            </div>

                            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                <div class="rounded-lg h-64 overflow-hidden">
                                    <img alt="content" class="object-cover object-center h-full w-full" src="{{asset('/storage/screenshot_for_letter_of_recommendation/'.$user_detail->screenshot_for_letter_of_recommendation)}}">
                                </div>
                            </div>
                        </div>

                        <form action="{{ url('admin/inbox/archive/'.$user_detail->id) }}" method="post">
                            @csrf
                            <button type="submit" class="flex mx-auto mt-16 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Accept</button>
                        </form>

                        <form action="{{ url('admin/inbox/delete/'.$user_detail->id) }}" method="post">
                            @csrf
                            <button class="flex mx-auto mt-16 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Reject</button>
                        </form>


                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection


