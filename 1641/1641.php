<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Block 1641</title>
    <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1641.less', 'css/1641.css');
        ?>
    <link href="css/1641.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/swiper.min.css">
</head>
<body>
    <?php include '../1641/1641-content.php'; ?>
    <script src="js/swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        hashNavigation: {
            watchState: true,
        },
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

</body>
</html>