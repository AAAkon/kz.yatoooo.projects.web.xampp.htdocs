
<?php if($page=='login' || $page=='registration' || $page=='guest' || $page=='404'){ ?>

  <nav class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="?">My Diary</a>
      </div>
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?page=registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

<?php 
  
      }else if($page=='user' || $page=='404_user' || $page=='marks' || $page=='contact_us'){ 

        $user_id = $_SESSION['user_id'];
        $query = $connection->query("SELECT * FROM users WHERE id=\"$user_id\" ");
        
?>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="?">My Diary</a>
      </div>
      <ul class="nav navbar-nav">
          <li> <a href="?page=contact_us">Contact us</a></li>
          <li> <a href="?page=marks">Marks</a></li>
          <form class="navbar-form navbar-left" action="?page=user" method="get">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search_input">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php 

          if($row = $query->fetch_object()){ 
              $query2 = $connection->query("SELECT * FROM roles WHERE id=\"$row->role_id\" ");
              if($row2 = $query2->fetch_object()){
                  echo $row2->name.": ";
              }


            echo $row->name; 
          }

          ?></a></li>
        <li><a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </nav>

<?php 
  } 
?>