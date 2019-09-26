<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-970">
    

 
                <!--..-->
                <div class="container">
                <div class="swiper-container">

<div class="swiper-wrapper nav nav-tabs">

                <div class="swiper-slide"> <img src="images/1.jpg" alt="picture">
                <h2>News Heading</h2>
                <p>Add a short exerpt here... <a href="#">more</a></p>
            </div>
                <div class="swiper-slide"> <img src="images/2.jpg" alt="picture">
                <h2>News Heading</h2>
                <p>Add a short exerpt here... <a href="#">more</a></p>
            </div>
                <div class="swiper-slide"> <img src="images/3.jpg" alt="picture">
                <h2>News Heading</h2>
                <p>Add a short exerpt here... <a href="#">more</a></p>
            </div>
                <div class="swiper-slide"> <img src="images/4.jpg" alt="picture">
                <h2>News Heading</h2>
                <p>Add a short exerpt here... <a href="#">more</a></p>
            </div>
                <div class="swiper-slide"> <img src="images/5.jpg" alt="picture">
                <h2>News Heading</h2>
                <p>Add a short exerpt here... <a href="#">more</a></p>
            </div>
                <div class="swiper-slide"> <img src="images/6.jpg" alt="picture">
                <h2>News Heading</h2>
                <p>Add a short exerpt here... <a href="#">more</a></p>
            </div>
                <div class="swiper-slide"> <img src="images/7.jpg" alt="picture">
                <h2>News Heading</h2>
                <p>Add a short exerpt here... <a href="#">more</a></p>
            </div>
  

</div>

                                    <div class="swiper-pagination"></div>


                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
</div>

                  </div>
        
    </div>



