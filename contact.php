<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Lemonada|Markazi+Text|Tajawal&display=swap"
        rel="stylesheet">
    <title>تواصل معنا</title>
</head>

<?php include ('navbar.php') ?>

    <main class="contact-main">
        <div class="container contact-form-frontier">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="mt-5">
                        <div class="">
                            <div class="contact-form-title">
                                <h2 class="text-center py-2 contact-title">تواصل معنا</h2>
                                <div class="separator">
                                    <span class="cir c-1"></span>
                                    <span class="cir c-2"></span>
                                    <span class="cir c-3"></span>
                                </div>
                            </div>
                            <?php 
                        
                        $Msg = "";
                        if (isset($_GET['error']))
                        {
                            $Msg = "برجاء ملئ البيانات المطلوبة";
                            echo '<div class="alert alert-danger text-right">'.$Msg.'</div>';
                        }

                        if (isset($_GET['success']))
                        {
                            $Msg = "تم الإرسال. شكرا لك";
                            echo '<div class="alert alert-success text-right">'.$Msg.'</div>';
                        }
                        
                        ?>
                        </div>
                        <div class="card-body">
                            <form action="contact-process.php" class="contact-form" method="POST">
                                <input type="text" name="UName" placeholder="إسم المستخدم" class="form-control mb-2">
                                <input type="email" name="Email" placeholder="البريد الإلكتروني"
                                    class="form-control mb-2">
                                <input type="supject" name="Subject" placeholder="عنوان الموضوع"
                                    class="form-control mb-2">
                                <textarea rows="4" cols="50" name="msg" class="form-control mb-2" placeholder="الموضوع"></textarea>
                                <button type="submit" class="contact-form-button" name="btn-send">إرسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include ('end.php') ?>