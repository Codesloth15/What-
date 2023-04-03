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
            <a href="Home.php"> <input type="button" class="Submit" value="Home"></a>
            <input type="button" class="logout" value="Log out">
        </div>

    </div>
    <br>
    <br>
    <div class="content">
        <div class="Links">
            <h1>Links</h1>
            <h2>About</h2>
            <a href="PrivacyPolicy.php"><h2>Privacy Policy</h2></a>
            <h2>Contact</h2>
        </div>
        <div class="Idea">
        <div class="card">
            <h1 class="card-title">Contact</h1>
            <div class="card-buttons">
                <br><br>
                <h1 class="card-title">Email:</h1>
            <h2 class="card-comment">ybarleycharlou04@gmail.com</h2>
            <br><br>
            <h1 class="card-title">Please make a GitHub issue for feature requests:</h1>
            <h2 class="card-comment"></h2>
        </div>
              <div></div>
          </div>
            
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