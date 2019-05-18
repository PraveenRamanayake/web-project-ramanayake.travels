<?php

session_start();





$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";


$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(!$conn){
echo"not connect";}
else
{  

    $uid =mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd =mysqli_real_escape_string($conn, $_POST['pwd']);
 
    
    $sql="SELECT * FROM users WHERE user_uid='$uid'";
    $result= mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    
    if($resultcheck<1){
        
        echo "not logged";
        header("location:../index.php");
        exit();
    }
    else{
    
        if($row=mysqli_fetch_assoc($result)){
          $pwddb=$row['user_pwd'];
          
        
            if($pwd!=$pwddb){
                echo "false";
                header("location:../index.php?incorrect%password");
                exit();
            }
            else{
               //log in user here
               $_SESSION['u_id']=$row['user_id'];
               $_SESSION['u_first']=$row['user_first'];
               $_SESSION['u_last']=$row['user_last'];
               $_SESSION['u_email']=$row['user_emai'];
               $_SESSION['u_uid']=$row['user_uid'];
                header("location:../home.php?log in success");
                exit();
                
            }
            
            
           
        }
        
        
        }
}
?>