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
            <h1 class="card-title">About </h1>
            <div class="card-buttons">
            <h2 class="card-comment">Welcome to Whats?, the website created by Charlou T. Ybarley, a space dedicated to providing inspiration and guidance for programmers seeking new project ideas.<br><br>

As a developer myself, I know firsthand how challenging it can be to come up with fresh and exciting ideas for coding projects. That's why I created Whats? - to help fellow programmers like myself find inspiration and explore new avenues for their coding skills.<br><br>

Whether you're a seasoned pro or just starting out in the world of programming, Whats? is designed to provide you with the resources and inspiration you need to take your coding to the next level. From articles and tutorials on the latest programming trends and technologies, to a community forum where you can connect with other developers and share ideas, Whats? is a one-stop-shop for all things programming.<br><br>

So if you're looking to expand your coding horizons, or simply need a little inspiration for your next project, you've come to the right place. Join our community today and start exploring all the exciting possibilities that programming has to offer! </h2>
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