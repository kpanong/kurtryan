

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h6>List of Students</h6>
                    <table class="border-separate border-spacing-5">
                        <thead>
                            <th>
                            <th>ID No.</th>
                            <th>Full Name</th>
                            <th>Course and Year</th>
                            <th>birthdate</th>
                            <th>Gender</th>
                            <th>Options</th>
                            </th>
                        </thead>
                        <tbody>
                        @foreach ($studentInfo as $stuinfo)
                            <tr>
                                <td>{{$stuinfo->idNo}}</td>
                                <td>{{$stuinfo->firstName}}</td>
                                <td>{{$stuinfo->middleName}}</td>
                                <td> {{$stuinfo->lastName}}</td>
                                <td>{{$stuinfo->course}}</td>
                                <td>{{$stuinfo->year}}</td>
                                <td>{{date("F j, Y", strtotime($stuinfo->birthday))}}</td>
                                <td>{{$stuinfo->gender}}</td>
                                <td>
                                    <a class="mt-4 bg-teal-200 hover:bg-green-300 text-black font-bold py-2 px-4 rounded" href="{{route('students-show', ['stuno' => $stuinfo->sno])}}">View</a>
                                    <a class="mt-4 bg-orange-300 hover:bg-red-800 text-black font-bold py-2 px-4 rounded" href="#">Edit</a>
                                    <a class="mt-4 bg-amber-700 hover:bg-amber-400 text-black font-bold py-2 px-4 rounded" href="#">Delete</a>

                                </td>

                                    </tr>
                                    @endforeach
                        </tbody>
                      </table>
                      <a class="mt-4 bg-amber-700 hover:bg-amber-400 text-black font-bold py-2 px-4 rounded" href="{{route('students')}}">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
