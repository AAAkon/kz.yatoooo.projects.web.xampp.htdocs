<div ng-show="content3" >   
    <div class="w3-container" style="padding-top: 50px; padding-left: 80px; padding-right: 120px;">
    <h1 id= "fheader"> Formulas </h1>
    @foreach(array_chunk($formulas->getCollection()->all(), 5) as $row)
      <table class="w3-table-all w3-card-4">
          <thead>
            <tr class="w3-light-grey w3-hover-red">
              <th>Name</th>
              <th>Fromula</th>
            </tr>
          </thead>
                  @foreach($row as $value)
                        <tr class="w3-hover-cyan w3-hover-text-gray">
                          <td> {{$value->name}}</td>
                          <td>  <?php echo nl2br($value->formula);  ?></td>
                        </tr>
         
                 @endforeach
       </table>
    @endforeach
    
 <div style="position: absolute; top: 587px; left: 400px;">
     <center>
        {{ $formulas->appends(["navpage" => 'formula'])->links() }}
     </center>   
 </div>   

     {{-- <div class="w3-round-xxlarge" id="next" ng-click="nextFunc()">
         <p>NEXT <i class="fa fa-arrow-right" ></i></p>
      </div> --}}
  </div>
</div>
<style type="text/css">
  
  #fheader{
     font-family: 'Comic Sans MS', cursive, sans-serif;
     text-align: center;
     color: #fff;
     margin-bottom: 10px;
  }
  #fheader:hover{
     color: cyan;
     cursor: default;
  }
</style>

