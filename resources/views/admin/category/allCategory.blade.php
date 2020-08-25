@extends('admin.adminLayouts.app')
@section('contentAd')

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <form action="{{route('category.destroy',$category->id)}}" method='post' style='display: contents'>
                        @csrf
                        @method('DELETE')
                        <button style="background: none;border: none;"><i class="far fa-trash-alt"
                                                                          style="color: red"></i></button>
                    </form>
                    <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary" data-toggle="modal"
                       data-target="#exampleModal"><i class="far fa-edit"></i></a>

                </td>
            </tr>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('category.update', $category->id)}}" method="post">
                            @csrf
                            @method('put')
                            <input type="text" name="name" class="form-control" value="{{$category->name}}">

                        <div class="modal-footer">
                            <button class="btn btn-primary col-2">Click</button> </form>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </table>
@endsection
