<?php include "db.php";


//check is form submitted a value
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //fuction for connnecting database
    connection();

    //check if username and password filled in
    if ($username && $password) {

            $existingData = "SELECT * FROM users";
            $getData = mysqli_query($connection, $existingData);
            $validData = false;

            while ($row = mysqli_fetch_array($getData)) {
                if ($row['name'] == $username&& $row['password'] == $password) {
                    $validData = true;
                }
            }
   
            if($validData){
                echo "<script>alert('Login');location.href='home.php';</script>";
            }else{
                echo "<script>alert('This user does not exist');location.href='Create.php';</script>";
            }
    
    }else{
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
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form class="form" action="index.php" method="post">
        <p class="heading">Login</p>
        <input class="input" name="username" placeholder="Username" type="text">
        <input class="input" name="password" placeholder="Password" type="text">
        <button class="btn"  name="submit">Submit</button>
        <h3>Already have and account?<a href="Create.php">Create.</a></h3>
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