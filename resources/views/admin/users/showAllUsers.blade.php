@extends('admin.adminLayouts.app')
@section('contentAd')
    <table class="table table-dark col-9 m-auto">
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
                @if($user->status == 'panding')
                    <td style="color: red">{{$user->status}}</td>
                @else
                    <td style="color: green">{{$user->status}}</td>
                @endif
                <td>{{$user->email}}</td>

                @if(Auth::user()->role == 'superAdmin')
                    <td>
                        <a href="{{route('user.edit',$user->id )}}"><i class="fas fa-user-edit" style="color: darkgreen"></i></a>

                        @if(Auth::user()->id !== $user->id)
                            <form action="{{route('user.destroy', $user->id)}}" method='post' style='display: contents'>
                                @csrf
                                @method('DELETE')
                                <button style="background: none;border: none;"><i class="fas fa-user-slash" style="color: red"></i></button>
                            </form>
                        @endif

                        @if($user->status == 'panding')
                            <form action="" method="get" style='display: contents'>
                                @csrf
                                <a href="{{url('/change',$user->id)}}"><i class="fas fa-check" style="color: greenyellow"></i></a>
                            </form>
                        @endif
                    </td>
                @endif
                @endforeach
            </tr>
    </table>
    <a href="{{route('user.create')}}"><i class="fas fa-plus-square" style="font-size: 25px"></i></a>
@endsection
