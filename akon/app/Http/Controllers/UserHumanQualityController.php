<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHumanQuality;
use App\UserHumanQualityClick;
use Auth;

class UserHumanQualityController extends Controller
{
    
    public function store($gender){
    	for($i=1;$i<=19;$i++)
    	{
			$uhq = new UserHumanQuality;
	    	$uhq->user_id = Auth::user()->id;
	    	$uhq->human_quality_id = $i;
	    	$uhq->sum = 0;
	    	$uhq->count = 0;
	    	$uhq->save();	
    	}

    	if($gender=="male"){
    		for($i=23;$i<=25;$i++)
	    	{
				$uhq = new UserHumanQuality;
		    	$uhq->user_id = Auth::user()->id;
		    	$uhq->human_quality_id = $i;
		    	$uhq->sum = 0;
		    	$uhq->count = 0;
		    	$uhq->save();	
	    	}
    	}elseif($gender=="female") {
    		for($i=20;$i<=22;$i++)
	    	{
				$uhq = new UserHumanQuality;
		    	$uhq->user_id = Auth::user()->id;
		    	$uhq->human_quality_id = $i;
		    	$uhq->sum = 0;
		    	$uhq->count = 0;
		    	$uhq->save();	
	    	}
    	}

    }

    public function update(Request $request){
    	//user_id
    	//clicked_user_id
    	//human_quality_id
    	//value
    	$uhqc = UserHumanQualityClick::where('user_id', '=', $request->user_id)->where('clicked_user_id','=',Auth::user()->id)->where('human_quality_id','=',$request->human_quality_id)->first();

    	$uhq = UserHumanQuality::where('user_id', '=', $request->user_id)->where('human_quality_id','=',$request->human_quality_id)->first();
    	if(count($uhqc)==0){

    		//user human quality  click  add
    		$uhqcc = new UserHumanQualityClick;
	    	$uhqcc->user_id = $request->user_id;
	    	$uhqcc->human_quality_id = $request->human_quality_id;
	    	$uhqcc->clicked_user_id = Auth::user()->id;
	    	$uhqcc->value = $request->value;
	    	$uhqcc->save();

	    	//user human quality update
	    	$uhq->sum = $uhq->sum + $request->value;
	    	$uhq->count = $uhq->count + 1;
	    	$uhq->save();
	    }else{

	    	//user human quality update
	    	$uhq->sum = $uhq->sum + $request->value - $uhqc->value;
	    	$uhq->save();

	    	//user human quality click update
	    	$uhqc->value = $request->value;
	    	$uhqc->save();
	    }

	    $uhq_value = round($uhq->sum / $uhq->count);
    	return response()->json([
		    'success' => 'yes',
		    'uhq_value'=> $uhq_value,
		  ]);
    }
}
