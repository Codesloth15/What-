<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="nav-bar">
        <img class="logo" src="/what.png">
        <div class="nav-container">
            <a href="Submit.php"> <input type="button" class="Submit" value="Submit"></a>
            <input type="button" onclick="sclick()"class="logout" value="Log out">
        </div>

    </div>
    <br>
    <br>
    <div class="content">
        <div class="Links">
            <h1>Links</h1>
           <a href="About.php"> <h2>About</h2></a>
           <a href="PrivacyPolicy.php"><h2>Privacy Policy</h2></a> 
            <h2>Contact</h2>
        </div>
        <div class="Idea">
            <?php include "db.php";
            //the submit
            connection();

            $data = "SELECT * FROM todo";
            $get = mysqli_query($connection, $data);
            $validAccount = false;
            while ($fetchData = mysqli_fetch_array($get)) {

                echo "<div class='card'>
            <h1 class='card-title'>Title:$fetchData[1]</h1>
            <br>
            <p class='card-comment'> $fetchData[2]<p>
          </div>";
            }

            ?>
        </div>

    </div>
    <script>
        function sclick(){
           var x = confirm("Are you sure you want to logout?");
           if(x){
            window.location = "index.php";
           }
        }


    </script>

</body>

</html>