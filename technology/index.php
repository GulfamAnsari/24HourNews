<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>News24Hours</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/vendor.css">
    <link rel="stylesheet" href="../css/main.css">


    <!-- script
   ================================================== -->
    <script src="../js/modernizr.js"></script>
    <script src="../js/pace.min.js"></script>

    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <link rel="icon" href="/images/logo.png" type="image/x-icon">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
    <header class="short-header">

        <div class="gradient-block">

        </div>

        <div class="row header-content">

            <div class="logo">
                <a href="index.html">Author</a>
            </div>

            <nav id="main-nav-wrap">
                <ul class="main-navigation sf-menu">
                    <li><a class="navHeading current" href="/"><i class="fa fa-home" style="padding-right:5px"></i>Top
                            Stories</a></li>
                    <li><a class="navHeading" href="/world/">world</a></li>
                    <li><a class="navHeading" href="/india/">India</a></li>
                    <li><a class="navHeading" href="/politics/">Politics</a></li>
                    <li><a class="navHeading" href="/technology/">Technology</a></li>
                    <li><a class="navHeading" href="/sports/">Sports</a></li>
                    <li><a class="navHeading" href="/entertainment/">Entertainment</a></li>
                    <li><a class="navHeading" href="/economy/">Economy</a></li>
                    <li><a class="navHeading" href="/business/">Business</a></li>
                </ul>
            </nav> <!-- end main-nav-wrap -->

            <div class="search-wrap">

                <form role="search" method="get" class="search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s"
                            title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>

                <a href="#" id="close-search" class="close-btn">Close</a>

            </div> <!-- end search wrap -->

            <div class="triggers">
                <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
                <a class="menu-toggle" href="#"><span>Menu</span></a>
            </div> <!-- end triggers -->

        </div>

    </header> <!-- end header -->


    <!-- masonry
   ================================================== -->
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                <div class="brick entry featured-grid animate-this">
                    <div class="entry-content">
                        <div id="featured-post-slider" class="flexslider">
                            <ul class="slides">
                                <?php	$xml=simplexml_load_file("http://gadgets.ndtv.com/rss/feeds.xml");
						foreach($xml->channel->item as $item) {
							?>
                                <li>
                                    <div class="featured-post-slide">

                                        <div class="post-background"
                                            style="background-image:url(<?php echo $item->storyimage; ?>);">
                                        </div>

                                        <div class="overlay"></div>

                                        <div class="post-content">
                                            <ul class="entry-meta">
                                                <li><?php echo $item->pubDate ?></li>
                                            </ul>

                                            <h1 class="slide-title"><a href=<?php echo $item->link;?> title="">
                                                    <?php echo $item->title; ?>
                                                </a></h1>
                                        </div>

                                    </div>
                                </li> <!-- /slide -->
                                <?php } ?>
                            </ul> <!-- end slides -->
                        </div> <!-- end featured-post-slider -->
                    </div> <!-- end entry content -->
                </div>
                <div>
                    <?php
						foreach($xml->channel->item as $item) 
						{  
							?>
                    <article class="brick entry format-standard animate-this">

                        <div class="entry-thumb">
                            

                            <a href=<?php echo $item->link;?> class="thumb-link">
                                <img src=<?php echo $item->storyimage;?> alt="USAF rocket">
                            </a>
                        </div>

                        <div class="entry-text">
                            <div class="entry-header">

                                <!-- <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="#">Design</a>
                                        <a href="#">UI</a>
                                    </span>
                                </div> -->

                                <h1 class="entry-title"><a href="single-standard.html"></a><?php echo $item->title; ?>
                                </h1>
                            </div>
                            <div class="entry-excerpt"><?php echo preg_replace("/<\/?img( [^>]*)?>/i", "",
                                $item->description); ?></div>
                        </div>
                    </article>
                    <?php
						} 	
					?>
                </div>

    </section>

    <footer>

        <div class="footer-main">

            <div class="row">

                <div class="col-four tab-full mob-full footer-info">

                    <h4>About Our Site</h4>

                    <p>
                        Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu
                        magna Duis
                        cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In
                        reprehenderit commodo
                        aliqua irure labore.
                    </p>

                </div> <!-- end footer-info -->

                <div class="col-two tab-1-3 mob-1-2 site-links">

                    <h4>Site Links</h4>

                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end site-links -->

                <div class="col-two tab-1-3 mob-1-2 social-links">

                    <h4>Social</h4>

                    <ul>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Google+</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>

                </div> <!-- end social links -->

                <div class="col-four tab-1-3 mob-full footer-subscribe">

                    <h4>Subscribe</h4>

                    <p>Keep yourself updated. Subscribe to our newsletter.</p>

                    <div class="subscribe-form">

                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="dEmail" class="email" id="mc-email"
                                placeholder="Type &amp; press enter" required="">

                            <input type="submit" name="subscribe">

                            <label for="mc-email" class="subscribe-message"></label>

                        </form>

                    </div>

                </div> <!-- end subscribe -->

            </div> <!-- end row -->

        </div> <!-- end footer-main -->

        <div class="footer-bottom">
            <div class="row">

                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright Abstract 2016</span>
                        <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                    </div>

                    <div id="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                    </div>
                </div>

            </div>
        </div> <!-- end footer-bottom -->

    </footer>
    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Java Script
   ================================================== -->
    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>


