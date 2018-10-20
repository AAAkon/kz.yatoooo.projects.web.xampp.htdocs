<div ng-show="content5" >   
    <div class="w3-container" style="padding-top: 50px; padding-left: 80px; padding-right: 120px;">
    <?php 
    $i = 0;
	?>
    @foreach(array_chunk($codes->getCollection()->all(), 3) as $row)
      <table class="w3-table-all w3-card-4">
          <thead>
            <tr class="w3-light-grey w3-hover-red">
              <th>Name</th>
              <th>Language</th>
              <th>Code</th>
              <th>Created</th>
            </tr>
          </thead>
                  @foreach($row as $value)
                        <tr class="w3-light-grey w3-hover-light-blue" onclick="document.getElementById('code{{$i}}').style.display='block'">
                          <td> <?php echo ucfirst($value->name); ?></td>
                          <td>  {{$value->language }}  </td>
                          <td>  <?php echo  strtok(nl2br($value->code), "\n") . " ...";   ?></td>
                          <td>  {{$value->created }}   </td>
                        </tr>

                    <div id="code{{ $i }}" class="w3-modal" >
                      <div class="w3-modal-content  w3-animate-zoom " style="width:40%; height: 70%; overflow: scroll;  overflow-x: hidden;  border-radius: 20px; z-index: 2;">
                        <div class="w3-container "  onclick="document.getElementById('code{{ $i }}').style.display='none'">
                        {{--   <span onclick="document.getElementById('id{{ $i }}').style.display='none'" class="w3-button w3-display-topright">&times;</span> --}}
                          <h4 style="text-align: center; "><?php echo ucfirst($value->name) . " using " . $value->language ; ?> </h4>
                          <div class="w3-code"><?php echo  nl2br($value->code); ?> </div>
                          <p style="text-align: right;">{{    $value->created     }}</p>
                        </div>
                      </div>   
                     </div>  
         			  <?php $i++; ?>
                 @endforeach
       </table>
    @endforeach
    
 <div style="position: absolute; top: 547px; left: 400px; z-index: 1;">
     <center>
        {{ $codes->appends(["navpage" => 'code'])->links() }}
     </center>   
 </div>   

  </div>
</div>



