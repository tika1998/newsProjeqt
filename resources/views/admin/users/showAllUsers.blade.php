@extends('admin.adminLayouts.app')
@section('contentAd')
    <table class="table table-dark col-9 m-auto" style="color: black;background: #f8fafc">
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
                @elseif($user->status == 'success')
                    <td style="color: green">{{$user->status}}</td>
                @else
                    <td style="color: #ffe000">{{$user->status}}</td>
                @endif
                <td>{{$user->email}}</td>
                <td><a href="{{route('user.show',$user->id)}}"><i class="fas fa-user-circle"></i></a></td>
                @if(Auth::user()->role == 'superAdmin' || Auth::user()->id == $user->id)
                    <td>
                        <a href="{{route('user.edit',$user->id )}}"><i class="fas fa-user-edit"  style="color: darkgreen"></i></a>

                        @if(Auth::user()->id !== $user->id && Auth::user()->role == 'superAdmin' )
                            <form action="{{route('user.destroy', $user->id)}}" method='post' style='display: contents'>
                                @csrf
                                @method('DELETE')
                                <button style="background: none;border: none;"><i class="fas fa-user-slash" style="color: red"></i></button>
                                    <a href="{{url('/block',$user->id)}}"><i class="fas fa-user-lock"></i></a>
                                @if($user->status == "block")
                                    <a href="{{url('/block',$user->id)}}" style="color: #151414"><i class="fas fa-lock-open"></i></a>
                                @endif
                            </form>
                        @endif

                        @if($user->status == 'panding')
                            <form action="" method="get" style='display: contents'>
                                @csrf
                                <a href="{{url('/change',$user->id)}}"><i class="fas fa-check"  style="color: greenyellow"></i></a>
                            </form>
                        @endif
                    </td>
                @endif
                @endforeach
            </tr>
    </table>
    <a href="{{route('user.create')}}"><i class="fas fa-plus-square" style="font-size: 25px"></i></a>
    <form action="{{url('/export')}}">
        <input type="email" placeholder="email" name="emailName">
        <button>Send</button>
    </form>

@endsection
