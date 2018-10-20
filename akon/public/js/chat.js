$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

var username;

pullData();

$(document).ready(function(){

	username = $('#username').html();
	
	$(document).keyup(function(e){
		if(e.keyCode==13){
			sendMessage();
		}else{
			isTyping();
		}
	})
});


function pullData()
{
	retrieveChatMessages();
	retrieveTypingStatus();
}

function retrieveChatMessages(){
	// $.post('retrieveChatMessages', {username:username},function(data){
	// 	if(data.length>0){
	// 		$('#chat-window').append('<br><div>'+data+'</div><br>');
	// 	}
	// });

	$.ajax({
	    type: "POST",
	    url: '/retrieveChatMessages',
	    data: {'username':username},
	    success: function(value) {
	    	if(value.message.length>0){
				$('#chat-window').append('<br><div>'+value.message+'</div><br>');
			}
	    	alert("retrieve message");
	        
	     }
	});
}

function retrieveTypingStatus(){
	// $.post('retrieveTypingStatus',{username:username}, function(username){
	// 	if(username.length>0){
	// 		$('#typingStatus').html(username+' is typing');
	// 	}else{
	// 		$('#typingStatus').html('');
	// 	}
	// })

	$.ajax({
	    type: "POST",
	    url: '/retrieveTypingStatus',
	    data: {'username':username},
	    success: function(value) {
	    	if(value.typing){
				$('#typingStatus').html(value.typing+' is typing');
			}else{
				$('#typingStatus').html('');
			}
	    	alert("retrieve status");
	        
	     }
	});
}

function sendMessage(){

	var text = $('#text').val();

	if(text.length>0){

		// $.post('sendMessage', {text:text,username:username},function(){
		// 	$('#chat-window').append('<br><div style="text-align:right;"'+text+'</div><br>');
		// 	$('#text').val('');
		// 	notTyping();
		// });

		$.ajax({
            type: "POST",
            url: '/sendMessage',
            data: {'text':text,'username':username},
            success: function(value) {
            	$('#chat-window').append('<br><div style="text-align:right;"'+text+'</div><br>');
				$('#text').val('');
				notTyping();
                
             }
        });
	}
}

function isTyping(){
	// $.post('isTyping', {username: username});
	$.ajax({
	    type: "POST",
	    url: '/isTyping',
	    data: {'username':username},
	    success: function(value) {

	    }
	});
}

function notTyping(){
	// $.post('notTyping', {username: username});

	$.ajax({
	    type: "POST",
	    url: '/notTyping',
	    data: {'username':username},
	    success: function(value) {

	    }
	});
}

