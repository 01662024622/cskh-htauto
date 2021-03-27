@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/categories/list.css') }}">
@endsection
@section('content')
    @foreach($posts as $post)
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 container-custome">
            <div class="row">
            <div class="col-1 avata-container">
                <img class="image-avata" src="{{$post->avata}}">
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12"><a class="title-link" href="/posts/{{$post->slug}}">{{$post->title}}</a></div>
                    <div class="col-12"><span class="date">{{$post->updated_at->diffForHumans()}}</span></div>
                </div>
            </div>
            </div>
            </div>

    </div>
        <br>
        <br>
    @endforeach
@endsection

@section('js')


@endsection
