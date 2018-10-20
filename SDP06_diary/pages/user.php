<div class="container-fluid"><br><br>

  <div class="row">
  <div class="col-md-7 col-md-offset-1">
  <?php

    if(isset($_GET['search_input'])){
      $search_input = $_GET['search_input'];
      if ($search_input!=null && $search_input!="") {
        $subjects_query = $connection->query("SELECT * FROM subjects WHERE name like '%".$search_input."%' or description like '%".$search_input."%'");
  ?>

        <h2>Result of search:</h2><br>
        <div class="panel-group" id="container">

  <?php
        while($subjects_query && $row = $subjects_query->fetch_object()){
          $marks_query = $connection->query("SELECT * FROM marks WHERE subject_id=\"$row->id\""); 
          if($row2 = $marks_query->fetch_object()){
  ?>

              <div class="panel panel-default" id="<?php echo $row->name; ?>">
              <div class="panel-heading"><?php echo $row->name;?></div>
              <div class="panel-heading"><?php echo $row->description;?></div>
              <div class="panel-body"><?php echo $row2->value;?></div>
              </div>

  <?php
          }else{
  ?>
          <h4>Nothing</h4>
  <?php
          }
        }
  ?>

         </div>

  <?php
      }else{
  ?>

      <h2>Marks</h2><br>
      <div class="panel-group" id="container">

        <?php
          $user_id = $_SESSION['user_id'];
          $query = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" ");
          while($row = $query->fetch_object()){

          $query2 = $connection->query("SELECT * FROM subjects WHERE id=\"$row->subject_id\""); 
          if($row2 = $query2->fetch_object()){
        ?>
            <div class="panel panel-default" id="<?php echo $row2->name; ?>">
            <div class="panel-heading"><?php echo $row2->name;?></div>
            <div class="panel-heading"><?php echo $row2->description;?></div>
            <div class="panel-body"><?php echo $row->value;?></div>
            </div>
        <?php
          }
          }
        ?>
      </div>

  <?php
      }
    }else{
  ?>

      <h2>Marks</h2><br>
      <div class="panel-group" id="container">

        <?php
          $user_id = $_SESSION['user_id'];
          $query = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" ");
          while($row = $query->fetch_object()){

          $query2 = $connection->query("SELECT * FROM subjects WHERE id=\"$row->subject_id\""); 
          if($row2 = $query2->fetch_object()){
        ?>
            <div class="panel panel-default">
            <div class="panel-heading"><?php echo $row2->name;?></div>
            <div class="panel-heading"><?php echo $row2->description;?></div>
            <div class="panel-body"><?php echo $row->value;?></div>
            </div>
        <?php
          }
          }
        ?>
      </div>

  <?php
    }
  ?>

  </div>
  <div class="col-md-3 col-md-offset-1">
   <h3>Sort:</h3>
   <select onchange="sort(this.value)" class="form-control" id="sort" name="sort" >
      <option value="" selected="selected">Choose...</option>
      <option value="1" >A-z</option>
      <option value="2" >z-A</option>
      <option value="3">Highest -> lowest</option>
      <option value="4" >Lowest to Highest</option>
    </select>
  </div>
  </div>
</div>

<script type="text/javascript">
    function sort(id){
        if(id=="1"){

          $('.panel-group').empty();

          <?php
            $user_id = $_SESSION['user_id'];

            $subjects = $connection->query("SELECT * FROM subjects order by name asc"); 

            while ($subjects_row=$subjects->fetch_object()) {
              $marks = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" and subject_id=\"$subjects_row->id\""); 
              
              while ($marks_row=$marks->fetch_object()) {
                  ?>

                  $("#container").append('<div class="panel panel-default"><div class="panel-heading"><?php echo $subjects_row->name; ?></div><div class="panel-heading"><?php echo $subjects_row->description; ?></div><div class="panel-body"><?php echo $marks_row->value; ?></div></div>');

                  <?php
              }

            }
          ?>

        }else if(id=="2"){

          $('.panel-group').empty();

          <?php
            $user_id = $_SESSION['user_id'];

            $subjects = $connection->query("SELECT * FROM subjects order by name desc"); 

            while ($subjects_row=$subjects->fetch_object()) {
              $marks = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" and subject_id=\"$subjects_row->id\""); 
              
              while ($marks_row=$marks->fetch_object()) {
                  ?>

                  $("#container").append('<div class="panel panel-default"><div class="panel-heading"><?php echo $subjects_row->name; ?></div><div class="panel-heading"><?php echo $subjects_row->description; ?></div><div class="panel-body"><?php echo $marks_row->value; ?></div></div>');

                  <?php
              }

            }
          ?>

        }else if(id=="3"){

          $('.panel-group').empty();

          <?php
            $user_id = $_SESSION['user_id'];

            $marks = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" order by value desc"); 
              
            while ($marks_row=$marks->fetch_object()) {
               
              $subjects = $connection->query("SELECT * FROM subjects where id=\"$marks_row->subject_id\""); 

              while ($subjects_row=$subjects->fetch_object()) {
               ?> 

                  $("#container").append('<div class="panel panel-default"><div class="panel-heading"><?php echo $subjects_row->name; ?></div><div class="panel-heading"><?php echo $subjects_row->description; ?></div><div class="panel-body"><?php echo $marks_row->value; ?></div></div>');

                <?php
              }

            }
          ?>

        }else if(id=="4"){

          $('.panel-group').empty();

          <?php
            $user_id = $_SESSION['user_id'];

            $marks = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" order by value asc"); 
              
            while ($marks_row=$marks->fetch_object()) {
               
              $subjects = $connection->query("SELECT * FROM subjects where id=\"$marks_row->subject_id\""); 

              while ($subjects_row=$subjects->fetch_object()) {
               ?> 

                  $("#container").append('<div class="panel panel-default"><div class="panel-heading"><?php echo $subjects_row->name; ?></div><div class="panel-heading"><?php echo $subjects_row->description; ?></div><div class="panel-body"><?php echo $marks_row->value; ?></div></div>');

                <?php
              }

            }
          ?>

        }else{
          $('.panel-group').empty();

          <?php
            $user_id = $_SESSION['user_id'];

            $marks = $connection->query("SELECT * FROM marks WHERE user_id=\"$user_id\" "); 
              
            while ($marks_row=$marks->fetch_object()) {
               
              $subjects = $connection->query("SELECT * FROM subjects where id=\"$marks_row->subject_id\""); 

              while ($subjects_row=$subjects->fetch_object()) {
               ?> 

                  $("#container").append('<div class="panel panel-default"><div class="panel-heading"><?php echo $subjects_row->name; ?></div><div class="panel-heading"><?php echo $subjects_row->description; ?></div><div class="panel-body"><?php echo $marks_row->value; ?></div></div>');

                <?php
              }

            }
          ?>
        }
    }
</script>