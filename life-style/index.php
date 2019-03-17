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
   <?php include ($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>


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
                                <?php	$xml=simplexml_load_file("https://timesofindia.indiatimes.com/rssfeeds/2886704.cms") or die("Error: Cannot create object");
						foreach($xml->channel->item as $item) 
						{ preg_match('/src=(["\'])([^\1]*)\1/i', $item->description, $m);
							preg_match('/<a[^>]+href=([\'"])(?<href>.+?)\1[^>]*>/i', $item->description, $a);
							?>
                                <li>
                                    <div class="featured-post-slide">

                                        <div class="post-background"
                                            style="background-image:url(<?php echo $m[2]; ?>);">
                                        </div>

                                        <div class="overlay"></div>

                                        <div class="post-content">
                                            <ul class="entry-meta">
                                                <li><?php echo $item->pubDate ?></li>
                                            </ul>

                                            <h1 class="slide-title"><a href=<?php echo $a['href'];?> title="">
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
                            <?php
								preg_match('/src=(["\'])([^\1]*)\1/i', $item->description, $m);
								preg_match('/<a[^>]+href=([\'"])(?<href>.+?)\1[^>]*>/i', $item->description, $a);
							?>

                            <a href=<?php echo $a['href'];?> class="thumb-link">
                                <img src=<?php echo $m[2];?> alt="USAF rocket">
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

    <?php include ($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
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
