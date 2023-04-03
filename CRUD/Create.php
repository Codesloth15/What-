<?php include "db.php";

//Creating Data in Database
if (isset($_POST['submit'])) {

  $name = $_POST['username'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  //Connection on the database
  connection();

  //Check if username and password are not empty
  if ($name && $password && $confirmPassword) {
    if ($confirmPassword == $password) {
      //Check if username and password are already exists
      $data = "SELECT * FROM users";
      $get = mysqli_query($connection, $data);
      $validAccount = false;
      //Check all username and password from database
      while ($user = mysqli_fetch_array($get)) {
        if ($name ==  $user[1]) {
          $validAccount = true;
          echo "<script>alert('This username is already taken');</script>";
          break;
        }
      }

      //if username and password are dose not exist
      if (!$validAccount) {
        $query = "INSERT INTO users(name,password) VALUES ('$name','$password')";

        $result = mysqli_query($connection, $query);

        if ($result) {
          echo "<script>alert('Account Successfully Created ');location.href='index.php';</script>";
        } 
      } else {
        //if username and password exist
        echo "<script>alert('Account Existed');';</script>";
      }
    } else {

      echo "<script>alert('password not match');</script>";
    }
  } else {
    echo "<script>alert('empty form');</script>";
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
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="form-create">
    <form class="form" action="Create.php" method="post">
      <p class="heading">Create Account</p>
      <input class="input" name="username" placeholder="Username" type="text">
      <input class="input" name="password" placeholder="Password" type="text">
      <input class="input" name="confirmPassword" placeholder="Confirm Password" type="text">
      <button class="btn" name="submit">Submit</button>
      <h3>Already have and account?<a href="index.php">Login.</a></h3>
    </form>
  </div>
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
    display: inline;
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