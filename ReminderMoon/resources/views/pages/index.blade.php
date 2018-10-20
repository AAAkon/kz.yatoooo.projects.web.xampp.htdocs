@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">WELLCOME PAGE</div>

                <div class="panel-body">
                <div class="row">
                <center>
                    <div >
                        <img src="{{ asset('images/moon.png') }}" width="425" height="425" class="img-circle" alt="Cinque Terre">
                    </div>
                </center>
                  
                </div>
                 <div class="row">
                    <div >
                   <center> <h1 id="mainh1" style="color: #ff4411; font-size: 48px; font-family: \'Signika\', sans-serif; padding-bottom: 10px;">Hello, My Friend !!! </h1> </center>
                        <h4 style="font-family: 'Inder', sans-serif; line-height: 28px; margin: 0px 25px 15px 25px; color: #666;">
                            "Wellcome to <b style="background-color: #F84211; color: #fff;">RenderMoon!</b> This site help you to create reminder for different goals. For example you can create reminder which contain name of games which you want to play or birthdays of your closed people or text of sing that you love and so on. 
                        </h4>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-md-4" >
                               <h1 id="text" style=" visibility: hidden; position: relative; top: 145px; left: 90px; z-index: 1;">Games</h1>
                                <img src="{{ asset('images/man.jpg') }}" class="img-responsive" alt="List" style="margin-left: 20px;  border-radius: 10px;  box-shadow: 5px 5px 5px #888888; border: 5px solid #F84211; width: 250px; height: 250px; " onMouseOver="changedImg(this, 0)"   onMouseOut="notchangedImg(this, 0)">
                            </div>
                             
                            <div class="col-md-4">   
                                <h1 id="text1" style=" visibility: hidden; position: relative; top: 145px; left: 70px; z-index: 1;">Birthday</h1>    
                                <img src="{{ asset('images/calendar.jpg') }}"  class="img-responsive" alt="Calendar" style="margin-left: 20px;  border-radius: 10px;  box-shadow: 5px 5px 5px #888888; border: 5px solid #F84211; width: 250px; height: 250px; " onMouseOver="changedImg(this, 1)"   onMouseOut="notchangedImg(this, 1)">
                            </div>
                            <div class="col-md-4">
                                <h1 id="text2" style=" visibility: hidden; position: relative; top: 145px; left: 90px; z-index: 1;">Music</h1>  
                                <img src="{{ asset('images/music.jpg') }}" class="img-responsive" alt="Music" style="margin-left: 20px;  border-radius: 10px;  box-shadow: 5px 5px 5px #888888; border: 5px solid #F84211; width: 250px; height: 250px; "  onMouseOver="changedImg(this, 2)"   onMouseOut="notchangedImg(this, 2)">
                              
                            </div>
                        </div>
                        <h4 style="font-family: 'Inder', sans-serif; line-height: 28px; margin: 0px 25px 15px 25px; color: #666;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. If you interested in this please joined to us. "
                        </h4>
                        <center>
                            <a href="{{ route('login') }}" role="button" class="btn btn-primary btn-lg">Sign in</a>
                            <a href="{{ route('register') }}" role="button" class="btn btn-success btn-lg">Register</a>   

                        </center>
                   

                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function changedImg(x, q) {
    x.style.filter = "sepia(50%)";
    switch(q){
        case 0: text.style.visibility = "visible"; 
                text.style.fontFamily = "Raleway, sans-serif";
                text.style.color = "#F84211"; 
                text.style.fontWeight = "800"; break;
        case 1: text1.style.visibility = "visible"; 
                text1.style.fontFamily = "Raleway, sans-serif";
                text1.style.color = "#F84211"; 
                text1.style.fontWeight = "800"; break;
        case 2: text2.style.visibility = "visible";
                text2.style.fontFamily = "Raleway, sans-serif";
                text2.style.color = "#F84211"; 
                text2.style.fontWeight = "800"; break;
    }   
}
function notchangedImg(x, q) {
    x.style.filter = "sepia(0%)";
     switch(q){
        case 0: text.style.visibility = "hidden"; break;
        case 1: text1.style.visibility = "hidden"; break;
        case 2: text2.style.visibility = "hidden"; break;
    }  
}
</script>
@endsection

