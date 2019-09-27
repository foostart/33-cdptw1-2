
<!DOCTYPE html>
<html lang="en">
<head>
<title>Block 1645</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/1645.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1645.less', 'css/1645.css');
        ?>
        
</head>
<?php include '../1645/1645-content.php'; ?>

</html>