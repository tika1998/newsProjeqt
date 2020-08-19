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
    <form action="{{route('category.store')}}" class="col-8 mt-5" method="post">
        @csrf
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
            </div>
            <input type="text" class="form-control " name="name" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <button class="btn btn-outline-info">Create</button>
    </form>
@endsection
