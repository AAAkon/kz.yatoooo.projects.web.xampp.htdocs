@extends('layouts.app')

@section('content')

{{--   <script src="{{ asset('js/nicEdit.js') }}"></script> --}}
<?php

  $user_id =  Auth::id();  
?>
<div ng-app="myApp"  class="container" style="margin: 0px; width: auto; ">
    <div class="row" >
        <div class="col-md-3" >
            <div class="panel panel-default" style=" overflow: scroll; height: 669px; width: 318px;">
                <div class="panel-heading">Create</div>
          
                <div ng-controller="myCtrl">

               <div id="category_list">
                       <select class="form-control" ng-model="selectedCar" ng-options="payloadSecteur for payloadSecteur in payloadSecteur"> </select>
                       <div id="buttons">
                              <button class="btn btn-danger form-control" ng-click="myFunc()">Try it</button>
                       </div>    
                </div>   
                 @include('form.note') 
                 @include('form.formula') 
                 @include('form.code') 
                 @include('form.person') 
                 @include('form.birthday')
                 @include('form.music')

                </div>
              
            </div>
        </div>

        <div class="col-md-6" >
            <div class="panel panel-default" style="width: 967px; height: 670px;  background-image: url({{ asset('images/bookbackgroundme.jpg') }});  background-size: cover;">
            {{--    <canvas id="c" width="967" height="570" style="margin-top: 0px; margin-left: 0px;"></canvas> --}}
          <div ng-controller="myCtrl1">
 
              <div  id="navbirthday" ng-click="myFunc1()">  <p class="navp">    Birthday date   </p>  </div>  
              <div  id="navmusic" ng-click="myFunc2()">   <p class="navp">  Music text  </p>  </div>   
              <div  id="navremin" ng-click="myFunc3()">   <p class="navp">  Reminder  </p>  </div>    
              <div  id="navformule" ng-click="myFunc4()">   <p class="navp">  Formula  </p>  </div>   
              <div  id="navother" ng-click="myFunc5()">   <p class="navp">  Other </p>  </div>  
             

              @include('nav.birthday')
              @include('nav.music')
              @include('nav.reminder')
              @include('nav.formula')
              @include('nav.other')
          </div>
             </div> 
            </div>
        </div>
         
    </div>



<style type="text/css">

    #c {
      background-color: grey;
      margin-top: 10px;
    }
    #buttons{
      padding: 10px 20px 5px 20px;
    }
    #contentBirthday{
      background-color: grey;
      width: 200px;
      height: 100px;
    }
</style>


<script>
function toggleArea1() {
    area1 = new nicEditor({fullPanel : true}).panelInstance('myArea1',{hasPanel : true});
    area2 = new nicEditor({fullPanel : true}).panelInstance('myArea2',{hasPanel : true});
    area3 = new nicEditor({fullPanel : true}).panelInstance('myArea3',{hasPanel : true});
}

bkLib.onDomLoaded(function() { toggleArea1(); });
</script>
{{-- <script type="text/javascript">
   $(function(){
      $("#textarea").htmlarea();
  });
</script> --}}
<?php
   $nav = (is_null(request("navpage")) || empty(request("navpage")) || strlen(request("navpage")) < 1 ? "NULL" : request("navpage"));
?>
<script>
app = angular.module('myApp', []);  

