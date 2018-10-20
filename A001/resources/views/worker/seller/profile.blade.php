@extends('layouts.worker')

@section('css')
	<style type="text/css">
		.brand-block{
			background-color: #f2f2f2;
		}

		.brand-block img{
			width: 80px;
			height: auto;
		}

		.brand-block span{
			position: absolute;
			bottom: 0px;
			left: 110px;
			font-size: 24px;
			font-weight: bold;
			text-transform: uppercase;
		}
	</style>
@endsection

@section('header')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 brand-block">
				<img src="{{ asset('img/worker/seller.png') }}">
				<span>seller</span>
			</div>
			
		</div>
	</div>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				Nav panel
			</div>
			<div class="col-md-10">
				Content
			</div>
		</div>
	</div>
@endsection