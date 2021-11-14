<?php
    $username = $_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $repassword =$_POST['repassword'];
    $mobilenumber =$_POST['mobilenumber'];

    //Database connection
    $conn = new mysqli('localhost','root','','swag');
    if($conn->connect_error){
        die('Connection Failed  : '. $conn->connect_error);
    }else{
        $stmt = "insert into signup(username,email,password,repassword,mobilenumber) values('$username','$email','$password','$repassword','$mobilenumber')";
        if($conn->query($stmt)){
            header("Location: login.html");
            echo "you have successfully registered";
        exit();
        }
        else{
            echo "error in inserting data";
        }
    }
    $conn->close();
 ?>