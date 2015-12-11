<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>razorgank.com - .- -. --. . .-. .. ... .- --. .. ..-. -</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2848495-9', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand maintitle" href="#page-top">razorgank.com</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#myservices">Services</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#hosting">Hosting</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="linuxterminal">#LinuxTerminal</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <img class="img-responsive" src="img/my-profile.png" alt=""><br />
                        <span class="login-status greentext">Last login: <?php echo date('D M d H:i:s Y'); ?> from <?php echo $_SERVER['REMOTE_ADDR']; ?><br />
                You must be from <?php echo geoip_country_name_by_name($_SERVER['REMOTE_ADDR']); ?>
                        </span><br /><br />
                    <a href="#qrBitcoin" class="portfolio-link" data-toggle="modal">
                        <img class="img-responsive" src="img/pay-with-bitcoin.png" alt=""></a><br />
                        <ul class="list-inline">
                            <li>
                                <a href="http://facebook.com/rockerprog" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="http://instagram.com/rai_icasiano" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="http://twitter.com/razorgank" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="http://github.com/ricasiano" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/profile/view?id=390292809&trk=hp-identity-photo" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>



                        </ul>
			<br />
		    <div class="intro-text">
                        <span class="skills greentext">Web Hosting - Web Development - Web Security - VOIP</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="myservices">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioWebdev" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                             <h3>WebDev</h3>
                            </div>
                        </div>
                        <img src="img/services-webdev.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioWebsec" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                             <h3>WebSec</h3>
                            </div>
                        </div>
                        <img src="img/services-websec.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioVoip" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                             <h3>VOIP</h3>
                            </div>
                        </div>
                        <img src="img/services-voip.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Hosting Section -->
    <section class="hosting" id="hosting">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Web Hosting</h2>
                    <br /><br />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" align="center">
                    <img src="img/shell.png" />
                </div>
                <div class="col-lg-4">
                    <p>What would you spend for <b><i class="context">20 pesos</i></b>? Have your own website! For <b><i class="context">P20.00 a month</i></b>, you'll have your own web space running on LAMP stack. Suitable for personal websites, small business sites or prototyping!</p>
                    <br /><br />
                    <a href="#hostingInfo" class="btn btn-lg btn-outline" data-toggle="modal">
                        <i class="fa fa-globe"></i> More Info...
                    </a>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="aboutme" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <br /><br />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Welcome to my site. This is where I put my portfolios, skills and projects that I have done for the past umteen years. I have one question though, if the bus driver is the last one to leave the bus, how does the bus gets closed? Feel free to hack around!</p>
                </div>
                <div class="col-lg-4">
                    <p>If you're still reading up to this point, I presume you've got too much <i>time</i> on your hands. I dunno what should I still put at this section. Maybe some nice passage. Everybody likes passages. Here it is, read on... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="mailto:ricasiano@gmail.com" class="btn btn-lg btn-outline">
                        <i class="fa fa-envelope-o"></i> Email Me
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Server Info</h3>
                        <p>OS: CentOS 6.4<br />
Web Server: Nginx<br />
PHP Version: <?php echo phpversion();?><br />
</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="http://facebook.com/rockerprog" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="http://instagram.com/rai_icasiano" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="http://twitter.com/razorgank" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="http://github.com/ricasiano" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/profile/view?id=390292809&trk=hp-identity-photo" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact Info</h3>
                        <p>
Server Owner: Rai Icasiano<br />
Contact: <a href="#">ricasiano</a> at <a href="#">gmail</a> dot <a href="#">com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyleft &copy; Come One, Come All, Into 1984
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioWebdev" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Web Dev</h2>
                            <hr class="star-primary">
                            <img src="img/services-webdev.jpg" class="img-responsive img-centered" alt="">
                            <p>Web development for standard and custom web applications and sites. Also has experience in RESTful API Development.</p>
                            <ul class="list-inline item-details">
                                <li>Skills:
                                    <strong><a href="#">PHP, MySQL, Node.js, Codeigniter Framework</a>
                                    </strong>
                                </li>
                                <li>Since:
                                    <strong><a href="#">June 2005</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Custom Websites and APIs</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioWebsec" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Web Security</h2>
                            <hr class="star-primary">
                            <img src="img/services-websec.jpg" class="img-responsive img-centered" alt="">
                            <p>One of the most neglected aspects during web development, which could result in site defacement, identity theft and data theft that could have devastating results and severe impact on business.</p>
                            <ul class="list-inline item-details">
                                <li>Skills:
                                    <strong><a href="#">Web Penetration Testing</a>
                                    </strong>
                                </li>
                                <li>Since:
                                    <strong><a href="#">April 2012</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Audit on Injections, XSS, Port Checks, Server Hardening</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioVoip" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>VOIP</h2>
                            <hr class="star-primary">
                            <img src="img/services-voip.jpg" class="img-responsive img-centered" alt="">
                            <p>Do you want to build a center... where people can make calls?</p>
                            <ul class="list-inline item-details">
                                <li>Skills:
                                    <strong><a href="#">Asterisk PBX, OpenSIPS load balancer, AGI Scripting via Perl</a>
                                    </strong>
                                </li>
                                <li>Since:
                                    <strong><a href="#">June 2010</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Integrated with local Telcos for voice-related services</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hosting Info Modal -->
    <div class="portfolio-modal modal fade" id="hostingInfo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Web Dev</h2>
                            <hr class="star-primary">
                            <p>Web Hosting Information:</p>
                            <ul class="list-inline item-details">
                                <li>OS:
                                    <strong><a href="#">Centos 6.3 64 bit</a></strong><br />
                                </li>
                                <li>Web Server:
                                    <strong><a href="#">nginx 1.4.4</a></strong><br />
                                </li>
                                <li>PHP Version:
                                    <strong><a href="#">PHP <?php echo phpversion(); ?>(via php-fpm)</a></strong><br />
                                </li>
                                <li>Bandwidth:
                                    <strong><a href="#">10GB Monthly Bandwidth (330 requests / day on a 1MB uncached site)</a></strong><br />
                                </li>
                                <li>Storage:
                                    <strong><a href="#">100MB Web Space</a></strong><br />
                                </li>
                                <li>Database:
                                    <strong><a href="#">MySQL 5.5.34; 200MB Storage</a></strong><br />
                                </li>
                                <li>Uptime:
                                    <strong><a href="#">99%</a></strong><br />
                                </li>
                                <li>Access and Management:
                                    <strong><a href="#">SSH(passwordless) and FTP, because CPanel are for pussies</a></strong><br />
                                </li>
                                <li>Others:
                                    <strong><a href="#">GitHub support, rewrite rules(by request)</a></strong><br />
                                </li>
                            </ul>
                            <br />
                            <span class="warning">***Minimum 1 year hosting service. Does not include Domain Name(I suppose you already know that) Sites to be hosted are subject for approval and termination if deemed inappropriate. And no, you can't host a porn site.</span> <br /><br />
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="qrBitcoin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Scan with a QR Code Reader</h2>
                            <hr class="star-primary">
                            <img src="img/qr-bitcoin.png" class="img-responsive img-centered" alt="">
                            <p>1K4Ck4weQatdsAakKBuFTwaU5f621dSAT7</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
