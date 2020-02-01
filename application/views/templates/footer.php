<div class="footer">
    <!-- container -->
    <div class="container">
        <div class="col-md-2 stores-grid">
            <div class="stores">
                <h3>Contact</h3>
                <ul>
                    <li>Prabhat Kumar Joshi</li>
                    <li>Mohalla Galli, Jakhandevi</li>
                    <li>Almora-263601</li>
                    <li>Kumaun Hills (India)</li>
                    <li>+91 70371 34636</li>
                    <li>+91 97201 74139</li>
                    <li>&nbsp;</li>
                    <li><a href="#" style="color:#fff"><i class="fa fa-whatsapp">+91 97201 74139</i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 support">
            <h3>Quick Links</h3>
            <div class="support-grids">
                <div class="support">
                    <ul style="list-style:none">                        
                        <li><a href="<?php echo site_url(). '/web/about';?>" style="color:bisque">About Artist</a></li>
                        <li><a href="<?php echo site_url(). '/web/painting/1';?>" style="color:bisque">Forest Paintings</a></li>
                        <li><a href="<?php echo site_url(). '/web/painting/2';?>" style="color:bisque">Mountain Paintings</a></li>
                        <li><a href="<?php echo site_url(). '/web/painting/3';?>" style="color:bisque">Ruins Paintings</a></li>
                        <li><a href="<?php echo site_url(). '/web/views';?>" style="color:bisque">Views & Comments</a></li>
                        <li><a href="<?php echo site_url(). '/web/contact';?>" style="color:bisque">Contact</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-7 blog">
            <h3 style="color: #f45a40;">Client's <span
                    style="color: dimgray">Testimonials</span></h3>
            <div class="vticker">
                <ul>
                    <li>                        
                        <p
                            style="color:#000;font-size: 16px;text-align:justify;margin:1.2em 0;font-family: 'Roboto Condensed', sans-serif;">
                            Miniaturization is that part of a vibrant creative process which enables an artist to express a whole lot on a
very small canvas. The capacity of Prabhat Joshi to express through a streak of light full glory of a dazzling
sun is indeed a great achievement</p>
                        <span style="color:#f45a40; font-size:13px; font-weight:bold;">- Anand Dev, Formerly Executive President, Lalit Kala Academy, New Delhi</span>
                    </li>
                    <li>
                    <p
                            style="color:#000;font-size: 16px;text-align:justify;margin:1.2em 0;font-family: 'Roboto Condensed', sans-serif;">
                            Although the paintings are of different sizes, his main speciality is in miniature painting – in sizes verifying from as small as 6-7 mm to 2-2.5 cm and the subject almost invariably skill and devotion to details</p>
                        <span style="color:#f45a40; font-size:13px; font-weight:bold;">- B.D.Pande I.C.S. Retd. Formerly Cabinet Secretary of Govt. of India</span>
                    </li>
                    <li>
                    <p
                            style="color:#000;font-size: 16px;text-align:justify;margin:1.2em 0;font-family: 'Roboto Condensed', sans-serif;">
                            Indeed your work is par excellence and ot depicts the closesr picture of the Himalayas. I had been to enchanting ranges of Himalayas from Karakoram in Jammu & Kashmir to Kanchenjunga in the North-East; and based on my personal experience, I feel that the serenity and sanctity of the great Himalaya is intact in your work.</p>
                        <span style="color:#f45a40; font-size:13px; font-weight:bold;">- Ramesh V.S. Koranga, A Reputed Mountaineer</span>
                    </li>
                </ul>
            </div>
            <div style="float:right; margin-top:10px;">
                <button class="btn btn-primary up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
                <button class="btn btn-primary down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="copyright">
            <p>Developed by <a href="https://teamfreelancers.com/" target="_blank">Teamfreelancers.com</a></p>
            </p>
        </div>
        <!-- // container -->
    </div>
    <!-- //footer -->
    <script type="text/javascript">
        $(document).ready(function() {

            var dd = $('.vticker').easyTicker({
                direction: 'up',
                easing: 'easeInOutBack',
                speed: 'slow',
                interval: 8000,
                height: 'auto',
                visible: 1,
                mousePause: 0,
                controls: {
                    up: '.up',
                    down: '.down',
                    toggle: '.toggle',
                    stopText: 'Stop !!!'
                }
            }).data('easyTicker');


            $('.vis').click(function() {
                dd.options['visible'] = 3;
            });

            $('.visall').click(function() {
                dd.stop();
                dd.options['visible'] = 0;
                dd.start();
            });

        });
    </script>
    
    </body>

    </html>