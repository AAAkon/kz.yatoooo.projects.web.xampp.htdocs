@extends('layouts.app')

@section('css')
	@parent

	<style type="text/css">
		
		
	</style>
@endsection

@section('header')
	

    <a class="" href="/">{{ trans('sentence.butchery') }}</a>
     
    <nav class="navbar navbar-default">
        <div class="container-fuild">
            <ul class="nav navbar-nav">
            	<li><a href="/butchery/home">{{ trans('sentence.home') }}</a></li>
                <li><a href="/butchery/catalogue">{{ trans('sentence.catalogue') }}</a></li>
                <li><a href="/butchery/workers">{{ trans('sentence.workers') }}</a></li>
                <li><a href="/butchery/about">{{ trans('sentence.about') }}</a></li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <div class="container-fuild">
        <div class="col-md-12">
            Butchery - Home
            <p class="text-center "> {{ trans('sentence.welcome') }} {{ trans('sentence.butchery') }} </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/butchery/butchery.jpg') }}">
        </div>
        <div class="col-md-6">
            {{ trans('sentence.butchery-home-text') }}
        </div>
    </div>

    
@endsection


