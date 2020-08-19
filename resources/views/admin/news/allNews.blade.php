@extends('admin.adminLayouts.app')
@section('contentAd')

<div class="d-flex">
    @foreach($news as $newsIc)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$newsIc->title}}</h5>
                <p class="card-text">{{$newsIc->short_description}}</p>
                <p class="card-text">{{$newsIc->long_description}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
