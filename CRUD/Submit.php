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
        <img class="logo"  src="/what.png">
        <div class="nav-container">
           <a href="home.php"> <input type="button" class="Submit" value="Home"></a>
            <input type="button" class="logout"onclick="sclick()" value="Log out">
        </div>

    </div>
    <br>
    <br>
    <div class="content">
        <div class="Links">
            <h1>Links</h1>
            <a href="About.php"><h2>About</h2></a>
            <a href="PrivacyPolicy."><h2>Privacy Policy</h2></a>
            <h2>Contact</h2>
        </div>
        <div class="Idea">

        <form method="post" action="Submit.php">
            <h1>Tell the world What to Code!</h1>
            <label>Title(max.32)</label>
            <br>
            <input class="textS" type="text" name="title">
            <br>
            <br>
            <label>Description(max.1000)</label>
            <textarea class="desc" name="description"></textarea>
            <br>
            <button class="formButton"name="submit">send</button>
        </form>
            <?php include "db.php";



            if(isset($_POST['submit'])){
                $title=$_POST['title'];
                $description=$_POST['description'];


                if(!empty($title)&&!empty($description)){
            connection();
            $query = "INSERT INTO todo(title,comment) VALUES ('$title','$description')";
            $addData = mysqli_query($connection, $query);
            if($addData){
              echo"<script>alert('Done');location.href='home.php'</script>";
            }else{
                echo"error";
            }
            }else{
                echo"<script>alert('empty form')</script>";
            }
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
<style>

</style>

</html>