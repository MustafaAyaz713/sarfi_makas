
<?php
$loggedInUsername = 'Giriş Yap';

session_start();

// Kullanıcı adını kontrol etmek ve işlem yapmak için kullanabilirsiniz
if (isset($_SESSION['kullaniciadi'])) {
    $kullaniciAdi = $_SESSION['kullaniciadi'];
     $loggedInUsername = 'Hoş geldiniz, ' . $kullaniciAdi . '!';
} else {
    // Kullanıcı oturumu yoksa, giriş sayfasına yönlendirilebilir veya başka bir işlem yapılabilir.
    header("Location: giris.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sarfi Makas Hizmet</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->
        <div id="content">
            
            <!-- header -->
            <header>
                <div class="header_section">
                    <div class="container-fluid">
                       <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                             <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                   <a class="nav-link" href="index.php">Anasayfa</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="service.php">Hizmetlerimiz</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="barbers.php">Berberlerimiz</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="about.php">Hakkımızda</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="contact.php">Bize Ulaşın</a>
                                </li>
                             </ul>

                             <?php echo $loggedInUsername; ?>
                             <div class="login">
                                <a class="nav-link" href="index-giris.php">Çıkış Yap</a>
                                
                             </div>
                             
                             <div class="search_icon">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control " type="search" placeholder="Ara"  aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
                                  </form>
                                
                             </div>
                          </div>
                       </nav>
                    </div>
                 </div>
            </header>
            <!-- end header -->
            <!-- end header -->

            <div class="yellow_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Our service</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service -->
            <div id="service" class="service">
                <div class="container">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser1.png"></figure>
                                                    <h3>Clean Shave</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser.png"></figure>
                                                    <h3> Haircut Styles</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser3.png"></figure>
                                                    <h3>Face Masking</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser1.png"></figure>
                                                    <h3>Clean Shave</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser.png"></figure>
                                                    <h3> Haircut Styles</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser3.png"></figure>
                                                    <h3>Face Masking</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser1.png"></figure>
                                                    <h3>Clean Shave</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser.png"></figure>
                                                    <h3> Haircut Styles</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser3.png"></figure>
                                                    <h3>Face Masking</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- end service -->

            <!-- footer -->
            <fooetr>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer_logo">
                                    <a href="index.php"><img src="images/logo1.png" alt="logo" /></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="address">
                                    <h3>address</h3>
                                    <p>
                                        Address: 73 Canal Street, New York, NY
                                        <br> Tel: +1 123 456 789
                                        <br> Fax: +1 123 456 789
                                        <br> Email: support@demo.com</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="lik">

                                    <li> <img src="images/fb.png" alt="#" /></li>
                                    <li> <img src="images/tw.png" alt="#" /></li>
                                    <li> <img src="images/you.png" alt="#" /></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Free Html Templates</a></p>
                        </div>
                    </div>
                </div>

            </fooetr>
            <!-- end footer -->

        </div>

        <div class="overlay"></div>
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

        <script src="js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

        <style>
            #owl-demo .item {
                margin: 3px;
            }
            
            #owl-demo .item img {
                display: block;
                width: 100%;
                height: auto;
            }
        </style>

        <script>
            $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    margin: 10,
                    nav: true,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            })
        </script>

</body>

</html>