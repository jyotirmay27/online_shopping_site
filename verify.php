<?php
if (session_id() == ""){
  session_start();
}
function set_token($email, $uname, $upass, $uid){
    $_SESSION['id'] = $uid;
    $_SESSION['uid']="email".'|'.$email;
    $_SESSION['uname']=$uname;
    $_SESSION['upass']=$upass;
    return 1;
}
require(__DIR__.'/conf.php');
require(__DIR__.'/config.php');

if(!isset($_POST['email']) ){
    header("Location: login.php?err=13");
    exit;
}
if(!isset($_POST['password']) ){
    header("Location: login.php?err=12");
    exit;
}
$email=$_POST['email'];
$password= $_POST['password'];

$sql = "SELECT userID,NAME,EMAILID,PASSWORD FROM signup WHERE EMAILID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    $param_email = $email;
    echo mysqli_error($conn);
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $email , $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {                            
                              	set_token($email, $username, $hashed_password, $id);
                                  header("Location: home.php");
                                  exit;
                              }
                              else{
                                   header("Location: login.php?err=14");
                                  
                              }
                        
                    }
					else{
						echo "hello";
					}
                }
				else{
					echo "byee";
				}
    } 	

?>