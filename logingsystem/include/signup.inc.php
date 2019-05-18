<?php


session_start();

if (isset($_POST['submit'])){
  include_once 'dbh.inc.php';
  
    $first =mysqli_real_escape_string($conn, $_POST['fname']);
    $last =mysqli_real_escape_string($conn, $_POST['lname']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $uid =mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd =mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //error handlers
    //check for empty field
    if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd) ){
        header("location:../index.php?signup=empty");
        exit();
        
    }else{
    
        $sql="SELECT * FROM users WHERE user_uid='$uid'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        
        if($resultCheck>0){
            header("location:../index.php?signup=username?already?taken");
            exit();
            
        }
        
        else{
            
            
            $sql="INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd) VALUES('$first','$last',' $email','$uid','$pwd')";
            $result=mysqli_query($conn,$sql);
            
            $_SESSION['u_id']=$POST['uid'];
            $_SESSION['u_first']=$POST['user_first'];
            
            
            header("location:../home.php?signup=success");
            exit();
        }
    }
    
    
}
else{
    header("location:../index.php");
    exit();
}