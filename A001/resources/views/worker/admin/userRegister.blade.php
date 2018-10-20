@extends('layouts.worker')

@section('javascript')
    @parent
    <script src="{{ asset('js/maskedinput.js') }}" type="text/javascript"></script>
@endsection

@section('header')
    @include('worker.admin.components.header')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-md-2">
            <div class="list-group nav">
                <a href="{{ route('worker-admin-profile') }}" class="list-group-item ">My profile</a>
                <a href="{{ route('worker-admin-users')}}" class="list-group-item">Users list</a>
                <a href="{{ route('worker-admin-user-register') }}" class="list-group-item list-group-item-warning">User register</a>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-1 content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">{{trans('sentence.name')}}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <label for="surname" class="col-md-4 control-label">{{trans('sentence.surname')}}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                    @if ($errors->has('surname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">{{trans('sentence.address')}}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">{{trans('sentence.phone-num')}}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}"  required autofocus >

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                <label for="dob" class="col-md-4 control-label">{{trans('sentence.d-o-b')}}</label>

                                <div class="col-md-6">
                                    <input id="dob" type="text" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>

                                    @if ($errors->has('dob'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('dob') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">{{trans('sentence.email')}}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('profession') ? ' has-error' : '' }}">
                                <label for="profession" class="col-md-4 control-label">{{trans('sentence.profession')}}</label>

                                <div class="col-md-6">
                                    <input id="profession" type="text" class="form-control" name="profession" value="{{ old('profession') }}" required autofocus>

                                    @if ($errors->has('profession'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('profession') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">{{trans('sentence.username')}}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">{{trans('sentence.password')}}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">{{trans('sentence.confirm-password')}}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        

                        
                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-9">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('sentence.register')}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
