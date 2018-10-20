<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatMessage;
use App\Chat;
use App\User;
use Auth;

class ChatController extends Controller
{
    //

    public function index(){
        $user = User::where('id','=',Auth::user()->id)->first();
    	return view('user.chat', ['user'=>$user ]);
    }

    public function sendMessage(Request $request){

    	$username = $request->username;
    	$text = $request->text;

    	$chatMessage = new chatMessage();
    	$chatMessage->sender_username = $username;
    	$chatMessage->message = $text;
    	$chatMessage->save();

        return response()->json([
            'success' => 'yes',
        ]);
    	
    }

    public function isTyping(Request $request){
    	
    	$username = $request->username;

    	$chat = Chat::find(1);

    	if($chat->user1==$username){
    		$chat->user1_is_typing = true;
    	}else{
    		$chat->user2_is_typing = true;
    	}

    	$chat->save();

        return response()->json([
            'success' => 'yes',
        ]);
    }	

    public function notTyping(Request $request){
    	
    	$username = $request->username;

    	$chat = Chat::find(1);

    	if($chat->user1==$username){
    		$chat->user1_is_typing = false;
    	}else{
    		$chat->user2_is_typing = false;
    	}

    	$chat->save();

        return response()->json([
            'success' => 'yes',
        ]);
    }

    public function retrieveChatMessages(Request $request){
    	
    	$username = $request->username;

    	$message = ChatMessage::where('sender_username', '!=', $username)->where('read','=',false)->first();

    	if(count($message)>0){
    		$message->read = true;
    		$message->save();
    		return response()->json([
                'success' => 'yes',
                'message' => $message->message,
            ]);
    	}else{
            return response()->json([
                'success' => 'yes',
            ]);
        }

    }


    public function retrieveTypingStatus(Request $request){
    	
    	$username = $request->username;

    	$message = Chat::find(1);

    	if($chat->user1 == $username){
    		if($chat->user2_is_typing){

                return response()->json([
                    'success' => 'yes',
                    'typing' => $chat->user2,
                ]);
	    	}
    	}else{
    		if($chat->user1_is_typing){
	    		
	    		return response()->json([
                    'success' => 'yes',
                    'typing' => $chat->user1,
                ]);
	    	}
    	}

    }

    

}