<html>
<head>
    <title>The Compass</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   

    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="jquery.qtip.css" rel="stylesheet" type="text/css">
    <link href="flexslider.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">

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
                        <img src="images/slide1.jpg">
                    </li>
                    <li>
                        <img src="images/slide2.jpg">
                    </li>
                    <li>
                        <img src="images/slide3.jpg">
                    </li>
                     <li>
                        <img src="images/slide4.jpg">
                    </li>
                </ul>
            </div>

            <!-- List of Triggers -->
            <ul class="triggers">
                <li class="trigger-item">
                    <a href="about" class="tip" title="About us" data-url="about.html" data-type="page" data-title="About"><i class="icon-user"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="portfolio" class="tip" title="Portfolio" data-url="portfolio.html" data-type="page" data-title="Portfolio"><i class="icon-briefcase"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="#" class="tip" title="Twitter" data-type="link" data-title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="#" class="tip" title="LinkedIn" data-type="link" data-title="LinkedIn" target="_blank"><i class="icon-linkedin"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="#" class="tip" title="GitHub" data-type="link" data-title="GitHub" target="_blank"><i class="icon-github"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="#" class="tip" title="Google+" data-type="link" data-title="Google+" target="_blank"><i class="icon-google-plus"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="contact" class="tip" title="Contact us" data-url="contact.php" data-type="page" data-title="Email"><i class="icon-envelope-alt"></i></a>
                </li>
                <li class="trigger-item">
                    <a href="resume" class="tip" title="Resume" data-url="resume.html" data-type="page" data-title="Resume"><i class="icon-file-alt"></i></a>
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

    <script type="text/javascript" src="main.min.js"></script>
    <script type="text/javascript" src="flexslider.js"></script>
    <script type="text/javascript" src="jquery.qtip.min.js"></script>
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
    <script type="text/javascript" src="scripts.js"></script>

</body>
</html>