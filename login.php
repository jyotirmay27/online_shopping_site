
<?php

$Email_err = $thpassword_error = "";
$error=0;
if(isset($_GET['err'])){
$error=intval($_GET['err']);
}
if($error == 13)
{
$Email_err="Email address cannot be blank";

}
if($error == 12)
{
$thpassword_err="Password cannot be blank";

}
if($error == 14)
{
$Email_err="Either Email is wrong or Password";

}

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>



    <style>
        body, html {
    margin:0px;
    background-image: linear-gradient(to right,rgb(247, 222, 189), rgba(250, 155, 46, 0.979));
}
        .image{
            margin-top: 40px;
            text-align: center;
            
        }
      .form{
        width: 350px;
    font-size: 20px;
    margin: 2px 0;
    padding: 4px;
    border-radius: 50px;
   
    margin-left:290px;
    text-align: center;
      }
      #submit-btn2 {
        width: 350px;
        margin-left:589px;
    text-align: center;
    font-size: 20px;
    background-color: #dad607;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    border: none;
    
}
#submit-btn2:hover {
    background-color: rgb(230, 248, 149);
    color: #000000;
}
    </style>
   
    
  </head>
  <body>
    <form  action="verify.php" method="post">
  <div class="image">
  <img  src="about.jpg" alt="" width="500" height="300">
    <h1 >Log In</h1>
  </div>


  <div class="form">
    <input type="email" id="inputEmail" name="email" class="form" placeholder="Email address" required autofocus>
    
    <?php 
if(!empty($Email_err))
echo "<p class='text-danger'>.$Email_err.</p>";
?>
  </div>

  <div class="form">
    <input type="password" id="inputPassword" name="password" class="form" placeholder="Password" required>
    <?php
if(!empty($thpassword_err))
echo "<p class='text-danger'>".$thpassword_err."</p>";
?>
   
  </div>
  <a style="margin-left:600px;" href="register.php">&nbsp; New user?</a></br></br>

  <button id="submit-btn2" type="submit">Continue</button>
</form>
</body>
</html>
