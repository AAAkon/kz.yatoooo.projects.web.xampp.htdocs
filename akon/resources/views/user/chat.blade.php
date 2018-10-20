@extends('layouts.app')

@section('content')
	
	<div class="col-md-4 col-lg-4 col-sm-4 col-md-offset-4 col-lg-offset-4 col-sm-offset-4">
		<h1 id="greeting">Hello,<span id="username">{{$user->username}}</span></h1>
		
		<div id="chat-window" class="col-lg-12">
			
		</div>
		<div class="col-lg-12">
			<div id="typingStatus" class="col-lg-12" style="padding 15px;"></div>
			<input type="text" id="text" name="" class="form-controller col-lg-12" autofocus="" onblur="notTyping()">

		</div>
	</div>
	
@endsection
 
@section('script')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="{{asset("../js/chat.js")}}"></script>
@endsection

@section('style')
	<link href="{{asset("../css/chat.css")}}" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection