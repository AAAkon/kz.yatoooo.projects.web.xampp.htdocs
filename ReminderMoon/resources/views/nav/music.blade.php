<div ng-show="content1" >   
    <div class="w3-container" style="padding-top: 20px; padding-left: 40px;">

    @foreach(array_chunk($musics->getCollection()->all(), 3) as $row)

                    @foreach($row as $value)
                    
                      <div class="col-md-5">
                             <div class="w3-panel w3-card <?php if($value->priority == 1){ echo 'w3-hover-noimportant'; }else if($value->priority == 2){ echo 'w3-hover-important'; }else if($value->priority == 3){ echo 'w3-hover-veryimportant';} ?>" onMouseOver="this.style.opacity='0.8'" onMouseOut="this.style.opacity='1'; this.style.cursor='default';" style="height: 120px; width: 300px; height: 545px; margin-left: 70px;   overflow: scroll;  overflow-x: hidden; padding-bottom: 20px;" >
            
                                 <h4 style="text-shadow:1px 1px 0 #fff; text-align: center;">{{    $value->song  }}</h4>
                                 <h3 style="text-shadow:1px 1px 0 #fff; text-align: center;">{{    $value->artist   }}</h3>
                                 <h4 style="text-shadow:1px 1px 0 #fff; text-align: center;">{{    $value->album   }}</h4>
                                 

                                <div style=" text-align: center; color: black; " >  <?php
                                                                    echo nl2br($value->text);
                                                                    ?></div>
                             </div>
                      </div>   
                           
                 @endforeach
     
    @endforeach
    
    </div>
 <div style="position: absolute; top: 584px; left: 200px;">

            {{ $musics->appends(["navpage" => 'music'])->links() }}
 </div>   
 
      <div style="position: absolute; top: 609px; left: 570px;">
 
       
        <div id="grad4">
        </div>
      </div>
    
  </div>
  <style type="text/css">
    ::-webkit-scrollbar {
        width: 0px;  /* remove scrollbar space */
        background: transparent;  /* optional: just make scrollbar invisible */
    }
    /* optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        background: #FF0000;
    }
    .w3-hover-noimportant:hover {color:#000 !important; background-color: #b4b5b7  !important}    /* gray */  
    .w3-hover-important:hover {color:#000 !important; background-color: #fae03c !important}  /* yellow */  
    .w3-hover-veryimportant:hover {color:#000 !important; background-color: #dd4132 !important} /*  red */
    #grad4 {
        height: 25px;
        width: 200px;
          border-radius: 10px;
        background: -webkit-linear-gradient(-90deg, #dd4132, #fae03c, #b4b5b7 ); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(-90deg, #dd4132, #fae03c, #b4b5b7 );  /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(-90deg, #dd4132, #fae03c, #b4b5b7 );  /* For Firefox 3.6 to 15 */
        background: linear-gradient(-90deg, #dd4132, #fae03c, #b4b5b7 );/* Standard syntax (must be last) */
     }

    .pagination > li > a,
    .pagination > li > span {
        color: #7A4519; // use your own color here
    }

    .pagination > .active > a,
    .pagination > .active > a:focus,
    .pagination > .active > a:hover,
    .pagination > .active > span,
    .pagination > .active > span:focus,
    .pagination > .active > span:hover {
        background-color: #7A4519;
        border-color: #7A4519;
    }
  </style>