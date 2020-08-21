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

    <form action="{{route('news.store')}}" class="col-10 mt-5" method="post" enctype="multipart/form-data">
        @csrf

        <select class="form-control" id="exampleFormControlSelect1" name="category">
            @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">title</span>
            </div>
            <input type="text" class="form-control" name="title" aria-label="Small"  aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">short_description</span>
            </div>
            <input type="text" class="form-control" name="short_description" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">long_description</span>
            </div>
            <input type="text" class="form-control" name="long_description" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <select class="form-control" id="exampleFormControlSelect1" name="userId[]" multiple="">
            @foreach($users as $user)
                @if($user->id != Auth::id())
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endif
            @endforeach
        </select>

        <div class="form-group">
            <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button class="btn btn-outline-info">Create</button>
    </form>

@endsection
