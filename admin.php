<!DOCTYPE html>
<?php
  include "navbar.php";

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADMIN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
    	table, table th, table td {
    		border: 1px solid orange;
    		padding: 15px;

    	}
    </style>
  </head>
  <body>
    <br>
    <h2 style="margin: 30px">Other Admins</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr style="margin: 40px">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>PASSWORD</th>
            <th >EDIT</th>
            <th >DELETE</th>
          </tr>
        </thead>
        <tbody id="admin_list">
        <?php
        include "./CRUD/demo.php";
        ?>
        </tbody>
      </table>
    </div>
  </main>
</div>
</div>

  </body>
</html>

<?php


 ?>
