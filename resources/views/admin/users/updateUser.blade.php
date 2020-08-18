@extends('admin.adminLayouts.app')
@section('contentAd')
    @if($errors->any())
        <div>
            <p>
            @foreach($errors->all() as $error)
                <p style='color: red'>{{$error}}</p>
                @endforeach
                </p>
        </div>
    @endif

       <form action="{{route('user.update', $user->id)}}" class="col-8 mt-5" method="post">
           @csrf
           <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
               </div>
               <input type="text" class="form-control  " name="name" aria-label="Small"
                      aria-describedby="inputGroup-sizing-sm" value="{{$user->name}}">
           </div>

           <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroup-sizing-sm">Role</span>
               </div>
               <input type="text" class="form-control" name="role" aria-label="Small"
                      aria-describedby="inputGroup-sizing-sm" value="{{$user->role}}">
           </div>

           <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroup-sizing-sm">Status</span>
               </div>
               <input type="text" class="form-control" name="status" aria-label="Small"
                      aria-describedby="inputGroup-sizing-sm" value="{{$user->status}}">
           </div>

           <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
               </div>
               <input type="email" class="form-control" name="email" aria-label="Small"
                      aria-describedby="inputGroup-sizing-sm" value="{{$user->email}}">
           </div>

           <div class="input-group input-group-sm mb-3">
               <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
               </div>
               <input type="password" class="form-control" name="password" aria-label="Small"
                      aria-describedby="inputGroup-sizing-sm" value="{{$user->password}}">
           </div>

           <button class="btn btn-outline-info">Create</button>
       </form>
@endsection
