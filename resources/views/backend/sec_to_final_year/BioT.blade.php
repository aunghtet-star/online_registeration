@extends('backend.layouts.app')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class=" mb-3 flex justify-between">
                    <h1 class="md:text-3xl font-semibold dark:text-gray-200 ">BioTechnology Student Dashboard</h1>
                    <div></div>
                    <div></div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NRC
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Birth Area
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Detail
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{asset('storage/profile/'.$user->profile_photo)}}" alt="{{$user->e_name}}">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{$user->e_name}}</div>
                                    <div class="font-normal text-gray-500 capitalize">{{$user->majorOrder}}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{$user->phone}}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->nrc}}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->birth_area}}
                            </td>
                            <td class="px-6 py-4">
                                <!-- Modal toggle -->
                                <a href="{{url('admin/third_year_it/detail/'.$user->id)}}"  type="button" >Detail user</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-4 text-center text-xl" colspan="6">
                                <p> There is no data!</p>
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
                <!-- Edit user modal -->
                <div id="editUserModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->


                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection

