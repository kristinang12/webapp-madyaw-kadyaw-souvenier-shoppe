<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">ID</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">email</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Edit</th>
                            <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr scope="row">
                            
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$user->id}}</td>
                            <td scope="row"class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$user->name}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$user->email}}</td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <a href = "{{url('/announcement')}}"class="btn btn-primary">Edit</a>
                            </td>
                            <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                <a href = "{{url('/')}}"class="btn btn-primary">Delete</a>
                            </td>
                          </tr>
                          @empty
                            
                          
                        <tr>
                            <td colspan="6">
                                NO record found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin-layout>