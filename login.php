<?php include('server.php'); ?>
<!Doctype html>
<html>

<head>
    <title>تسجيل الدخول</title>
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
            <h3 class="pb-4">تسجيل الدخول</h3>
            <div class="separator">
                <span class="cir c-1"></span>
                <span class="cir c-2"></span>
                <span class="cir c-3"></span>
            </div>
        </div>
        <form class="form-group registration-form" method="post" action="login.php">
            <!--display validation errors here-->
            <?php include('errors.php'); ?>
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
                    <input class="form-control register-form-input" type="password" name="password">
                </div>
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="register-form-btn">تسجيل الدخول</button>
                <div class="clr"></div>
            </div>
        </form>
        <p class="already-member">
            لا تمتلك حساب؟ <a href="register.php" class="already-member-link">تسجيل</a>
        </p>
    </main>
</body>

</html>