@extends('layouts.app')

@section('content')
 <div style="margin-top: 150px;" >
 <center>
  <h1> Ohhpps, Your old password does not match to your current password or  </h1>
  <h1> uncorrect new password !!!  </h1>
    <h3> Please, try again </h3>
     <a href="/user" role="button" class="btn btn-danger btn-sm">Back</a>
 </center>
</div>
@endsection