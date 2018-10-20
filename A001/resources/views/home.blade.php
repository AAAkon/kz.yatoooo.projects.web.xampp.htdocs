@extends('layouts.app')

@section('css')
	@parent
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endsection

@section('navigation')
@endsection

@section('content')
	<div class="header">
		<div class="workers">
			<a href="{{ route('login') }}">
				<img src="{{ asset('img/home/workers.png') }}">
				{{trans('sentence.for-employees')}}
			</a>
		</div>
		<div class="language">
			<form method='get' action='/setlocale'>
				<select name='locale' onchange="this.form.submit()">
					<option> {{ trans('sentence.select-locale') }}</option>
					<option value='en'> English language </option>
					<option value='ru'> Русский Язык </option>
				</select>
			</form>
		</div>
	</div>	
	<div class="window">
		<div class="left">
			<a class="butchery" href="/butchery/home">
				{{ trans('sentence.butchery') }}
				<img src="{{ asset('img/home/butchery.png') }}">
			</a>
		</div>

		<div class="right">
			<a class="barbecue" href="/barbecue/home">
				{{trans('sentence.barbecue')}}
				<img src="{{ asset('img/home/barbecue.png') }}">
		    </a>
		    <a class="garage" href="/garage/home">
		    	{{trans('sentence.garage')}}
		    	<img src="{{ asset('img/home/garage.png') }}">
		    
		    </a>
		</div>
	</div>
    


@endsection
