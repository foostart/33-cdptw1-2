<!DOCTYPE html>

<html>
    <head>
        <title>Block 970 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
            
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
        <script src="js/swiper.min.js" type="text/javascript"></script>
       


    </head>

    <body>
    
     <?php include '../970/970-content.php';?>
    </body>

</html>