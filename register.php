<?php

include 'connect.php';
session_start();

if(isset($_POST['signUp'])){
    $email=$_POST['email'] ?? '';
    $password=$_POST['password'] ?? '';
    $password=md5($password);

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Already Exists";
    }
    else{
        $insertQuery="INSERT INTO users(email,password)
                        VALUES ('$email', '$password')";
            if($conn->query($insertQuery)===TRUE){
                $_SESSION['email'] = $email;
                header("location: dashboard.php");
                exit();
            }
            else{
                echo "Error:".$conn->error;
            }
    }
}

if(isset($_POST['login'])){
    $email=$_POST['email'] ?? '';
    $password=$_POST['password'] ?? '';
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: dashboard.php");
        exit();
    }
    else{
        echo "Incorrect Email or Password.";
    }
}
?>