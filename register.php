<?php
require_once "config.php";

$username = $password =$confirm_password = $EMAIL = "";
$username_err = $password_err = $confirm_password_err = $EMAIL_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["NAME"]))){
        $username_err = "Username cannot be blank";
    }
    else
    {
      $username = trim($_POST['NAME']);
    }


    // Check if email is empty
    if(empty(trim($_POST["EMAIL-ID"]))){
      $EMAIL_err = "EMAIL-ID cannot be blank";
  }
  else{
      $sql = "SELECT userID FROM signup WHERE EMAILID = ?";
      $stmt = mysqli_prepare($conn, $sql);
      if($stmt)
      {
          mysqli_stmt_bind_param($stmt, "s", $param_username2);

          // Set the value of param username
          $param_username2 = trim($_POST['EMAIL-ID']);

          // Try to execute this statement
          if(mysqli_stmt_execute($stmt)){
              mysqli_stmt_store_result($stmt);
              if(mysqli_stmt_num_rows($stmt) == 1)
              {
                  $EMAIL_err = "This email id is already registered. Try forgot password.";
              }
              else{
                  $EMAIL = trim($_POST['EMAIL-ID']);
              }
          }
          else{
              echo "Something went wrong";
          }
      }
  }
  if (!$stmt) {
    printf("Error message: %s\n", mysqli_error($conn));
}
  mysqli_stmt_close($stmt);

  // Check for password
if(empty(trim($_POST['password']))){
  $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
  $password_err = "Password cannot be less than 5 characters";
}
else{
  $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
  $confirm_password_err = "Passwords should match";
}


    // If there were no errors, go ahead and insert into the database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)  && empty($EMAIL_err))
    {
        $sql = "INSERT INTO signup (NAME,EMAILID,PASSWORD,files) VALUES ( ?, ? , ? ,';')";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_username2,$param_password);

            // Set these parameters
            $param_username = $username;
            $param_username2 = $EMAIL;

            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
                header("location: login.php");
            }
            else{
                echo "Something went wrong... cannot redirect!";
            }
        }

          if (!$stmt) {
            printf("Error message: %s\n", mysqli_error($conn));
        }
        mysqli_stmt_close($stmt);
    }


    mysqli_close($conn);
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
        margin-left:710px;
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
    <form  action="" method="post">
  <div class="image">
  <img  src="about.jpg" alt="" width="500" height="300">
    <h1 >Sign Up</h1>
  </div>

  <div class="form">

    <input type="text" id="NAME" name="NAME" class="form" placeholder="NAME" required autofocus>
    
   
  </div>


  <div class="form">
    <input type="email" id="inputEmail" name="EMAIL-ID" class="form" placeholder="Email address" required autofocus>
    
    
  </div>

  <div class="form">
    <input type="password" id="inputPassword" name="password" class="form" placeholder="Password" required>
    
   
  </div>

  <div class="form">
    <input type="password" id="confirm_Password" name="confirm_password" class="form" placeholder="Confirm Password" required>
    
    
  </div>

  <button id="submit-btn2" type="submit">Continue</button>
</form>
</body>
</html>