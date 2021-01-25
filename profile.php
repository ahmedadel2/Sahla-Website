<?php 
    include ('server.php');

    if (empty($_SESSION['email'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>حسابي</title>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/registeration.css">
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Lemonada|Markazi+Text|Tajawal&display=swap"
        rel="stylesheet">
</head>

<?php include ("navbar.php") ?>


<main class="profile-main">
    <div class="profile-title">
        <h3 class="pb-3">البيانات الشخصية</h3>
        <div class="separator">
            <span class="cir c-1"></span>
            <span class="cir c-2"></span>
            <span class="cir c-3"></span>
        </div>
    </div>
    <div class="profile-content">
        <?php if(isset($_SESSION['success'])): ?>
        <!--
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success'])
                    ?>
                </h3>
            </div>
            -->
        <?php endif ?>

        <?php if(isset($_SESSION['username'])): ?>
        <img src="css/assets/dummy-user-img-male.png" class="profile-image" alt="male">
        <div class="clr"></div>
        <p class="profile-label">إسم المستخدم : <?php echo $_SESSION['username']; ?> </p>
        <p class="profile-label">البريد الإلكتروني : <?php echo $_SESSION['email']; ?> </p>
        <p><a href="login.php" name="logout" class="register-form-btn"> تسجيل الخروج </a></p>
        <?php endif ?>
    </div>
</main>

<?php include ("end.php") ?>