@extends('layouts.app')

@section('content')
    
    <div class="col-md-6 col-md-offset-3" >
    	<div id="partner">
    		  <h1>Out Partners: <a href="http://127.0.0.1:8000/" id="link">
            {{$reklama["title"]}} </a> </h1>
	       <center>
	       	<img src="{{$reklama['url']}}" width="400" height="400">
	       </center>
	        
	        <center>
	        	<p>  {{$reklama["text"]}} </p> 
	        </center>  
    	</div>
       
    </div>
    <style type="text/css">
    	#partner{
    		background-color: brown;
    		color: white;
    		
    		border-radius: 20px;
    		padding: 20px;
    		overflow: auto;
    		width: 600px;
    	}
        #link:hover{
            color: yellow;
            text-decoration: none;
        }

    </style>
@endsection