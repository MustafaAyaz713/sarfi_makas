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
    <title>Sarfi Makas Berberlerimiz</title>
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
            <div class="yellow_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- our barbers -->
            <!-- section -->
            <section class="resip_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Berberler<strong class="white">imiz</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="owl-carousel owl-theme">

<div class="item">
    <div class="product_blog_img">
        <img src="images/melik.jpeg" alt="#" />
    </div>
    <div class="product_blog_cont">
        <h3>Melik Demirel</h3>
        <h4>Saç Stillisti</h4>
    </div>
</div>
<div class="item">
    <div class="product_blog_img">
        <img src="images/mustafa.jpeg" alt="#" />
    </div>
    <div class="product_blog_cont">
        <h3>Mustafa Ayaz</h3>
        <h4>Saç Stilist</h4>
    </div>
</div>
<div class="item">
    <div class="product_blog_img">
        <img src="images/melik.jpeg" alt="#" />
    </div>
    <div class="product_blog_cont">
        <h3>Melik Demirel</h3>
        <h4>Saç Stilist</h4>
    </div>
</div>
<div class="item">
    <div class="product_blog_img">
        <img src="images/mustafa.jpeg" alt="#" />
    </div>
    <div class="product_blog_cont">
        <h3>Mustafa Ayaz</h3>
        <h4>Saç Stilist</h4>
    </div>
</div>
<div class="item">
    <div class="product_blog_img">
        <img src="images/melik.jpeg" alt="#" />
    </div>
    <div class="product_blog_cont">
        <h3>Melik Demirel</h3>
        <h4>Saç Stilist</h4>
    </div>
</div>
<div class="item">
    <div class="product_blog_img">
        <img src="images/mustafa.jpeg" alt="#" />
    </div>
    <div class="product_blog_cont">
        <h3>Mustafa Ayaz</h3>
        <h4>Saç Stilist</h4>
    </div>
</div>

</div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- end our barbers -->

            <!-- footer -->
            <fooetr>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer_logo">
                                    <a href="index.php"><img src="images/logo.png" alt="logo" /></a>
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
                            <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Web Tabanlı Programlama Projesi</a></p>
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