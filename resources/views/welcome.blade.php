
@extends('layouts.index')
@if(Session::has('message'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
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
