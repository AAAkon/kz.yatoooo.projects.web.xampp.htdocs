@extends('layouts.master')

@section('title')
	Blade
@endsection

@section('body')
 		<div class="jumbotron">
          <h1 class="display-3">
          Your gender is a 
			@if($gender == 'male')
				male
			@elseif($gender == 'female')
			    female
			@else
				unknow
			@endif
          </h1>
          <p class="lead">
          	@unless(empty($text))
				{{ $text }}
          	@endunless

          </p>
          <p> {{isset($variableDoesntExist) ? $variableDoesntExist : "The vaiable does not exist. "}}</p>
     	  <p> {{$variableDoesntExist or "Variable realy does not exist!"}}</p>
          <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
        </div>

        <div class="row marketing">
          <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>

          <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>
        </div>
@endsection