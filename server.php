<?php
session_start();

$username = "";
$email ="";
$errors = array();
//connect to the database
$db = mysqli_connect('localhost','root','','register_db');

//if the register button is clicked
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
   
 //ensure that form fields are filled properly
    if(empty($username)){
        array_push($errors,"برجاء إدخال اسم المستخدم");
    }
     if(empty($email)){
        array_push($errors,"برجاء إدخال البريد الإلكتروني");
    }
     if(empty($password_1)){
        array_push($errors,"برجاء إدخال كلمة المرور");
    }
     if(empty($password_2)){
        array_push($errors,"كلمات المرور غير متطابقة");
    }
    
 //if there are no errors, save user to database
    if (count($errors) == 0){
        $password = md5 ($password_1);
        $sql = "INSERT INTO user (username,email, password) VALUES ('$username','$email','$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        header('location: login.php'); //redirect to home page
    }
}

// log user in from login page
if (isset($_POST['login'])){
    //$username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
 //ensure that form fields are filled properly
    if(empty($email)){
        array_push($errors,"برجاء إدخال البريد الإلكتروني");
    }
     if(empty($password)){
        array_push($errors,"برجاء إدخال كلمة المرور");
    }
     if (count($errors) == 0 ){
         $password = md5($password);
         $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
         $result = mysqli_query($db, $query);
         if (mysqli_num_rows($result) == 1){
             //log user in
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are logged in";
        header('location: index.php'); //redirect to home page
         }else{
             array_push($errors, "البريد الإلكتروني و كلمة المرور غير متطابقتان");
         }
     }
}

//logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
}
?>