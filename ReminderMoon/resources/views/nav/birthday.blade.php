   <div ng-show="content" >  
              <canvas id="myCanvas" class="canvas"  ng-show="content" style="margin-top: 20px; margin-left: 70px;">
             
              </canvas> 

              <script type="text/javascript">
                 var canvasHeight = 567;
                 var canvasWidth = 802;
                 var canvas = new fabric.Canvas('myCanvas');
                 canvas.setHeight(canvasHeight);
                 canvas.setWidth(canvasWidth);
              </script>
              <?php $j = 0;  $i = 0;?>
                @foreach(array_chunk($birthdays->getCollection()->all(), 3) as $row)      
                        @foreach($row as $value)
                                
                          
                                   <?php
                                        if($j == 3){
                                            $i++;
                                            $j = 0;
                                        }
                                        $fdate = date("Y-m-d H:i:s"); 
                                        $tdate = $value->birthdate;
                                        $datetime1 = new DateTime($fdate);
                                        $datetime2 = new DateTime($tdate);
                                  
                                        $interval = $datetime1->diff($datetime2);
                                        $days = $interval->format('%R%a days');
                                      
                                         // $i++;
                                   ?>
      <script type="text/javascript">
            // Constants
          
            var borderColor = '9DD290';
            var cornerColor = '1A7206';
            var cornerSize = 6;

            canvas.on('object:modified', function (e) {
                var obj = e.target;
                var rect = obj.getBoundingRect();

                if (rect.left < 0
                    || rect.top < 0
                    || rect.left + rect.width > canvas.getWidth()
                    || rect.top + rect.height > canvas.getHeight()) {
                    if (obj.getAngle() != obj.originalState.angle) {
                        obj.setAngle(obj.originalState.angle);
                    }
                    else {
                        obj.setTop(obj.originalState.top);
                        obj.setLeft(obj.originalState.left);
                        obj.setScaleX(obj.originalState.scaleX);
                        obj.setScaleY(obj.originalState.scaleY);
                    }
                    obj.setCoords();
                }
            });

            var name = "Birthday of {{$value->name}}";
            var days = "{{   $days  }}";
            var length = name.length;
            var text = new fabric.Text(name  , {
                fontFamily: 'Comic Sans',
                fontSize: 20,
                top: 40,
                left: 10,
                shadow: 'rgba(0,0,0,0.3) 5px 5px 5px'
            });

            var text1 = new fabric.Text(days , {
                fontFamily: 'Comic Sans',
                fontSize: 23,
                top: 72,
                left: 45,
                shadow: 'rgba(0,0,0,0.3) 5px 5px 5px'
            });
            var rect = new fabric.Rect({
                fill: '#FFDD00',
                width: 150 + length + 19,
                height: 150,
       
            });

            var group = new fabric.Group([rect, text, text1], {
                left: {{ $j }} * 250 + 40,
                top: {{ $i }} * 200 + 70 + {{ $i }} *50,
                angle: fabric.util.getRandomInt(-15, 15),
                lockUniScaling: true,
                borderColor: borderColor,
                cornerColor: cornerColor,
                cornerSize: cornerSize,
                transparentCorners: false
            });

            canvas.add(group);
        
    </script>
    <?php
        $j++;
    ?>
        @endforeach

@endforeach
       <div style="position: absolute; top: 547px; left: 400px;">
                 <center>
                    {{ $birthdays->appends(["navpage" => 'birthday'])->links() }}
                 </center>   
             </div>
    </div>
       