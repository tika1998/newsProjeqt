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

    <form action="{{route('news.update', $news->id)}}" class="col-8 mt-5" method="post">
        @csrf
        @method('put')
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
            </div>
            <input type="text" class="form-control  " name="title" aria-label="Small"
                   aria-describedby="inputGroup-sizing-sm" value="{{$news->title}}">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">short_description</span>
            </div>
            <input type="text" class="form-control" name="short_description" aria-label="Small"
                   aria-describedby="inputGroup-sizing-sm" value="{{$news->short_description}}">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">long_description</span>
            </div>
            <input type="text" class="form-control" name="long_description" aria-label="Small"
                   aria-describedby="inputGroup-sizing-sm" value="{{$news->long_description}}">
        </div>

        <button class="btn btn-outline-info">Update</button>
    </form>
@endsection
