<div ng-show="content2" >   
    <div class="w3-container" style="padding-top: 20px; padding-left: 40px;">
<?php 
    $i = 0;
?>
    @foreach(array_chunk($reminders->getCollection()->all(), 3) as $row)

                    @foreach($row as $value)
                    
                      <div class="col-md-5">
                             <div class="w3-panel w3-card <?php if($value->priority == 1){ echo 'w3-khaki'; }else if($value->priority == 2){ echo 'w3-yellow'; }else if($value->priority == 3){ echo 'w3-orange';} ?>"  onMouseOver="this.style.opacity='0.8'" onMouseOut="this.style.opacity='1'; this.style.cursor='default';" onclick="document.getElementById('id{{$i}}').style.display='block'" style="  margin-left: 70px;   overflow: scroll;  overflow-x: hidden; color: black;" >
               
                                 <h4 style="text-shadow:1px 1px 0 #fff; text-align: center;">{{    $value->name  }}</h4>
                                 <p style="text-shadow:1px 1px 0 #fff; text-align: left;">{{    substr($value->description, 0, 225) . " ..."      }}</p>
                                 <p style="text-shadow:1px 1px 0 #fff; text-align: right;">{{    $value->created   }}</p>
                          
                             </div>
                      </div>   
                       
                    <div id="id{{ $i }}" class="w3-modal" >
                      <div class="w3-modal-content w3-animate-zoom " style="width:40%">
                        <div class="w3-container" onclick="document.getElementById('id{{ $i }}').style.display='none'">
                        {{--   <span onclick="document.getElementById('id{{ $i }}').style.display='none'" class="w3-button w3-display-topright">&times;</span> --}}
                          <h4 style="text-align: center; ">{{   $value->name        }}</h4>
                          <p style="text-align: left; ">{{    $value->description }}</p>
                          <p style="text-align: right;">{{    $value->created     }}</p>
                        </div>
                      </div>   
                     </div>              

                 <?php $i++; ?>
                 @endforeach
     
    @endforeach
    
 <div style="position: absolute; top: 587px; left: 400px;">
     <center>
        {{ $reminders->appends(["navpage" => 'reminder'])->links() }}
     </center>   
 </div>   
<div style="position: absolute; top: 10px; left: 45px;" onclick="document.getElementById('modalhelp').style.display='block'">
   <i class="fa fa-question-circle-o" aria-hidden="true" id="help"></i>
</div>
          <div id="modalhelp" class="w3-modal" >
                      <div class="w3-modal-content w3-animate-zoom " style="width:40%">
                        <div class="w3-container" onclick="document.getElementById('modalhelp').style.display='none'">
                        
                        <h4 style="text-align: center; ">Meaning of colors</h4>
                        <div class="row" style=" margin-top: 20px; margin-left: 20px;">
                           <div class="col-md-6" style="width: 100px; border-radius: 10px; height: 30px; background-color: khaki; "> </div> 
                           <div class="col-md-6"> <p style="text-align: left;"> No important</p> </div>
                        </div>
                        <div class="row" style=" margin-top: 20px; margin-left: 20px;">
                           <div class="col-md-6"  style="width: 100px; border-radius: 10px; height: 30px;background-color: yellow; "> </div> 
                           <div class="col-md-6"> <p style="text-align: left;"> Important</p> </div>
                        </div>
                        <div class="row" style=" margin-top: 20px; margin-left: 20px; margin-bottom: 20px;">
                           <div class="col-md-6" style="width: 100px; border-radius: 10px; height: 30px;background-color: orange"> </div> 
                           <div class="col-md-6"> <p style="text-align: left;"> Very Important</p> </div>
                        </div>
                        </div>
                      </div>   
                     </div> 
  </div>
</div>


<style type="text/css">
  #help{
    font-size: 30px; 
    color: #fff;
  }
  #help:hover{
    font-size: 34px;
    color: red;
  }

</style>