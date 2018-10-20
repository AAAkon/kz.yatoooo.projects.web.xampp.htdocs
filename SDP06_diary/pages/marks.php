<div class="container-fluid"><br><br>
  <div class="row">
    <div class="col-md-7 col-md-offset-1">
      <h2>Marks</h2><br>
      <div class="panel-group" id="container">


      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  $('.panel-group').empty();
  
  <?php $counter = 1; ?>
  <?php $i = 0; ?>

  <?php
  $user_id = $_SESSION['user_id'];
  $subjects = $connection->query("SELECT * FROM subjects");
?>


var markss = [

  <?php       
    while ($subjects_row=$subjects->fetch_object()) {
      $marks = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" and subject_id=\"$subjects_row->id\""); 
    
      while ($marks_row=$marks->fetch_object()) {
        if($i%2==0 && $i!=0){
          $counter++;
        }
        $i++;
  ?>  
            [ '<?php echo $counter; ?>','<?php echo $subjects_row->name; ?>', '<?php echo $subjects_row->description; ?>', '<?php echo $marks_row->value; ?>' ],
  <?php
      }
    }
  ?>
          ];

</script>


<script type="text/javascript">
  

  function paggination($page){
    $('.panel-group').empty();

    for(var i=0;i<markss.length;i++){
      if(markss[i][0]==$page){
          $("#container").append('<div class="panel panel-default"><div class="panel-heading">'+markss[i][1]+'</div><div class="panel-heading">'+markss[i][2]+'</div><div class="panel-body">'+markss[i][3]+'</div></div>');
      }

     
    }

    $("#container").append('<a class="links first" onclick="paggination('+ (1) +')">first</a><a class="links last" onclick="paggination('+ (<?php echo $counter; ?>) +')">last</a><br><br>');

    if($page>1){
      $("#container").append('<a class=" links previous" onclick="paggination('+ ($page-1) +')">previous</a>');
    }else{
      $("#container").append('<a class="links previous" onclick="paggination('+ ($page) +')">previous</a>');
    }


    $("#container").append('<center>');
    for(var i=1;i<= <?php echo $counter;?> ;i++){
      if($page==i){
        $("#container").append('<a class="links only active" onclick="paggination('+ (i) +')">'+i+'</a>');
      }else{
        $("#container").append('<a class="links only" onclick="paggination('+ (i) +')">'+i+'</a>');
      }
    }
    $("#container").append('</center>');

    if($page< <?php echo $counter; ?> ){
      $("#container").append('<a class="links next" onclick="paggination('+ ($page+1) +')" >next</a>');
    }else{
      $("#container").append('<a class="links next" onclick="paggination('+ ($page) +')">next</a>');
    }
    
  }

  paggination(1);
</script>

<style type="text/css">
  a.links{
    display: inline-block;
    padding: 5px 10px;
    background-color: #ffcccc;
    text-decoration: none;
  }

  a.links:hover{
    text-decoration: none;
  }

  a.only{
    margin-left:20px;
  }

  a.active{
    background-color: #ff9999 ;
  }

  .previous{
    float: left
  }

  .next{
    float: right;
  }

  .first{
    width: 150px;
    float: left;
  }

  .last{
    width: 150px;
    float: right;
  }  
</style>