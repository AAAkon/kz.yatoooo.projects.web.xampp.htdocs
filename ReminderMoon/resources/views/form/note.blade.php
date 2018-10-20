                <div ng-show="note" style="padding: 5px 15px 10px 15px;">
                   <center><h2> << Notes >> </h2> </center>
                   <form action="/createNote" method="post">
                   {{  csrf_field() }}
                   <div  class="form-group">
                   <label  for="name">Name :</label> 
                   <input type="text" name="name" id="name" class="form-control" tabindex="1" />
                   </div>
                   <div  class="form-group">
                   <label for="description">Description:</label>
                   <textarea cols="40" rows="8" class="form-control" name="description" id="description"></textarea></div> 
                   <div  class="form-group"> 
                   <label  for="priority">Priority:</label>
                   <select name="priority" class="form-control" id="priority">
                   <option value="1">no important</option>
                   <option value="2">important</option>
                   <option value="3">very important</option></select>
                   </div>
                   <div class="checkbox"><label><input type="checkbox" name="attach" value="1">Attach</label></div>
                   <div class="row"> <div class="col-md-7"> </div>
                   <div class="col-md-5"><input type="submit" class="btn btn-default" value="Create" /> </div></div> </form>
                </div>