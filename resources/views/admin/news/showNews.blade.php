@extends('admin.adminLayouts.app')
@section('contentAd')
            <div class="card" style="width: 27rem; margin: 25px auto">
                <img class="card-img-top" src="{{asset('images/avatar/'.$news->avatar)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$news->title}}</h5>
                    <p class="card-text">{{ $news->short_description }}</p>
                    <p class="card-text">{{ $news->long_description }}</p>
                    <a style="width:100px" href="{{route('news.edit', $news->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a style="width:100px" href="{{route('news.destroy', $news->id)}}" class="btn btn-danger" style="color: red"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
@endsection
