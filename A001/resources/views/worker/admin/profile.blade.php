@extends('layouts.worker')

@section('header')
	@include('worker.admin.components.header')
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-md-2">
				<div class="list-group nav">
					<a href="{{ route('worker-admin-profile') }}" class="list-group-item list-group-item-warning">My profile</a>
					<a href="{{ route('worker-admin-users')}}" class="list-group-item">Users list</a>
					<a href="{{ route('worker-admin-user-register') }}" class="list-group-item">User register</a>
				</div>
			</div>
			<div class="col-md-10">
				<div class="content">
					<table>
						<tr>
							<th>
								Name:
							</th>
							<td>
								{{ $name }}	
							</td>
						</tr>
						<tr>
							<th>
								Surname:
							</th>
							<td>
								{{ $surname }}	
							</td>
						</tr>
						<tr>
							<th>
								Date of birth:
							</th>
							<td>
								{{ $dob }}	
							</td>
						</tr>
						<tr>
							<th>
								Address:
							</th>
							<td>
								{{ $address }}	
							</td>
						</tr>
						<tr>
							<th>
								Phone number:
							</th>
							<td>
								{{ $phone_number }}	
							</td>
						</tr>
						<tr>
							<th>
								E-mail:
							</th>
							<td>
								{{ $email }}	
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection