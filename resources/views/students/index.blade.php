<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="mb-4">
                    <a href="{{route('students.create')}}" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Create Student</a>
                </div>

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white text-center">NAME</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white text-center">AGE</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$student->id}}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$student->name}}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{$student->age}}</td>

                            <td>
                                <div>
                                    <a href="">Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>