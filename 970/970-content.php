<!DOCTYPE html>

<html>
    <head>
        <title>BLOCK 970</title>
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
        <div class="mod_custom-970">
            <div id="wrapper">

                <!-- MovingBoxes Slider -->
                <ul id="slider">

                    <li>
                        <img src="images/1.jpg" alt="picture">
                        <h2>News Heading</h2>
                        <p>Add a short exerpt here... <a href="#">more</a></p>
                    </li>

                    <li>
                        <img src="images/2.jpg" alt="picture">
                        <h2>News Heading</h2>
                        <p>Add a short exerpt here... <a href="#">more</a> 
                    </li>

                    <li>
                        <img src="images/3.jpg" alt="picture">
                        <h2>News Heading</h2>
                        <p>Add a short exerpt here... <a href="#">more</a></p>
                    </li>

                    <li>
                        <img src="images/4.jpg" alt="picture">
                        <h2>News Heading</h2>
                        <p>Add a short exerpt here... <a href="#">more</a></p>
                    </li>

                    <li>
                        <img src="images/5.jpg" alt="picture">
                        <h2>News Heading</h2>
                        <p>Add a short exerpt here... <a href="#">more</a></p>
                    </li>

                    <li>
                        <img src="images/6.jpg" alt="picture">
                        <h2>News Heading</h2>
                        <p>Add a short exerpt here... <a href="#">more</a></p>
                    </li>

                </ul><!-- end Slider #1 -->

            </div><!-- end wrapper -->
        </div>
    </body>

</html>