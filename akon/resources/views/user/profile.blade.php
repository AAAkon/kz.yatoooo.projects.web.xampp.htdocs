@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
    		<img class="profile-img" src="https://pre00.deviantart.net/1c8f/th/pre/i/2015/283/8/4/one_punch_man_vector_by_kuyamark96-d9cn1li.png">
    		<h1>{{$user->name}} {{$user->surname}}</h1>
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong> 20,7K </strong></h2>                    
                    <p><small>Followers</small></p>
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Following</small></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>43</strong></h2>                    
                    <p><small>Snippets</small></p>
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                        <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                      </ul>
                    </div>
                </div>
            </div>              
		</div>
		<div class="col-md-5">
            <table class="table table-user-information">
	            <tbody>
					<tr>
						<td>Name:</td>
						<td>{{$user->name}}</td>
					</tr>
					<tr>
						<td>Surname:</td>
						<td>{{$user->surname}}</td>
					</tr>
					<tr>
						<td>Patronymic:</td>
						<td>{{$user->patronymic}}</td>
					</tr>
					<tr>
						<td>Mother's name:</td>
						<td>{{$user->mother_name}}</td>
					</tr>
					<tr>
						<td>Date of Birth:</td>
						<td>{{$user->date}}</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>{{$user->gender}}</td>
					</tr>
					<tr>
						<td>Email</td>
						<td><a href="{{$user->email}}">{{$user->email}}</a></td>
					</tr>
					@if(count($country)===1)
					<tr>
						<td>Country</td>
						<td>{{$country->name}}</td>
					</tr>
					@endif
					@if(count($region)===1)
					<tr>
						<td>Region</td>
						<td>{{$region->name}}</td>
					</tr>
					@endif
					@if(count($city)===1)
					<tr>
						<td>City</td>
						<td>{{$city->name}}</td>
					</tr>
					@endif
					@if(count($user->school_id)===1)
					<tr>
						<td>School</td>
						<td>{{$user->school_id}}</td>
					</tr>
					@endif
					@if(count($user->university_id)===1)
					<tr>
						<td>University</td>
						<td>{{$user->university_id}}</td>
					</tr>
					@endif
					@if(count($user->phone)===1)
					<tr>
						<td>Phone Number</td>
						<td>{{$user->phone}}</td>
					</tr>
					@endif
	            </tbody>
          </table>      
		</div>
		
	</div>
	<div class="row">
		
	</div>
	<div class="row">
			<div class="col-md-6">
				

			</div>
			
			
			<div class="col-md-6" id="user_human_qualities_div">
				<h4>Rating breakdown: </h4>
			</div>			
	</div>
</div>
@endsection



@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

