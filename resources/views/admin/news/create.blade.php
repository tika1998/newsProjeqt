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

    <form action="{{route('news.store')}}" class="col-8 mt-5" method="post" enctype="multipart/form-data">
        @csrf

        <select id="cars" name="category">
            @foreach($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">title</span>
            </div>
            <input type="text" class="form-control" name="title" aria-label="Small"
                   aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">short_description</span>
            </div>
            <input type="text" class="form-control" name="short_description" aria-label="Small"
                   aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">long_description</span>
            </div>
            <input type="text" class="form-control" name="long_description" aria-label="Small"
                   aria-describedby="inputGroup-sizing-sm">
        </div>
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Upload Photo') }}</label>

            <div class="col-md-6">
                <input type="file" name='image' class="form-control">
            </div>
        </div>
        <button class="btn btn-outline-info">Create</button>
    </form>


@endsection