app.controller('myCtrl1', [              
    '$scope',   function myCtrl1($scope) {        
      $scope.content = false;    $scope.content1 = false;   $scope.content2 = false;  $scope.content3 = false; 
      $scope.content4 = false;   $scope.content5 = false;   $scope.content6 = false;  $scope.content7 = false;
     

      var nav = "{{ $nav }}"; 
      if(nav.localeCompare("NULL") != 0)
      {
          if(nav.localeCompare("birthday") == 0){
              $scope.content = true;
          }else if(nav.localeCompare("music") == 0){
              $scope.content1 = true;
          }else if(nav.localeCompare("reminder") == 0){
              $scope.content2 = true;
          }else if(nav.localeCompare("formula") == 0){
              $scope.content3 = true;
          }else if(nav.localeCompare("code") == 0){
              $scope.content4 = true;
              $scope.content5 = true;
          }else if(nav.localeCompare("person") == 0){
              $scope.content4 = true;
              $scope.content6 = true;
          }
      }
     
      $scope.myFunc1 = function() {
          $scope.content = !$scope.content;   
           $scope.content1 = false;   $scope.content2 = false;   $scope.content3 = false; 
           $scope.content4 = false;   $scope.content5 = false;   $scope.content6 = false;
      }
      $scope.myFunc2 = function() {
          $scope.content1 = !$scope.content1;
           $scope.content = false;   $scope.content2 = false;   $scope.content3 = false; 
           $scope.content4 = false;   $scope.content5 = false;   $scope.content6 = false;
      }
      $scope.myFunc3 = function() {
          $scope.content2 = !$scope.content2;
           $scope.content1 = false;   $scope.content = false;   $scope.content3 = false; 
           $scope.content4 = false;   $scope.content5 = false;   $scope.content6 = false;
      }
      $scope.myFunc4 = function() {
          $scope.content3 = !$scope.content3;
           $scope.content1 = false;   $scope.content2 = false;   $scope.content = false; 
           $scope.content4 = false;   $scope.content5 = false;   $scope.content6 = false;
      }
      $scope.myFunc5 = function() {
          $scope.content4 = !$scope.content4;
          $scope.content7 = !$scope.content7;
           $scope.content1 = false;   $scope.content2 = false;   $scope.content3 = false; 
           $scope.content = false;   $scope.content5 = false;   $scope.content6 = false;
      }     
     $scope.myFunc6 = function() {
          $scope.content5 = !$scope.content5;
           $scope.content1 = false;   $scope.content2 = false;   $scope.content3 = false; 
           $scope.content = false;   $scope.content6 = false;    $scope.content7 = false;
      }   
      $scope.myFunc7 = function() {
          $scope.content6 = !$scope.content6;
           $scope.content1 = false;   $scope.content2 = false;   $scope.content3 = false; 
           $scope.content5 = false;   $scope.content = false;    $scope.content7 = false;
      }                
    }                                                
]);   

app.controller('myCtrl', [              
    '$scope',    function myCtrl($scope) {
    $scope.payloadSecteur = ['Reminder', 'Formula', 'Code', 'Person', 'Birth date', 'Music'];
    $scope.note = false;  $scope.birthday = false;  $scope.person = false;    $scope.code = false;   $scope.formula = false; $scope.music = false;
     
    $scope.myFunc = function() {
       var x = $scope.selectedCar;
       var x1 = "Reminder", x2 = "Formula", x3 = "Code", x4 = "Person", x5 = "Birth date"; x6 = "Music";
      if(x1.localeCompare(x.toString()) == 0){
        $scope.note = !$scope.note;
        $scope.formula = false;    $scope.code = false;  $scope.person = false; $scope.birthday = false; $scope.music = false;
      }else if(x2.localeCompare(x.toString()) == 0){
        $scope.formula = !$scope.formula;
        $scope.note = false;    $scope.code = false;  $scope.person = false; $scope.birthday = false; $scope.music = false;
      }else if(x3.localeCompare(x.toString()) == 0){
        $scope.code = !$scope.code;
         $scope.note = false;    $scope.formula = false;  $scope.person = false; $scope.birthday = false; $scope.music = false;
      }else if(x4.localeCompare(x.toString()) == 0){
        $scope.person = !$scope.person;
        $scope.note = false;    $scope.code = false;  $scope.formula = false; $scope.birthday = false; $scope.music = false;
      }else if(x5.localeCompare(x.toString()) == 0){
        $scope.birthday = !$scope.birthday;
        $scope.note = false;    $scope.code = false;  $scope.formula = false; $scope.person = false;  $scope.music = false;
      }
      else if(x6.localeCompare(x.toString()) == 0){
        $scope.music = !$scope.music;
        $scope.note = false;    $scope.code = false;  $scope.formula = false; $scope.person = false; $scope.birthday = false;
      }
    }
}]);
</script>

<style type="text/css">
 

  #category_list{
    padding: 5px 10px 0px 10px;
  }
  #navbirthday{   background-color: #D53525;    width: 68px;   height: 65px;   position: absolute;   left: 910px;   top: 40px;  padding-top: 10px;
  }
  #navbirthday:hover{
      box-shadow: 5px 5px 30px 5px #214BD5;
      cursor: default;
  }
  #navmusic{
    background-color: #214BD5;  width: 65px;   height: 65px;   position: absolute;    left: 915px;    top: 170px;  padding-top: 10px;
  }
  #navmusic:hover{
      box-shadow: 5px 5px 30px 5px #44BE1E;
      cursor: default;
  }
  #navformule{
    background-color: #9410A4;  width: 63px;   height: 68px;   position: absolute;    left: 918px;    top: 413px;  padding-top: 10px;
  }
  #navformule:hover{
      box-shadow: 5px 5px 30px 5px #F4F416;
      cursor: default;
  }
 #navother{
    background-color: #F4F416;  width: 61px;   height: 68px;   position: absolute;    left: 921px;    top: 541px;  padding-top: 10px;
  }
  #navother:hover{
      box-shadow: 5px 5px 30px 5px #D53525;
      cursor: default;
  }
  #navremin{
    background-color: #44BE1E; 
    width: 62px; 
    height: 67px; 
    position: absolute; 
    left: 917px; 
    top: 288px;
    padding-top: 10px;
  }
  #navremin:hover{
      box-shadow: 5px 5px 30px 5px #9410A4;
      cursor: default;
  }
  .navp{
    color: #fff;
    font-size: 17px;
    word-wrap: break-word;
    text-align: center;
  }
