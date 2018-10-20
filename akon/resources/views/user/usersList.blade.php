@extends('layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item" style="margin-top:20px;">                        
                        <span>
                            <img src="">
                            {{$user->name}}
                        </span>

                        <span class="pull-right clearfix">
                            Joined {{$user->created_at}}
                            <a href="{{ url('/profile/'.$user->username) }}" class="btn btn-xs btn-success">show profile</a>
                        </span>

                    </li>
                @endforeach

                {{$users->links()}}
            </ul>
        </div>
    </div>

@endsection