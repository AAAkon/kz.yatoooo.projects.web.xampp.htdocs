<div ng-show="content4" >   
    <div class="w3-container" style="padding-top: 30px; padding-left: 40px;">
      <img src="{{ asset('images/icon-code.png') }}"  ng-click="myFunc6()" width="100" class="w3-hover-grayscale" height="95"  id="code_img" /> 
       
      <img src="{{ asset('images/person-icon.png') }}" ng-click="myFunc7()" width="100" class="w3-hover-sepia" height="95" id="person_img" /> 
      
      @include('nav.code')
      @include('nav.person')
 
     <div ng-show="content7" > 
          <div id="con" >
            <p>Click to picture to open content of category! </p>
          </div>
          
     </div>
  </div>
</div>

<style type="text/css">
  #code_img{
    position: relative; 
    left: 45px;
  }
  #person_img{
    position: relative; 
    left: 620px;
  }
    #con{
      margin-top: 200px; text-align: center; font-family: 'Comic Sans MS', cursive, sans-serif; font-size: 20px;
    }
    #con:hover{
      text-decoration: underline;
      cursor: default;
      color: red;
    }
</style>
