
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module 1640</title>
  
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/1640.css" rel="stylesheet" type="text/css" />
        <script src ="js/bootstrap.min.js" ></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1640.less', 'css/1640.css');
        ?>
        
       
</head>
<?php include '../1640/1640-content.php'; ?>
</html>