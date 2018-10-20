<div class="table-container" style="margin-top:70px">
<h1>List of all users:</h1><br><br>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>Login</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <!--PHP code-->
    <?php
        $query = $connection->query("SELECT * FROM users");
        while($row = $query->fetch_object()){ //while cycle start
    ?>

    <tr>
      <td><?php echo $row->name; ?></td>
      <td><?php echo $row->surname; ?></td>
      <td><?php echo $row->login; ?></td>
      <td><?php echo $row->password; ?></td>
    </tr>

    <?php
        }   //while cycle ends
    ?>

  </tbody>
</table>
</div>
</div>