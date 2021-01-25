<?php

    if(isset($_POST['online-btn-send']))
    {
        $userfName = $_POST['fName'];
        $userlName = $_POST['lName'];
        $userEmail = $_POST['userEmail'];
        $userAddress = $_POST['userAddress'];
        $userPhone = $_POST['userPhone'];

        // define constant variables
        define('DB_NAME', 'requireddata_db');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'localhost');

        try{

            // connection variable
            $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // encoded language
            mysqli_set_charset($con, 'utf8');


        }catch (Exception $ex){
            print "An Exception occurred. Message: " . $ex->getMessage();
        } catch (Error $e){
            print "The system is busy please try later";
        }


        // make a query
        $query = "INSERT INTO users_data (userID, userfName, userlName, userEmail, userAddress, userPhone, submitDate )";
        $query .= "VALUES(' ', ?, ?, ?, ?,?, NOW())";

        // initialize a statement
        $q = mysqli_stmt_init($con);

        // prepare sql statement
        mysqli_stmt_prepare($q, $query);

        // bind values
        mysqli_stmt_bind_param($q, 'sssss', $userfName, $userlName, $userEmail, $userAddress, $userPhone);

        // execute statement
        mysqli_stmt_execute($q);

        if(mysqli_stmt_affected_rows($q) == 1){

            header('location:passport.php?success');
            exit();

        }else{

            header('location:passport.php?error');

        }

    }else{

        header('location:passport.php');

    }
