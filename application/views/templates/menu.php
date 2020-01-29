<body>
    <!-- header -->
    <div class="header">
        <!-- container -->
        <div class="container">
            <!-- header-top -->
            <div class="header-top">
                <div class="header-logo">
                    <a href="#">HIMALAYAN PAINTINGS</a>
                </div>
                <div class="header-right">
                    <ul>
                        <li class="phone">+91 70371 34636</li>                        
                        <li class="phone">+91 97201 74139</li>    
                        <li class="mail"><a href="mailto:himapalyan@mail.com">mailme@himalayanpaintings.com</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //header-top -->
            <div class="top-nav">
                <span class="menu"><img src="<?php echo base_url() . 'assets/images/menu.png';?>" alt=""></span>
                <ul class="nav">
                    <li><a href="<?php echo site_url(). '/web';?>">HOME</a></li>
                    <li><a href="<?php echo site_url(). '/web/about';?>">ABOUT THE ARTIST</a></li>

                    <li class="dropdown1"><a href="#">PAINTING</a>
                        <ul class="dropdown2">
                            <li><a href="<?php echo site_url(). '/web/painting/1';?>">FOREST</a></li>
                            <li><a href="<?php echo site_url(). '/web/painting/2';?>">MOUNTAINS</a></li>
                            <li><a href="<?php echo site_url(). '/web/painting/3';?>">RUINS</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url(). '/web/views';?>">VIEWS & COMMENTS</a></li>
                    <li><a href="<?php echo site_url(). '/web/contact';?>">CONTACT</a></li>
                </ul>
            </div>
            <div class="search">
                <form>
                    <input type="text" value="Search..." onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Search...';}" required="">
                </form>
            </div>
            <div class="clearfix"> </div>
            <!-- script-for-menu -->
            <script>
            $("span.menu").click(function() {
                $(" ul.nav").slideToggle("slow", function() {});
            });
            </script>
        </div>
        <!-- //container -->
    </div>