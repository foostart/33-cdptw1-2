<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
 <body>
<div class="type-2022" style=" background: url(images/site_bg.jpg);">
    <div class="container"> 
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-hash="slide1"> <a href=""><img src="images/phongcanh1.jpg" /></a></div>
                <div class="swiper-slide" data-hash="slide2"> <img src="images/phongcanh2.jpg" data-caption="#htmlCaption"/></div>
                <div class="swiper-slide" data-hash="slide3"> <img src="images/phongcanh3.jpg"/></div>
                <div class="swiper-slide" data-hash="slide4"> <img src="images/phongcanh4.jpg"/></div>
                <div class="swiper-slide" data-hash="slide3"> <img src="images/phongcanh5.jpg"/></div>
                <div class="swiper-slide" data-hash="slide3"> <img src="images/phongcanh6.jpg"/></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
         
    </div>
</div>
 </body>
