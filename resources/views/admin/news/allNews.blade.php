@extends('admin.adminLayouts.app')
@section('contentAd')

<div class="d-flex flex-wrap" id="card">
    @foreach($news as $newsIc)
        <div class="card"  style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$newsIc->title}}</h5>
                <p class="card-text">{{ Str::limit($newsIc->short_description, $limit = 10, $end = '...') }}</p>
                <p class="card-text">{{ Str::limit($newsIc->long_description, $limit = 10, $end = '...') }}</p>
                <a href="{{route('news.show', $newsIc->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                <a href="{{route('news.edit', $newsIc->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a>

                <form action="{{route('news.destroy', $newsIc->id)}}" method='post' style='display: contents'>
                    @csrf
                    @method('DELETE')
                    <button style="background: red;border: none;" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
    @endforeach
</div>
{{ $news->links() }}

@endsection
