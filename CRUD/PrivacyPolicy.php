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
            <a href="About.php"><h2>About</h2></a>
            <a href="PrivacyPolicy.php"><h2>Privacy Policy</h2></a>
            <h2>Contact</h2>
        </div>
        <div class="Idea">
        <div class="card">
            <h1 class="card-title">Privacy Policy for WHATS?</h1>
            <div class="card-buttons">
            <h2 class="card-comment">
            At WHATS?, accessible from whats-to-code.com, one of 
            our main priorities is the privacy of our visitors.
            his Privacy Policy document contains types of information 
            that is collected and recorded by WHATS?
             and how we use it.If you have additional 
             questions or require more information about our Privacy Policy, 
             do not hesitate to contact us.
            </h2>
            <br><br>
            <h1 class="card-title">Consent</h1>
            <h2 class="card-comment">
            By using our website, you hereby consent to our 
            Privacy Policy and agree to its terms.
            </h2>
            <br><br>
            <h1 class="card-title">Information we collect</h1>
            <h2 class="card-comment">
            The personal information that you are asked to
             provide, and the reasons why you are asked to
              provide it, will be made clear to you at the 
              point we 
            ask you to provide your personal information.
            <br>
            If you contact us directly, we may receive 
            additional information about you such as your 
            name, email address, phone number, the contents
             of the message and/or attachments you may 
            send us, and any other information you may choose to provide.
            </h2>
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