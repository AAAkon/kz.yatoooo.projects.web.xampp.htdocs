             <div ng-show="person" style="padding: 5px 15px 10px 15px;">
                 <center><h2> << Person >> </h2> </center>
                <form action="/createPerson" method="post" enctype="multipart/form-data">
                     {{  csrf_field() }}
                    <div  class="form-group">
                      <label  for="fullname">Full Name :</label> 
                      <input type="text" name="full_name" id="fullname" class="form-control" tabindex="1" />
                    </div>
                    <div  class="form-group">
                      <label  for="nation">Nation :</label> 
                      <input type="text" name="nation" id="nation" class="form-control" tabindex="2" />
                    </div>
                    <div  class="form-group">
                      <label  for="gender">Gender :</label>            
                         <select name="gender" class="form-control" id="gender">
                           <option value="male">male</option>
                           <option value="female">female</option>
                         </select>
                    </div>
                    <div  class="form-group">
                      <label  for="working_place">Working Place :</label> 
                      <input type="text" name="working_place" id="working_place" class="form-control" tabindex="2" />
                    </div>
                    <div  class="form-group">
                      <label  for="occupation">Occupation :</label> 
                      <input type="text" name="occupation" id="occupation" class="form-control" tabindex="2" />
                    </div>
                    <div  class="form-group">
                      <label  for="birthday">Birthday:</label> 
                      <input type="date" name="birthday" id="birthday" class="form-control" tabindex="2" />
                    </div>
                     <div  class="form-group">
                      <label  for="image">Picture :</label> 
                      <input type="file" name="image" id="image" class="form-control" tabindex="2" />
                    </div>
                    <div  class="form-group">
                     <label  for="addinfo">Additional information :</label> 
                      <textarea cols="40" rows="8" class="form-control" name="add_information" id="add_information">   
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
                    
                     <div class="row"> 
                       <div class="col-md-7"> </div>
                       <div class="col-md-5"><input type="submit" class="btn btn-default" value="Create" /> </div>
                     </div>
                      <img src="{{ asset('images/person-icon.png') }}"  width="258"  height="268" style="margin-top: 10px;" /> 
               </form>
              </div>