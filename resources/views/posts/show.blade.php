@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/categories/list.css') }}">
@endsection
@section('content')

<h3>{{$post->title}}</h3>
<span class="date">{{$post->created_at}}</span>
<br>
<br>
@if($post->embed!='')
<button class="btn btn-info" onclick="openFullscreen()">Mở rộng</button>
@endif
<br>
<br>

<div class="row">
    <div class="col-12">{!! $post->content !!}</div>
    <div id="full-screen" class="col-12">
        {!! $post->embed !!}
    </div>
</div>


@endsection
@section('js')
    <script type="text/javascript">
        $( "div#full-screen :first-child" ).css({'width':'100%','height':'100vh'})
        function openFullscreen(){
            var embed = $( "div#full-screen :first-child" )[0];
            var rFS = embed.mozRequestFullScreen || embed.webkitRequestFullscreen || embed.requestFullscreen;
            rFS.call(embed);
        }
    </script>
@endsection
