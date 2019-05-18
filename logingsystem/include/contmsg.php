<?php





  include_once 'dbh.inc.php';
  
    $name =mysqli_real_escape_string($conn, $_POST['name']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $msg =mysqli_real_escape_string($conn, $_POST['msg']);
    
    
    $sql="INSERT INTO message(name,email,msg) VALUES('$name','$email','$msg')";
            $result=mysqli_query($conn,$sql);
            
            
            
            header("location:../home.php?msg=sent");
            exit();
