<div ng-show="music" style="padding: 5px 15px 10px 15px;">
  <center><h2> << Music text >> </h2> </center>
  <form action="/createMusic" method="post">
       {{  csrf_field() }}
  <div  class="form-group"><label  for="song">Song :</label> 
  <input type="text" name="song" id="song" class="form-control" tabindex="1" /></div>
    <div  class="form-group">
        <label  for="artist">Artist :</label> 
        <input type="text" name="artist" id="artist" class="form-control" tabindex="2" />
    </div>
    <div  class="form-group">
      <label  for="album">Album :</label> 
      <input type="text" name="album" id="album" class="form-control" tabindex="3" />
    </div>
     <div  class="form-group">
       <label  for="text">Text :</label> 
        <textarea name="text" id="myArea3"  style="width: 280px; height: 100px; border: 1px solid #000; overflow: scroll;">
          
        </textarea>
    </div>
         <div  class="form-group"> 
           <label  for="priority">Priority:</label>
           <select name="priority" class="form-control" id="priority">
           <option value="1">no important</option>
           <option value="2">important</option>
           <option value="3">very important</option></select>
         </div>
     <div class="checkbox"><label><input type="checkbox" name="attach" value="1">Attach</label></div>

   <div class="row"> <div class="col-md-7"> </div><div class="col-md-5"><input type="submit" class="btn btn-default" value="Create" /> </div></div>
    <img src="{{ asset('images/music.png') }}" width="258"  height="268" style="margin-top: 10px;"  /> </form>
  </div>

