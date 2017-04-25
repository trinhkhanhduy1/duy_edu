<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>


<div class="type-2044">  
    <!--Begin Follow-->
    <div class="follow-us">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="span4">
                        <div class="follow">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                                <div class="text">
                                    <h4>Follow us on Facebook</h4>
                                    <p>Faucibus toroot menuts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="span4">
                        <div class="follow">
                            <a href="#">
                                <i class="fa fa-google"></i>
                                <div class="text">
                                    <h4>Follow us on Google Plus</h4>
                                    <p>Faucibus toroot menuts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="span4">
                        <div class="follow">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                                <div class="text">
                                    <h4>Follow us on Linkedin</h4>
                                    <p>Faucibus toroot menuts</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Follow-->

    <!--Begin Footer-->


    <footer>
        <div class="ie-pg">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-3">
                        <h2>Our Articles</h2>
                        <div class="widget widget-slider" id="myCarousel">
                            <div id="carousel-2" class="owl-carousel owl-theme">
                                <div class="item"><img src="http://<?php echo $url_path ?>/images/article.jpg" alt="The Last of us"></div>
                                <div class="item"><img src="http://<?php echo $url_path ?>/images/article.jpg" alt="The Last of us"></div>
                                <div class="item"><img src="http://<?php echo $url_path ?>/images/article.jpg" alt="The Last of us"></div>
                            </div>
                        </div>

                        <div class="text">
                            <p class="color">Duis semper nuncid</p>
                            <p>Semper nunc id metus sagittis nec ullamcorper justo qondimentum mattis.</p>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="widget widget-top-rated">
                            <h2>Top Rated Courses</h2>
                            <ul>
                                <li>
                                    <div class="thumb-footer">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/toprated.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p>Business Plan Buil a Business Plan..</p>
                                        <span>$17.5</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-footer">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/toprated.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p>Business Plan Buil a Business Plan..</p>
                                        <span>$127.5</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-footer">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/toprated.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p>Business Plan Buil a Business Plan..</p>
                                        <span>$150.5</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="widget widget-top-rated">
                            <h2>Recent Reviews</h2>
                            <ul>
                                <li>
                                    <div class="thumb-footer">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/toprated.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p>Trusted Certificate</p>
                                        <span>By Demo User</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-footer">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/toprated.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p>1200 Video Lessons</p>
                                        <span>By the Retailer</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb-footer">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/toprated.jpg" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p>1200 Video Lessons</p>
                                        <span>By the Retailer</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <div class="widget widget-posts">
                            <h2>Recent Posts</h2>
                            <ul>
                                <li>
                                    <p>User On <a href="#">First post Name</a></p>
                                </li>
                                <li>
                                    <p>User On <a href="#">First post Name</a></p>
                                </li>
                                <li>
                                    <p>User On <a href="#">First post Name</a></p>
                                </li>
                                <li>
                                    <p>User On <a href="#">First post Name</a></p>
                                </li>
                                <li>
                                    <p>User On <a href="#">First post Name</a></p>
                                </li>
                                <li>
                                    <p>User On <a href="#">First post Name</a></p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="tweets">
            <div class="container">
                <div class="tweet-contant">
                    <i class="fa fa-twitter"></i>
                    <h4>Weekly Updates</h4>
                    <div class="bx-wrapper" >
                        <div class="bx-viewport">
                            <div class="bxslider" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <li>
                                                <p>Are you a morning person or is the night time the right time? Interesting perspectives on the forum -
                                                    <a href="#">http://t.co/tdEHlbZf</a>
                                                </p>
                                            </li>
                                        </div>

                                        <div class=" item" data-slide-number="1">
                                            <li >
                                                <p>Dolor donec sagittis sapien. Ante aptent feugiat adipisicing. Duis int. - <a href="#">http://t.co/tdEHlbZf</a></p>
                                            </li>
                                        </div>

                                        <div class=" item" data-slide-number="2">
                                            <li >
                                                <p>Duis interdum olor donec sagittis sapien. Ante aptent feugiat adipisicing - <a href="#">http://t.co/tdEHlbZf</a></p>
                                            </li>
                                        </div>

                                    </div><!-- Carousel nav -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-3">
                        <div class="widget widget-categories">
                            <h2>Course Categories</h2>
                            <ul>
                                <li><a href="#">Site Style Changer</a></li>
                                <li><a href="#">Bredcrums</a></li>
                                <li><a href="#">Bottom Sidebar</a></li>
                                <li><a href="#">Right Sidebar</a></li>
                                <li><a href="#">Left Sidebar</a></li>
                                <li><a href="#">Sitemap Page Setting</a></li>
                                <li><a href="#">Site Style Changer</a></li>
                                <li><a href="#">Bredcrums</a></li>
                                <li><a href="#">Bottom Sidebar</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3">
                        <div class="widget widget-facebook">
                            <h2>Fcebook</h2>
                            <div class="pull-left">
                                <img src="http://<?php echo $url_path ?>/images/facebook-widget.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3">
                        <div class="widget widget-newsletter">
                            <h2>Newsletters</h2>
                            <div class="newsletter-contant">
                                <p>Subscribe to be the first to know about best deals and exclusive offers!</p>
                                <p><input type="text" class="input-block-level"></p>
                                <p><button>Subscribe</button></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3">
                        <div class="">
                            <h2>Where we are?</h2>
                            <div class="location-map">
                                <iframe class="map-where" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13872.509451365475!2d106.75299441534422!3d10.846141300000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1490867869849" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="copyright">
            <div class="container">
                <p>� Copyrights 2014-15. All Rights Reserved <a href="#">CrunchPress</a></p>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <script>
        $(document).ready(function () {
            var owl2 = $('#carousel-2');
            owl2.owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    }
                }
            })
        });
    </script>
</div>