<script type="text/javascript">

	var uhqs = [
        @foreach ($uhqs as $uhq)
            [ "{{ $uhq->id }}", "{{ $uhq->user_id }}", "{{ $uhq->human_quality_id }}","{{ $uhq->sum }}","{{ $uhq->count }}"  ], 
        @endforeach
        ];

    var hqls = [
        @foreach ($hqls as $hql)
            [ "{{ $hql->id }}", "{{ $hql->name }}", "{{ $hql->name_in_russian }}"  ], 
        @endforeach
        ];


    for(var i=0;i<uhqs.length;i++){
    	if(uhqs[i][2]>0 && uhqs[i][2]<=8){
    		$('#user_human_qualities_div').append(" <div class='pull-left'><div class='pull-left' style='width:150px; line-height:1;'><div style='height:9px; margin:5px 0;'>"+ hqls[uhqs[i][2]][1] +": <span style='color:red;' id='"+uhqs[i][2]+"text'></span></div></div><div class='pull-left' style='width:180px;'><div onmousemove='MouseMove(event,this,"+uhqs[i][2]+")' onmouseout='MouseOut(event,this,"+uhqs[i][2]+")' onclick='MouseClick(event,this,"+uhqs[i][2]+")' id='"+uhqs[i][2]+"'   class='progress' style='height:9px; margin:8px 0;'><div id='"+uhqs[i][2]+"inside' class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='4' aria-valuemin='0' aria-valuemax='5' style='width:"+ uhqs[i][3]/uhqs[i][4] +"%'></div><div></div><div class='pull-right' style='margin-left:10px;'></div></div>");
    	}else if(uhqs[i][2]>8 && uhqs[i][2]<=19){
    		$('#user_human_qualities_div').append(" <div class='pull-left'><div class='pull-left' style='width:150px; line-height:1;'><div style='height:9px; margin:5px 0;'>"+ hqls[uhqs[i][2]][1] +": <span style='color:green;' id='"+uhqs[i][2]+"text'></span></div></div><div class='pull-left' style='width:180px;'><div id='"+uhqs[i][2]+"' onmousemove='MouseMove(event,this,"+uhqs[i][2]+")'  onmouseout='MouseOut(event,this,"+uhqs[i][2]+")' onclick='MouseClick(event,this,"+uhqs[i][2]+")' class='progress' style='height:9px; margin:8px 0;'><div id='"+uhqs[i][2]+"inside' class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='4' aria-valuemin='0' aria-valuemax='5' style='width:"+ uhqs[i][3]/uhqs[i][4] +"%'></div><div></div><div class='pull-right' style='margin-left:10px;'></div></div> ");
    	}else if(uhqs[i][2]>19 && uhqs[i][2]<=25){
    		$('#user_human_qualities_div').append(" <div class='pull-left'><div class='pull-left' style='width:150px; line-height:1;'><div style='height:9px; margin:5px 0;'>"+ hqls[uhqs[i][2]][1] +": <span style='color:orange;' id='"+uhqs[i][2]+"text'></span></div></div><div class='pull-left' style='width:180px;'><div id='"+uhqs[i][2]+"' onmousemove='MouseMove(event,this,"+uhqs[i][2]+")' onmouseout='MouseOut(event,this,"+uhqs[i][2]+")' onclick='MouseClick(event,this,"+uhqs[i][2]+")' class='progress' style='height:9px; margin:8px 0;'><div id='"+uhqs[i][2]+"inside' class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='4' aria-valuemin='0' aria-valuemax='5' style='width:"+ uhqs[i][3]/uhqs[i][4] +"%'></div><div></div><div class='pull-right' style='margin-left:10px;'></div></div> ");
    	}
    }
    
    function MouseMove(e,$this,$id) {

    		var $this = $($this);
	        var widthclicked = Math.round((e.pageX - $this.offset().left)/1.8);
	        document.getElementById($id+"text").innerHTML = widthclicked;
	}

	function MouseOut(e,$this,$id) {

	        document.getElementById($id+"text").innerHTML = "";
	}

	function MouseClick(e,$this,$id) {
    	
	    var $this = $($this);
        var widthclicked = Math.round((e.pageX - $this.offset().left)/1.8);
    	
    	 $.ajax({
            type: "POST",
            url: '/uhq',
            data: {'user_id': {{$user->id}}, 'human_quality_id': $id, 'value': widthclicked },
            success: function(value) {
            	document.getElementById($id+"inside").setAttribute("style","width:"+value.uhq_value + "%");
                
             }
        });
		

		    

// var request = "{'user_id':'" + 2 + "'human_quality_id':'" + 1 +"'value':'" + 100 + "'}";
//       $.ajax({
//             type: 'POST',
//             url: '/uhq',
//             data: request,
//             contentType: "application/json; charset=utf-8",
//             dataType: "json",
//             success: function (msg) { },
//             error: function (xhr, status, error) {
//                 alert(error.responseText);
//             }

//         });
//     var myJsonData = {user_id:1,human_quality_id: 1,value:1};
//     $.post('/uhq', myJsonData, function(response) {
//         console.log(response);
//     });

		
	}
</script>

@endsection

@section('style')
  	<style type="text/css">

  		

  		.profile-img{
  			max-width: 150px;
  			border:5px solid #fff;
  			border-radius: 100%;
  			box-shadow: 0 2px 2px rgba(0,0,0,0.3);
  		}

		.profile 
		{
		    min-height: 355px;
		    display: inline-block;
		    }
		figcaption.ratings
		{
		    margin-top:20px;
		}

		figcaption.ratings a
		{
		    color:#f1c40f;
		    font-size:11px;
		}

		figcaption.ratings a:hover
		{
		    color:#f39c12;
		    text-decoration:none;
		    }
		.divider 
		{
		    border-top:1px solid rgba(0,0,0,0.1);
		    }
		.emphasis 
		{
		    border-top: 4px solid transparent;
		    }
		.emphasis:hover 
		{
		    border-top: 4px solid #1abc9c;
		    }
		.emphasis h2
		{
		    margin-bottom:0;
		    }
		span.tags 
		{
		    background: #1abc9c;
		    border-radius: 2px;
		    color: #f5f5f5;
		    font-weight: bold;
		    padding: 2px 4px;
		    }
		.dropdown-menu 
		{
		    background-color: #34495e;    
		    box-shadow: none;
		    -webkit-box-shadow: none;
		    width: 250px;
		    margin-left: -125px;
		    left: 50%;
		    }
		.dropdown-menu .divider 
		{
		    background:none;    
		    }
		.dropdown-menu>li>a
		{
		    color:#f5f5f5;
		    }
		.dropup .dropdown-menu 
		{
		    margin-bottom:10px;
		    }
		.dropup .dropdown-menu:before 
		{
		    content: "";
		    border-top: 10px solid #34495e;
		    border-right: 10px solid transparent;
		    border-left: 10px solid transparent;
		    position: absolute;
		    bottom: -10px;
		    left: 50%;
		    margin-left: -10px;
		    z-index: 10;
		}
  	</style>
@endsection