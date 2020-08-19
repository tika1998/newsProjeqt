
@extends('layouts.index')
@if(Session::has('message'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('content')
    <div class="col-lg-8 col-md-8 col-sm-8">
        @include('incloude.slide')
    </div>
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                @include('incloude.category')
            </div>
            @include('incloude.popularPost')
        </div>
    </section>
@endsection
