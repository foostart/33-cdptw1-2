
<!DOCTYPE html>
<html lang="en">
<head>
<title>Module 1639</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1639.less', 'css/1639.css');
        ?>
        <link href="css/1639.css" rel="stylesheet" type="text/css" />
        
        
</head>
<?php include '../1639/1639-content.php'; ?>
</html>