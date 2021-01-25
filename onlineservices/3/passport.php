<!DOCTYPE html>
<html>

<head>
    <title>تسجيل حديث الولادة في مصر</title>
    <?php include "../../inner/inner-links.php"?>
    <link rel="stylesheet" href="../../css/onlineservices-ITEM.css">
</head>
<?php include "../../inner/inner-navbar.php"?>

<main class="margin-auto">
<div class="container on-services-main text-right">
    <div class="online-services-header">
        <h2 class="main-title">إملأ الاستمارة التالية</h2>
        <p class="main-p text-black-50">بعد ملئ الإستمارة سيتم التواصل معكم لتحديد مقابله لأخذ البيانات المطلوبة لإستخراج جواز سفر و هذا لحفظ أمان بيانات و خصوصية المواطن.</p>
    </div>
    <div class="delivery-form">
        <form action="onlineservices-process.php" class="online-services-form" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" name="fName" placeholder="الإسم الأول" class="form-control mb-2">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="lName" placeholder="إسم العائلة" class="form-control mb-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="email" name="userEmail" placeholder="البريد الإلكتروني" class="form-control mb-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="text" name="userAddress" placeholder="العنوان" class="form-control mb-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="number" name="userPhone" placeholder="رقم الموبايل" class="form-control mb-2">
                </div>
            </div>

            <?php 
                        
                $Msg = "";
                if (isset($_GET['error']))
                {
                    $Msg = "برجاء ملئ كل البيانات المطلوبة";
                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                }

                if (isset($_GET['success']))
                {
                    $Msg = "تم الإرسال, سيتم التواصل معكم لتحديد مقابلة خلال 24 ساعة من الأن";
                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                }
                        
            ?>

            
            <button type="submit" class="btn online-services-button" name="online-btn-send">إرسال</button>
            <div class="clr"></div>
        </form>
    </div>
</div>
</main>

<?php include "../../inner/inner-end.php"?>