<?php include('server.php'); ?>

<!Doctype html>
<html>

<head>
    <title>التسجيل</title>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/registeration.css">
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Lemonada|Markazi+Text|Tajawal&display=swap"
        rel="stylesheet">
</head>

<body>
    <main class="registration-main">
        <div class="registration-title">
            <p>تسجيل</p>
            <div class="separator">
                <span class="cir c-1"></span>
                <span class="cir c-2"></span>
                <span class="cir c-3"></span>
            </div>
        </div>
        <form class="form-group registration-form" method="post" action="register.php">
            <!--display validation errors here-->
            <?php include('errors.php'); ?>
            <div class="input-group">
                <div class="col-lg-4">
                    <label class="register-form-label">إسم المستخدم</label>
                </div>
                <div class="col-lg-8">
                    <input class="form-control register-form-input" type="text" name="username">
                </div>
            </div>
            <div class="input-group">
                <div class="col-lg-4">
                    <label class="register-form-label">البريد الإلكتروني</label>
                </div>
                <div class="col-lg-8">
                    <input class="form-control register-form-input" type="text" name="email">
                </div>
            </div>
            <div class="input-group">
                <div class="col-lg-4">
                    <label class="register-form-label">كلمة المرور</label>
                </div>
                <div class="col-lg-8">
                    <input class="form-control register-form-input" type="password" name="password_1">
                </div>
            </div>
            <div class="input-group">
                <div class="col-lg-4">
                    <label class="register-form-label">تأكيد كلمة المرور</label>
                </div>
                <div class="col-lg-8">
                    <input class="form-control register-form-input" type="password" name="password_2">
                </div>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="register-form-btn">تسجيل</button>
            </div>
            <div class="clr"></div>
        </form>
        <p class="already-member">هل انت مشترك بالفعل؟ <a href="login.php" class="already-member-link">تسجيل الدخول</a>
        </p>
    </main>
</body>

</html>