</style>

<script type="text/javascript">
      var canvas = new fabric.Canvas('c');

      fabric.Image.fromURL('{{ asset('images/bookbackgroundme.jpg') }}', function(img){
        img.setWidth(967);
        img.setHeight(570);
        img.set({
          selectable: false,  
        });
       
        canvas.add(img);
      });

      $("#b").click(function(){
        $("#c").get(0).toBlob(function(blob){
          alert("hello");
          saveAs(blob, "myIMG.png");
        });
      });
    </script>




@endsection


 {{--    <script type="text/javascript">
   // alert("hello");
   var canvas = new fabric.Canvas('c');

    fabric.Image.fromURL('{{ asset('images/bookbackgroundme.jpg') }}', function(img){
      img.setWidth(200);
      img.setHeight(200);
      canvas.add(img);
    });

    </script> --}}
{{--     <script type="text/javascript">
    var canvas = new fabric.Canvas('c');

    fabric.Image.fromURL('{{ asset('images/bookbackgroundme.jpg') }}', function(img){
      img.setWidth(200);
      img.setHeight(200);
      canvas.add(img);
      
      img.animate('left','+=100',{
        onChange: canvas.renderAll.bind(canvas),
        duration: 1000,
        easing: fabric.util.ease.easeOutBounce
      });
      img.animate('angle','+=5',{
        onChange: canvas.renderAll.bind(canvas),
        duration: 1000
      });
    });
    </script> --}}

{{-- <script type="text/javascript">
  (function() {
  var canvas = this.__canvas = new fabric.Canvas('c');
  fabric.Object.prototype.originX = fabric.Object.prototype.originY = 'center';
  fabric.Object.prototype.transparentCorners = false;

  for (var i = 0, len = 1; i < len; i++) {
    for (var j = 0, jlen = 1; j < jlen; j++) {
      fabric.Sprite.fromURL('{{ asset('images/sprite.png') }}', createSprite(i, j));
    }
  }

  function createSprite(i, j) {
    return function(sprite) {
      sprite.set({
        left: i * 100 + 50,
        top: j * 100 + 50,
        angle: fabric.util.getRandomInt(-30, 30)
      });
      canvas.add(sprite);
      setTimeout(function() {
        sprite.play();
      }, fabric.util.getRandomInt(1, 10) * 100);
    };
  }

  (function render() {
    canvas.renderAll();
    fabric.util.requestAnimFrame(render);
  })();
})();


</script> --}}
{{--         <div class="col-md-6" >
            <div class="panel panel-default">
                <div class="panel-heading">Notes</div>
                <div class="panel-body">
                <center>
                     <q style="color: #ff6600; transition: .5s; -moz-transition: .5s; -webkit-transition: .5s; -o-transition: .5s; font-family: 'Muli', sans-serif;">
                       There are will be appear your notes.
                     </q>
                   
                   
                </center>
                  
                </div>
            </div>
        </div>
         <div class="col-md-3" >
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>
                <div class="panel-body">
                   <center>
                     <q style="color: #ff6600; transition: .5s; -moz-transition: .5s; -webkit-transition: .5s; -o-transition: .5s; font-family: 'Muli', sans-serif;">
                       There are will be appear categories of your notes.
                     </q>
                    </center>
                </div>
            </div>
        </div> --}}



          {{--  <form action="?" method="post">
                    <div  class="form-group">
                        <label  for="name">Name :</label>
                        <input type="text" name="name" id="name" class="form-control" tabindex="1" />
                    </div>

                    <div  class="form-group">
                        <label   for="textarea">Description:</label>
                        <textarea cols="40" rows="8" class="form-control" name="textarea" id="textarea"></textarea>
                    </div>
                
                    <div  class="form-group">
                        <label   for="select-choice">Priority:</label>
                        <select name="select-choice" class="form-control" id="select-choice">
                            <option value="Choice 1">no important</option>
                            <option value="Choice 2">important</option>
                            <option value="Choice 3">very important</option>
                        </select>
                    </div>
                    
                     <div class="checkbox">
                        <label><input type="checkbox">Attach</label>
                     </div>
                   <div class="row">
                        <div class="col-md-7">
                            
                        </div>
                        <div class="col-md-5">
                          <input type="submit" class="btn btn-default" value="Create" />
                        </div>
                   </div>
                   
                </form>
 --}}