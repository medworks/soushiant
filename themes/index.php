<html>
<head>
    <title>Soushiant.Co</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE9">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   

    <link href="./themes/css/main.css" rel="stylesheet" type="text/css">
    <link href="./themes/css/jquery.qtip.css" rel="stylesheet" type="text/css">
    <link href="./themes/css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="./themes/css/style.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        #switch {
            background: #2c3e50;
            color: #eee;
            position: absolute;
            padding: 10px 20px;
            top: 50px;
            left: 0px;
            font-size: 12px;
            border-radius: 0px 6px 6px 0px;
        }

        #switch ul {
            margin-bottom: 5px;
        }

        #switch ul li {
            cursor: pointer;
            padding-left: 10px;
        }

        #switch ul li:hover {
            background: #34495e;
        }

        @media screen and (max-width: 480px) {
            #switch {
                display: none;
            }
        }
    </style> 
    <style type="text/css">
        .cf-hidden { display: none; } .cf-invisible { visibility: hidden; }
    </style>
</head>

<body class="circular-animation flat-color">
    <div class="loader"></div>
    <div class="main">
        <!-- Cricle -->
        <div class="circle">
            <!-- Description Block 
            <div class="description"></div> 
            End Description Block -->

            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="./themes/images/slideshow/slide1.jpg">
                    </li>
                    <li>
                        <img src="./themes/images/slideshow/slide2.jpg">
                    </li>
                    <li>
                        <img src="./themes/images/slideshow/slide3.jpg">
                    </li>
                     <li>
                        <img src="./themes/images/slideshow/slide4.jpg">
                    </li>
                </ul>
            </div>

            <!-- List of Triggers -->
            <ul class="triggers">
                <li class="trigger-item">
                    <a href="about" class="tip" title="درباره ما" data-url="about.html" data-type="page" data-title="About"><i class="icon-info"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="gallery" class="tip" title="گالری تصاویر" data-url="gallery.html" data-type="page" data-title="Gallery"><i class="icon-laptop"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="#" class="tip" title="پنل اس ام اس" data-type="link" data-title="sms-panel" target="_blank"><i class="mobile"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="portfolio" class="tip" title="کارهای ما" data-url="portfolio.html" data-type="page" data-title="Portfolio" target="_blank"><i class="icon-terminal"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="#" class="tip" title="Google+" data-type="link" data-title="Google+" target="_blank"><i class="google"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="#" class="tip" title="GitHub" data-type="link" data-title="GitHub" target="_blank"><i class="icon-github"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="internet" class="tip" title="اینترنت" data-url="internet.html" data-type="page" data-title="اینترنت"><i class="icon-signal"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="contact" class="tip" title="تماس با ما" data-url="contact.php" data-type="page" data-title="Email"><i class="icon-envelope-alt"></i></a>
                </li>
            </ul>
            <!-- End List of Triggers -->
        </div>
        <!-- End Circle -->

        <!-- Main Info -->
        <div class="main_info">
            <h1>Soushiant.Co</h1>
            <p>All right reserved by Soushiant company</p><p>
        </p></div>
        <!-- End Main Info -->
    </div>
    <!-- Page Container -->
    <div class="page">
        <!-- Close Button -->
        <a href="/" class="close-page">×</a>
        <!-- End Close Button -->

        <div class="content"></div>
    </div>
    <!-- End Page Container -->

    <script type="text/javascript" src="./themes/js/main.min.js"></script>
    <script type="text/javascript" src="./themes/js/flexslider.js"></script>
    <script type="text/javascript" src="./themes/js/jquery.qtip.min.js"></script>
    <script type="text/javascript">
        $('.switch_color li').on('click', function () {
             var color = $(this).data('color');
             
             Compass.loader.start();
             
             $('body').removeClass('flat-color dark-color cool-color').addClass(color+'-color');
             
             Compass.loader.stop();
        });

        $('.switch_animate li').on('click', function () {
             var animation = $(this).data('anim');

             Compass.loader.start();
             $('.main').removeClass('animate');

             $('body').removeClass('circular-animation scaling-animation').addClass(animation+'-animation'); 
             
             $('.main').addClass('animate');
             Compass.loader.stop();                
        });
    </script>
    <script type="text/javascript" src="./themes/js/scripts.js"></script>

</body>
</html>