
<div ng-show="content6" >   
    <div class="w3-container" style="padding-top: 50px; padding-left: 80px; padding-right: 120px;  height: 400px;">
    <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()">
     <?php 
       $i = 0;
      ?>
    @foreach(array_chunk($people->getCollection()->all(), 100) as $row)
	  <div style=" overflow-y: auto; overflow-x: scroll; height: 400px;">
	 
      <table class="w3-table-all w3-card-4"  id="myTable" >
          <thead>
            <tr class="w3-light-grey w3-hover-red">
              <th>full name</th>
              <th>Nation</th>
              <th>Working place</th>
              <th>Occupation</th>
              <th>Birthday</th>
              <th>Gender</th>
              <th>Image</th>
              <th>Add inf.</th>
            </tr>
          </thead> 
                  @foreach($row as $value)
                        <tr class="w3-light-grey w3-hover-light-blue">
							<td><div  style=" width: 70px;"> <?php echo ucfirst($value->full_name); ?> </div></td>
							<td> <?php echo ucfirst($value->nation); ?></td>
							<td> <?php echo ucfirst($value->working_place); ?></td>
							<td> <?php echo ucfirst($value->occupation); ?></td>
							<td> <?php echo ucfirst($value->birthday); ?></td>
							<td> <?php echo ucfirst($value->gender); ?></td>
					  	<td><div  style=" width: 120px;"> <a href="#" onclick="document.getElementById('person{{$i}}').style.display='block'" > click link to show picture</a> </div></td>
                            <td> <div  style=" width:300px;">{{ $value->add_information }}</div> </td>
                        </tr>
                     <div id="person{{ $i }}" class="w3-modal" >
                      <div class="w3-modal-content  w3-animate-zoom " style="width:40%; height: 95%; overflow: scroll;  overflow-x: hidden;  border-radius: 20px; z-index: 2;">
                        <div class="w3-container "  onclick="document.getElementById('person{{ $i }}').style.display='none'">
                    
                          <h4 style="text-align: center; "><?php echo ucfirst($value->full_name); ?></h4>
                          <center>
                            <img src="{{ Storage::url('upload/'. $value->image) }}" alt="placeholder+image" width="400" height="400" >
                          </center>
                           
                        </div>
                      </div>   
                     </div>  
                     <?php $i++; ?>
                 @endforeach
       </table>
        
	  </div>
    @endforeach
    
 <div style="position: absolute; top: 547px; left: 400px; z-index: 1;">
     <center>
        {{ $people->appends(["navpage" => 'person'])->links() }}
     </center>   
 </div>   

  </div>
</div>


<script type="text/javascript">
	function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>