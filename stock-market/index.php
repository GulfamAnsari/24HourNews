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
   <?php include ($_SERVER['DOCUMENT_ROOT'].'/header.php');?>


    <!-- masonry
   ================================================== -->
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>
                <script>
                    var newsList = [];


                    <?php $xml=simplexml_load_file("https://economictimes.indiatimes.com/markets/stocks/rssfeeds/2146842.cms"); ?>
                    list = <?php echo json_encode($xml) ?>;
                    newsList = [...newsList, ...list.channel.item];


                    <?php $xml=simplexml_load_file("https://www.moneycontrol.com/rss/business.xml"); ?>
                    list = <?php echo json_encode($xml) ?>;
                    newsList = [...newsList, ...list.channel.item];

                    <?php $xml=simplexml_load_file("https://www.moneycontrol.com/rss/buzzingstocks.xml"); ?>
                    list = <?php echo json_encode($xml) ?>;
                    newsList = [...newsList, ...list.channel.item];

                    <?php $xml=simplexml_load_file("https://www.moneycontrol.com/rss/internationalmarkets.xml"); ?>
                    var list = <?php echo json_encode($xml) ?>;
                    newsList = [...newsList, ...list.channel.item];


                    <?php $xml=simplexml_load_file("https://www.moneycontrol.com/rss/marketedge.xml"); ?>
                    var list = <?php echo json_encode($xml) ?>;
                    newsList = [...newsList, ...list.channel.item];


                    <?php $xml=simplexml_load_file("https://www.moneycontrol.com/rss/results.xml"); ?>
                    var list = <?php echo json_encode($xml) ?>;
                    newsList = [...newsList, ...list.channel.item];


                    <?php $xml=simplexml_load_file("https://www.moneycontrol.com/rss/marketreports.xml"); ?>
                    var list = <?php echo json_encode($xml) ?>;
                    newsList = [...newsList, ...list.channel.item];


                    newsList.sort(function(a, b) {
                        var c = new Date(a.pubDate);
                        var d = new Date(b.pubDate);
                        return d-c;
                    });
                    console.log(newsList);
                </script>
                <div id="newsArticle">
                    <script>
                        var htmlEle = '';
                        for (var n of newsList) {
                            htmlEle = htmlEle + 
                            `<article class="brick entry format-standard animate-this">
                                <div class="entry-thumb">
                                    <a target="_blank" href="${n.link}" class="thumb-link">
                                        <img src="${n.image || getImageDes(n.description).src}">
                                    </a>
                                </div>
                                <div class="entry-text">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="cat-links">
                                                ${new Date(n.pubDate).toLocaleString()}
                                            </span>
                                        </div>
                                        <a target="_blank" href="${n.link}"><h1 class="entry-title">${n.title}
                                        </h1></a>
                                    </div>
                                    <div class="entry-excerpt">
                                        ${n && n.description ? getImageDes(n.description).des || "": ""}
                                    </div>
                                </div>
                            </article>`
                        }

                        function getImageDes(string) {
                            if (typeof(string) === 'string' && string.slice(0, 4) === '<img') {
                                var split = string.split("/>");
                                var src =  /src="(.*?)"/g.exec(string)[1];
                                return { des: split[1] || "", src };
                            } else if(typeof(string) === 'string' && string.slice(0, 2) === '<a') {
                                var split = string.split("</a>");
                                var src =  /src="(.*?)"/g.exec(string)[1] || "";
                                return { des: split[1] || "", src };
                            } else {
                                return { des: string || "", src: "" };
                            }
                        }
                        document.getElementById("newsArticle").innerHTML = htmlEle;
                    </script>
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


