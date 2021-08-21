<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>PHP CRUD</title>
  </head>
  <body>
      
      <?php require_once 'proccess.php';?>
      <?php  
            $mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
            pre_r($result -> fetch_assoc());
            pre_r($result -> fetch_assoc());
            
            function pre_r($array){
                echo '<pre>';
                print_r($array);
                echo '<pre>';
            }
      ?>
      <div class="row justify-content-center">
            <form action="proccess.php" method="POST">
                <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="Enter your name">
                </div>
                <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="Enter your location">
                </div>
                <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                </div>

            </form>
      </div>
   



  </body>
</html>