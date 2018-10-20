     <div ng-show="code" style="padding: 5px 15px 10px 15px;">
                 <center><h2> << Code >> </h2> </center>
                <form action="/createCode" method="post">
                     {{  csrf_field() }}
                    <div  class="form-group">
                      <label  for="name">Name :</label> 
                      <input type="text" name="name" id="name" class="form-control" tabindex="1" />
                    </div>
                    <div  class="form-group">
                      <label  for="language">Language :</label> 
                      <input type="text" name="language" id="language" class="form-control" tabindex="2" />
                    </div>
                    <div  class="form-group">
                      <label   for="code">Code:</label>   
                      <textarea id="myArea2" name="code" style="width: 280px; height: 100px; border: 1px solid #000; overflow: scroll;"> </textarea>
                     </div> 
                       <div  class="form-group"> 
                         <label  for="priority">Priority:</label>
                         <select name="priority" class="form-control" id="priority">
                         <option value="1">no important</option>
                         <option value="2">important</option>
                         <option value="3">very important</option></select>
                       </div>
                   <div class="checkbox"><label><input type="checkbox" name="attach" value="1">Attach</label></div>
                     <div class="row"> 
                       <div class="col-md-7"> </div>
                       <div class="col-md-5"><input type="submit" class="btn btn-default" value="Create" /> </div>
                     </div>
                      <img src="{{ asset('images/icon-code.png') }}"  width="258"  height="268" style="margin-top: 10px;" /> 
               </form>
              </div>