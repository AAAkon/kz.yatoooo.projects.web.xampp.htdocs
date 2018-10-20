<div ng-show="birthday" style="padding: 5px 15px 10px 15px;">
    
    <center><h2> << Birthday >> </h2> </center>
    <form action="/createBirthdate" method="post">
     {{  csrf_field() }}
      <div  class="form-group"><label  for="name">Name :</label> 
         <input type="text" name="name" id="name" class="form-control" tabindex="1" />
      </div>
    <div  class="form-group">
         <label   for="birthdate">Date:</label>       
         <input type="date" name="birthdate" id="birthdate" class="form-control" tabindex="1" />
     </div>

      <div class="checkbox"><label><input type="checkbox" name="attach" value="1">Attach</label></div>
    <div class="row"> <div class="col-md-7"> </div><div class="col-md-5"><input type="submit" class="btn btn-default" value="Create" /> </div></div>
      <img src="{{ asset('images/icon-birthday.png') }}" width="258"  height="268" style="margin-top: 10px;"  /> 
    </form>
</div>