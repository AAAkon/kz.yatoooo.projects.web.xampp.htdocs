@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname*</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('patronymic') ? ' has-error' : '' }}">
                            <label for="patronymic" class="col-md-4 control-label">Patronymic*</label>

                            <div class="col-md-6">
                                <input id="patronymic" type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}" required autofocus>

                                @if ($errors->has('patronymic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('patronymic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('mother_name') ? ' has-error' : '' }}">
                            <label for="mother_name" class="col-md-4 control-label">Mother name*</label>

                            <div class="col-md-6">
                                <input id="mother_name" type="text" class="form-control" name="mother_name" value="{{ old('mother_name') }}" required autofocus>

                                @if ($errors->has('mother_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mother_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username*</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gender">
                                    <option value=""> choose... </option>
                                    <option value="male" <?php if(old('gender')=='male'){?> selected="selected" <?php } ?>> male </option>
                                    <option value="female" <?php if(old('gender')=='female'){?> selected="selected" <?php } ?>> female </option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        


                        <div class="form-group row{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('country_id') ? ' has-error' : '' }}">
                            <label for="country_id" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <select class="form-control" name="country_id" id="country_id" onchange="selectCountryChanged(this.value)">
                                    <option value=""> choose... </option>
                                    @foreach($countries as $country)
                                        <option <?php if(old('country_id')==$country->id){?> selected="selected" <?php } ?> value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('country_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('region_id') ? ' has-error' : '' }}">
                            <label for="region_id" class="col-md-4 control-label">Region</label>

                            <div class="col-md-6">
                                <select class="form-control" name="region_id" id="region_id"   onchange="selectRegionChanged(this.value)">
                                    <option value=""> choose... </option>
                                </select>

                                @if ($errors->has('region_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('region_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('city_id') ? ' has-error' : '' }}">
                            <label for="city_id" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <select class="form-control" name="city_id" id="city_id" onchange="selectCityChanged(this.value)">
                                    <option value=""> choose... </option>
                                </select>

                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('school_id') ? ' has-error' : '' }}">
                            <label for="school_id" class="col-md-4 control-label">School</label>

                            <div class="col-md-6">
                                <select class="form-control" name="school_id" id="school_id">
                                    <option value=""> choose... </option>
                                </select>

                                @if ($errors->has('school_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('university_id') ? ' has-error' : '' }}">
                            <label for="university_id" class="col-md-4 control-label">University</label>

                            <div class="col-md-6">
                                <select class="form-control" name="university_id" id="university_id">
                                    <option value=""> choose... </option>
                                </select>

                                @if ($errors->has('university_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('university_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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


@section('style')

@endsection


@section('script')
<script type="text/javascript">
    function selectCountryChanged(country_id){

        var regions = [
        @foreach ($regions as $region)
            [ "{{ $region->id }}", "{{ $region->name }}", "{{ $region->country_id }}"  ], 
        @endforeach
        ];

        // Clear options of select
        $("#region_id").empty();
        $("#city_id").empty();
        $("#school_id").empty();
        $("#university_id").empty();

        var select0 = document.getElementById('region_id');
        var opt0 = document.createElement('option');

        opt0.value = "";
        opt0.innerHTML = "choose";
        select0.appendChild(opt0);

        var select1 = document.getElementById('city_id');
        var opt1 = document.createElement('option');

        opt1.value = "";
        opt1.innerHTML = "choose";
        select1.appendChild(opt1);

        var select2 = document.getElementById('school_id');
        var opt2 = document.createElement('option');

        opt2.value = "";
        opt2.innerHTML = "choose";
        select2.appendChild(opt2);

        var select3 = document.getElementById('university_id');
        var opt3 = document.createElement('option');

        opt3.value = "";
        opt3.innerHTML = "choose";
        select3.appendChild(opt3);

        // disable and enable
        if(country_id!=""){

            // Add options to select
            var select = document.getElementById('region_id');
            var opt = document.createElement('option');

            for(var i=0;i<regions.length;i++){
                if(regions[i][2]==country_id){
                    var opt = document.createElement('option');
                    opt.value = regions[i][0];
                    opt.innerHTML = regions[i][1];
                    select.appendChild(opt);
                }
            }
        }
    }

    function selectRegionChanged(region_id){

        var cities = [
        @foreach ($cities as $city)
            [ "{{ $city->id }}", "{{ $city->name }}", "{{ $city->region_id }}"  ], 
        @endforeach
        ];

        // Clear options of select
        $("#city_id").empty();
        $("#school_id").empty();
        $("#university_id").empty();

        var select1 = document.getElementById('city_id');
        var opt1 = document.createElement('option');

        opt1.value = "";
        opt1.innerHTML = "choose";
        select1.appendChild(opt1);

        var select2 = document.getElementById('school_id');
        var opt2 = document.createElement('option');

        opt2.value = "";
        opt2.innerHTML = "choose";
        select2.appendChild(opt2);

        var select3 = document.getElementById('university_id');
        var opt3 = document.createElement('option');

        opt3.value = "";
        opt3.innerHTML = "choose";
        select3.appendChild(opt3);

        // disable and enable
        if(region_id!=""){
            // Add options to select
            var select = document.getElementById('city_id');
            var opt = document.createElement('option');

            for(var i=0;i<cities.length;i++){
                if(cities[i][2]==region_id){
                    var opt = document.createElement('option');
                    opt.value = cities[i][0];
                    opt.innerHTML = cities[i][1];
                    select.appendChild(opt);
                }
            }
        }
    }

    function selectCityChanged(city_id){

        var schools = [
        @foreach ($schools as $school)
            [ "{{ $school->id }}", "{{ $school->name }}", "{{ $school->city_id }}"  ], 
        @endforeach
        ];

        var universities = [
        @foreach ($universities as $university)
            [ "{{ $university->id }}", "{{ $university->name }}", "{{ $university->city_id }}"  ], 
        @endforeach
        ];



        // Clear options of select
        $("#school_id").empty();
        $("#university_id").empty();

        var select2 = document.getElementById('school_id');
        var opt2 = document.createElement('option');

        opt2.value = "";
        opt2.innerHTML = "choose";
        select2.appendChild(opt2);

        var select3 = document.getElementById('university_id');
        var opt3 = document.createElement('option');

        opt3.value = "";
        opt3.innerHTML = "choose";
        select3.appendChild(opt3);

        // disable and enable
        if(city_id!=""){

            // Add options to select
            var select = document.getElementById('school_id');
            var opt = document.createElement('option');

            for(var i=0;i<schools.length;i++){
                if(schools[i][2]==city_id){
                    var opt = document.createElement('option');
                    opt.value = schools[i][0];
                    opt.innerHTML = schools[i][1];
                    select.appendChild(opt);
                }
            }

            // Add options to select
            var select0 = document.getElementById('university_id');
            var opt0 = document.createElement('option');

            for(var i=0;i<universities.length;i++){
                if(universities[i][2]==city_id){
                    var opt0 = document.createElement('option');
                    opt0.value = universities[i][0];
                    opt0.innerHTML = universities[i][1];
                    select0.appendChild(opt0);
                }
            }
            
        }
    }
</script>
@endsection
