<?php

    if(isset($_POST['btn-send']))
    {
        $userName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Supject = $_POST['Subject'];
        $Msg = $_POST['msg'];

        if(empty($userName) || empty($Email) || empty($Supject) || empty($Msg))
        {
            header('location:contact.php?error');
        }
        else
        {
            header('location:contact.php?success');
        }
    }
    else
    {
        header('location:contact.php');
    }

?>