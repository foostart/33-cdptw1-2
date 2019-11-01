<!DOCTYPE html>
<html>
<head>
    <title>Module 970</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
    <script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.movingboxes.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</head>
<body>
<?php include './970-content.php'; ?>
<script src="js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
    
    });
  </script>
</body>
</html>