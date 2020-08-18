@extends('admin.adminLayouts.app')

@section('contentAd')
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
{{--    @else--}}
{{--        @foreach($news as $key)--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">{{$key->title}}</h5>--}}
{{--                    <p class="card-text">{{$key->short_description}}</p>--}}
{{--                    <p class="card-text">{{$key->long_description}}</p>--}}
{{--                    <a href="#"><i class="far fa-newspaper"></i>Read more</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
    @endif

@endsection
