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
	Butchery - catalogue

    <div class="container-fuild">
        <div class="col-md-9">
            
        </div>
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="/butchery/catalogue/beef">
                        Beef
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/butchery/catalogue/lamb">
                        Lamb
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/butchery/catalogue/pork">
                        Pork
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/butchery/catalogue/poultry">
                        Poultry
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
@endsection


