<html>
    <head>
        <title>Module 1990</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1990.less', 'css/1990.css');
        ?>
        <link href="css/1990.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
    </head>
    <body>
         <?php include '../1639/1990-content.php'; ?>
    </body>
</html>