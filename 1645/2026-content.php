<!DOCTYPE html>
<html>
    <head>
        <title>Đồ án</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/2026.less', 'css/2026.css');
        ?>
        <link href="css/2026.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body> 
        <div class="type-2026 " style="background: url(images/site_bg.jpg);">
            <!--BEGIN MENU -->
            <nav class="navbar-default" role="navigation">
                <div class="container">
                    <!--BEGIN NAVMIN -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--LOGO-->
                       <div class="logo_image">
                           <img src="images/logo.png" alt="Varse" class="img-responsive" >
                  </div>
                    </div>
                    <!--END NAVMIN -->
                    <!--BEGIN MENU RIGHT-->
                    <div class="navbar-collapse" id="bs-slide-dropdown">
                        <ul class="nav navbar-nav navbar-right">
                            <!--HOME-->
                            <li class="dropdown active-item">
                                <a href="#" class="dropdown-toggle active-item " data-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Simple Slider</a></li>
                                    <li><a href="#">Motion Slider</a></li>
                                    <li><a href="#">Dropdown</a></li>
                                </ul>
                            </li>
                           
                            <!--Services-->
                            <li><a href="#">Services</a></li>
                            <!--Tours-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours</a>
                                <ul class="dropdown-menu">
                                     <li><a href="#">List Layout</a></li>
                                    <li><a href="#">Grid Layout</a></li>
                                    <li><a href="#">Dropdown</a></li>
                                </ul>
                            </li>
                            <!--BLOG-->
                              <li><a href="#">Blog</a></li>
                            <!--GALLERY-->
                              <li><a href="#">Gallery</a></li>
                            <!--Contact-->
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!--END MENU RIGHT-->
                </div>
            </nav>
            <!--END MENU -->
        </div>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>