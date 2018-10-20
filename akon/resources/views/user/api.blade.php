@extends('layouts.app')

@section('content')
    
    <div class="col-md-4 col-lg-4 col-sm-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4">
        <h1>Out Partners: </h1>
        <a href="http://127.0.0.1:8001/">
            {{$reklama["title"]}}
            <img src="{{$reklama['url']}}">
             {{$reklama["text"]}}
        </a>
    </div>
    
@endsection