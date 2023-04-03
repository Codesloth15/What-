<?php include "db.php";

if (isset($_POST['submit'])) {
  $nameNew = $_POST['username'];
  $password = $_POST['password'];
  $oldUserName = $_POST['usernameOld'];


  if ($nameNew && $password && $oldUserName) {
    //$connection = mysqli_connect("localhost",'root','','student');
    connection();

    $checkDta = "SELECT * FROM users";
    $getData = mysqli_query($connection, $checkDta);
    $validChecker = false;

    while ($user = mysqli_fetch_array($getData)) {
      if ($user[1] != $nameNew) {
        $validChecker = true;
        if ($validChecker == true && $user[2] == $password) {
          $updateQuery = "UPDATE users SET name = '$nameNew' WHERE name='$oldUserName'";
          //query to the database
          $result = mysqli_query($connection, $updateQuery);
          echo "<script>alert('done');</script>";
        } else {
          echo "<script>alert('incorrect password');</script>";
          break;
        }
      } else {
        echo "<script>alert('This username is already taken');</script>";
        break;
      }
    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <form class="form" action="Update.php" method="post">
    <p class="heading">Update Account</p>
    <input class="input" name="usernameOld" placeholder="Old username" type="text">
    <input class="input" name="username" placeholder="New username" type="text">
    <input class="input" name="password" placeholder="Password" type="password">
    <div class="btn-conatiner"><button class="btn" formaction="index.php">Cancel</button>
      <button class="btn" name="submit">Update</button>
    </div>
  </form>

</body>
<style>
  .form {
    text-align: center;
    margin-top: 200px;
    margin: auto;
    width: 400px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background-color: white;
    padding: 2.5em;
    border-radius: 25px;
    transition: .4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
  }

  .form:hover {
    transform: translateX(-0.5em) translateY(-0.5em);
    border: 1px solid #171717;
    box-shadow: 10px 10px 0px #666666;
  }

  .heading {
    color: black;
    padding-bottom: 2em;
    text-align: center;
    font-weight: bold;
  }

  .input {
    border-radius: 5px;
    border: 1px solid whitesmoke;
    background-color: whitesmoke;
    outline: none;
    padding: 0.7em;
    transition: .4s ease-in-out;
  }

  .input:hover {
    box-shadow: 6px 6px 0px #969696,
      -3px -3px 10px #ffffff;
  }

  .input:focus {
    background: #ffffff;
    box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
  }

  .form .btn {
    margin: 10px;
    flex-direction: row;
    display: inline-block;
    width: 120px;
    margin-top: 2em;
    align-self: center;
    padding: 0.7em;
    padding-left: 1em;
    padding-right: 1em;
    border-radius: 10px;
    border: none;
    color: black;
    transition: .4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
  }

  .form .btn:hover {
    box-shadow: 6px 6px 0px #969696,
      -3px -3px 10px #ffffff;
    transform: translateX(-0.5em) translateY(-0.5em);
  }

  .form .btn:active {
    transition: .2s;
    transform: translateX(0em) translateY(0em);
    box-shadow: none;
  }
</style>

</html>