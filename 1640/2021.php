
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module 2021</title>
  
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/2021.css" rel="stylesheet" type="text/css" />
        <script src ="js/bootstrap.min.js" ></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2021.less', 'css/2021.css');
        ?>
        
       
</head>
<?php include '../1640/2021-content.php'; ?>
</html>