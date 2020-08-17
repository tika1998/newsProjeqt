@extends('admin.adminLayouts.app')
@section('contentAd')
    <table class="table table-dark col-9">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Email</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->status}}</td>
                <td>{{$user->email}}</td>


                @if(Auth::user()->role !== 'superAdmin')
                    <td>
                        <a href=""><i class="fas fa-user-edit" style="color: darkgreen"></i></a>
                        <a href=""><i class="fas fa-user-slash" style="color: red"></i></a>
                    </td>
                @endif
                @endforeach
            </tr>
    </table>
    <a href=""><i class="fas fa-plus-square" style="font-size: 25px"></i></a>
@endsection
