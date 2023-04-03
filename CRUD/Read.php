<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="nav-bar">
    <div class="nav-container">
      <h1><a>HOME</a></h1>
      <h1><a>STUDENT</a></h1>
      <h1><a>INFO</a></h1>
    </div>
  </div>
</body>
<style>
  .nav-container h1:hover {
    color: white;
  }

  .nav-container h1 {
    display: inline-flex;
    margin: 25px;
    font-weight: bold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .nav-container {
    display: inline-flexbox;


  }

  .nav-bar {
    width: 100%;
    height: 70px;
    border: solid 1px black;
    background-color: wheat;
    text-align: center;

  }

  .card {
    border: 1px solid black;
    border-radius: 5px;
    padding: 10px;
    margin: 10px;
    height: 90px;
  }

  .card-title {
    margin: 0;
    font-size: 24px;
  }

  .card-buttons {
    margin-top: 10px;
  }

  .btn-delete {
    background-color: white;
    color: black;
    padding: 10px 20px;
    border-radius: 5px;
    margin-right: 10px;
    cursor: pointer;
  }

  .btn-update {
    background-color: black;
    color: white;
    border: 1px solid burlywood;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }

  .forms {
    float: right;
    margin-right: 50px;
  }
</style>

</html>
<?php include "db.php";


connection();

$data = "SELECT * FROM users";
$get = mysqli_query($connection, $data);
$validAccount = false;
while ($user = mysqli_fetch_array($get)) {

  echo "<div class='card'>
            <h1 class='card-title'>NAME: $user[1]</h1>
            <div class='card-buttons'>
              <form class='forms'method='post'>
                <input class='btn-delete' type='submit' value='View more' name='submit'>
                <input class='btn-delete' type='submit' value='Delete' name='submit'>
              <a href='Update.php'><input class='btn-update' type='submit' value='Update' formaction='Update.php'></a>  
              </form>
            </div>
          </div>";
}

?>