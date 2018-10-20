@extends('layouts.worker')

@section('header')
	@include('worker.admin.components.header')
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-md-2">
				<div class="list-group nav">
					<a href="{{ route('worker-admin-profile') }}" class="list-group-item">My profile</a>
					<a href="{{ route('worker-admin-users')}}" class="list-group-item  list-group-item-warning">Users list</a>
					<a href="{{ route('worker-admin-user-register') }}" class="list-group-item">User register</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="content">
					@foreach($users as $user)
						{{ $user->surname }}
						{{ $user->name }}
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection