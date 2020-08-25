@extends('admin.adminLayouts.app')
@section('contentAd')
           <div style="display: flex; margin: 65px; justify-content: center">
               @foreach($news as $key)
                   <div class="card" style="width: 27rem;">
                       <img class="card-img-top" src="{{asset('images/avatar/'.$key->avatar)}}" alt="Card image cap">
                       <div class="card-body">
                           <h5 class="card-title">{{$key->title}}</h5>
                           <p class="card-text">{{ $key->short_description }}</p>
                           <p class="card-text">{{ $key->long_description }}</p>
                           <a style="width:100px" href="{{route('news.edit', $key->id)}}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                           <a style="width:100px" href="{{route('news.destroy', $key->id)}}" class="btn btn-danger" style="color: red"><i class="fas fa-trash-alt"></i></a>
                       </div>
                   </div>

                   @if($key->file)
                       <div style="margin-left: 20px">
                           @foreach($key->file as $i)
                               <img style="width:150px; margin-top: 10px; display: flex; flex-direction: column " class="card-img-top" src="{{asset('images/'.$i->name)}}" alt="Card image cap">
                           @endforeach
                       </div>
                   @endif
               @endforeach
           </div>

@endsection
