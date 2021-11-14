<?php
    $username  =$_POST['username']; 
    $password =$_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','swag');
    if($conn->connect_error){
        die('Connection Failed  : '. $conn->connect_error);
    }else{
        $username=stripcslashes($username);
        $password=stripcslashes($password);
        $username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);
        $sql = "select * from signup where username='$username' and password='$password'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);

        if($count==1){
            header("Location: home.html");
        }
        else{
            echo "Login Failed";
        }
        }
 ?>