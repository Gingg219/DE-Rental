@extends('layout.master')
@section('content')
    <table class="table table-striped table-centered mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Gender</th>
                <th>Birtdate</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td class="table-user">
                    {{-- <img src="assets/images/users/avatar-5.jpg" alt="table-user" class="mr-2 rounded-circle" /> --}}
                    {{ $user->name }}
                </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->adress }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->birth_date }}</td>

                <td class="table-action">
                    <a href="{{ route('user.edit',$user->id) }}" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection