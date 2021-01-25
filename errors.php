<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/registeration.css">
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Lemonada|Markazi+Text|Tajawal&display=swap" rel="stylesheet">
</head>
<body>
<?php if (count($errors) > 0): ?>
<div class="error">
<?php foreach ($errors as $error): ?>
    <p><?php echo $error; ?></p>
    <?php endforeach ?>
</div>
<?php endif ?>    
</body>
</html>