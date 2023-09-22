<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class=" d-flex justify-content-end">
                    <a href="/dashboard-create" class="btn btn-secondary">Create Data</a>
                </div>
               
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="d-flex">
                                <a href="/dashboard-show/{{ $user->id }}" class="btn btn-secondary mr-3">Show</a>
                                
                                <a href="/dashboard-edit/{{ $user->id }}" class="btn btn-primary mr-3">Edit</a>
                               
                                <form action="/dashboard-delete/{{ $user->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                 </form>
                            </td>
                          </tr>       
                        @endforeach
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
