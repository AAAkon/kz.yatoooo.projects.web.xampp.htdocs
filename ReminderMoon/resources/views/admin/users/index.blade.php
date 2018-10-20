@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3" style="background-color: #fff; padding: 50px; border-radius:  10px; box-shadow: 10px 10px 5px #888888;">
		
			
					<form action="/user/change" method="post">
					 {{ csrf_field() }}
				   <div class="form-group">
					  	<label for="name">User: </label>
						<input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
				    </div>
					<div class="form-group">
						<label for="email">E-mail: </label>
						<input type="text" name="email" id="email" value="{{$user->email}}" class="form-control">
					</div>
					<div class="form-group">
						<label for="opassword">Old Password </label>
					    <input type="password" name="opassword" id="opassword" class="form-control">
				    </div>
				     <div class="form-group">
						<label for="npassword">New Password </label>
					    <input type="password" name="npassword" id="npassword" class="form-control">
					</div>
					<p class="pull-right clearfix">
						Joined ({{ $user->created_at->diffForHumans()}}) 
                  
						<input type="submit" class="btn btn-xs btn-primary" value="Change">
					</p>
	               </form>
		</div>
	</div>
@endsection

