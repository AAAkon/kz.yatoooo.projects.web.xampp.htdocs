	<div class="form-cantainer" style="margin-top:70px">
		<center><h1 class="title">Sign up to create account:</h1><br><br></center>
		<form name="myForm" action="?action=registration" method="post" onsubmit="return checkInp()">
		  <div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <div class="form-group">
		    <label for="surname">Surname:</label>
		    <input type="text" class="form-control" name="surname">
		  </div>
		  <div class="form-group">
      			<label for="sel1">Choose your age:</label>
      				<select class="form-control" id="sel1" name="age">
       
				    	<option value="0"> - </option>
				    	<?php
				    		for($i=7;$i<100;$i++){
				    			?>
				    				<option value='<?php echo $i; ?>'><?php echo $i; ?></option>
				    			<?php
				    		}
				    	?>
			   		</select>
		  </div>
		  <div class="form-group">
      			<label for="sel1">You are ...</label>
      				<select class="form-control" id="sel1" name="role">
       
				    	<option value="0"> - </option>
				    	<option value="1"> Admin </option>
				    	<option value="2"> Student </option>
			   		</select>
		  </div>
		  <div class="form-group">
		    <label for="login">Login:</label>
		    <input type="text" class="form-control" name="login">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" name="password">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Confirm password:</label>
		    <input type="password" class="form-control" name="password2">
		  </div>
		  <button type="submit" class="btn btn-info right">Sign up</button>
		  <hr>
		  <span class="question">You have account...</span>
		  <a href="?page=login" class="btn btn-link right">log in</a>
		</form>
	</div>

	<script type="text/javascript">
		
		function checkInp()
		{
		  var x=document.forms["myForm"]["password"].value;
		  if (x.length<8) 
		  {
		    alert("password length must be at least 8 character");
		    return false;
		  }
		}
	</script>