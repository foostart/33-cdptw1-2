
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title></title>

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1641.less', 'css/1641.css');
        ?>
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
$less->compileFile('less/1641.less', 'css/1641.css');

?>
    <link href="css/1641.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</head>

     <?php include '../1641/1641-content.php'; ?>
    <script src="./js/swiper-4.5.0/dist/js/swiper.min.js"></script>
    <script src="js/1641.js" ></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</html>