<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
     $less->compileFile('./less/970.less', 'css/970.css');
       
?>
<!DOCTYPE html>
<html lang="en">
<title>970</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
 
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
           <script src="<?php echo $url_path ?>/js/swiper.js" ></script>
           <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">       
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/970.js" ></script>

        <link href="<?php echo $url_path ?>/css/970.css" rel="stylesheet" type="text/css"/>
                    
        <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/970.less', 'css/970.css');
        ?>
    </head>
    
    <body>
 <!-- Initialize Swiper -->
 <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
          <?php include './970-content.php'; ?>


    </body>
</html>


