<!-- //header -->
<!-- banner -->
<div class="banner">
    <!-- banner Slider starts Here -->
    <script src="<?php echo base_url() . 'assets/js/responsiveslides.min.js';?>"></script>
    <script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
    </script>
    <!--//End-slider-script -->
    <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li>
                <div class="banner-bg">
                    <div class="container">
                        <div class="banner-info">
                            <h2>Himalayan paintings</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img2">
                    <div class="container">
                        <div class="banner-info">
                            <h2>Himalayan paintings</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-bg banner-img">
                    <div class="container">
                        <div class="banner-info">
                            <h2>Himalayan paintings</h2>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="products">
    <div class="container">
        <div class="banner-bottom-grids">
            <div class="col-md-4 bottom-grid">
                <img src="<?php echo base_url() . 'assets/images/Forest/1.jpg';?>" style="max-height:400px;" alt="" />
                <div class="bottom-grid-info">
                    <a href="<?php echo site_url(). '/web/painting/1';?>">FOREST PAINTINGS</a>
                    <p></p>
                    <p>&nbsp;</p>
                    <div class="buy-now">
                        <a href="<?php echo site_url(). '/web/painting/1';?>">CHECK MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bottom-grid">
                <img src="<?php echo base_url() . 'assets/images/Mountains/2.jpg';?>" style="max-height:400px;" alt="" />
                <div class="bottom-grid-info">
                    <a href="<?php echo site_url(). '/web/painting/2';?>">MOUNTAINS PAINTINGS</a>
                    <p></p>
                    <p>&nbsp;</p>
                    <div class="buy-now">
                        <a href="<?php echo site_url(). '/web/painting/2';?>">CHECK MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bottom-grid">
                <img src="<?php echo base_url() . 'assets/images/Ruins/2.jpg';?>" style="max-height:400px;" alt="" />
                <div class="bottom-grid-info">
                    <a href="<?php echo site_url(). '/web/painting/3';?>">RUINS PAINTINGS</a>
                    <p></p>
                    <p>&nbsp;</p>
                    <div class="buy-now">
                        <a href="<?php echo site_url(). '/web/painting/3';?>">CHECK MORE</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- banner-bottom -->
<!-- products -->
<!-- // products -->
<!-- products-bottom -->
<div class="products-bottom">
    <!-- container -->
    <div class="container">
        <div class="col-md-12">
            <h3 style="color:#f45a40; font-size:23px; font-weight: 600;">About <span style="color: dimgray">The Artist</span></h3>
            <p
                style="color:#777;font-size: 18px;text-align:justify;margin:2em 0;font-family: 'Roboto Condensed', sans-serif;">
                <span style="color: #f45a40;font-size: 18px;font-weight: 600;">Prabhat Joshi</span> being painter is much, much more than a job or a dream to peruse. It has been
a lifestyle. A second nature, which has lived with him since childhood. From the crayon patterns
on the paper to the marvelous miniature landscapes, with the most minute details. It has been
arduous journey. Now he is probably the only scratch painting artist in the World, a style
invented and developed by him.<br> Perched in a city 6000 ft. above the sea level in the Shivalik mountain ranges of Mahahimalayas, he is trying to fulfill an almost mystical task of capturing the natural beauty of the region and then translating it into his imaginary paintings called miniature landscapes.
Not only this many of his miniatures, reminding of ancient ruins or may be the ruins we all have deep within us, take you to a magical mystery tour in the world, in the past, in your own subconscious. That is probably why he has not given any name to them, you can name them what you like.
            </p>
            <div class="buy-now">
                <a href="<?php echo site_url(). '/web/about';?>">KNOW MORE</a>
            </div>
            <p>&nbsp;</p>
        </div>        
        <div class="clearfix"> </div>
    </div>
    <!-- //container-->
</div>
<!-- //products-bottom -->
<!-- sign-up -->
<div class="sign-up">
    <!-- container -->
    <div class="container">
        <div class="sign-up-left">
            <p><span>Check</span> our exclusive paintings</p>
        </div>
        <div class="header-right">
            <ul>
                <li class="phone" style="color:#fff">+91 70371 34636</li>
                <li class="phone" style="color:#fff">+91 97201 74139</li>
                <li class="mail"><a href="mailto:himapalyan@mail.com"
                        style="color:#fff">mailme@himalayanpaintings.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //container -->
</div>
<!-- //sign-up -->
<!-- footer -->