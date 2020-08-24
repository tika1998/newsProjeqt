@extends('admin.adminLayouts.app')

@section('contentAd')
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @else
        <h1>{{$news[0]->category->name}}</h1>
        <div class="d-flex flex-wrap">
        @foreach($news as $key)
                <div class="card" style="width: 20rem;" >
                <div class="card-body">
                    <img class="card-img-top" src="{{asset('images/avatar/'.$key->avatar)}}" alt="Card image cap">
                    <h5 class="card-title">{{$key->title}}</h5>
                    <p class="card-text">{{$key->short_description}}</p>
                    <p class="card-text">{{$key->long_description}}</p>
                    <a href="{{route('news.show',$key->id)}}"><i class="far fa-newspaper"></i>Read more</a>
                </div>
            </div>
        @endforeach
        </div>
    @endif

@endsection
