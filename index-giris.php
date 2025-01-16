<?php

include("baglanti.php");

if(isset($_POST["Send"]))
{
    $name = $_POST['YourName'];
    $number = $_POST['numara'];
    $mail = $_POST['Email'];
    $date = $_POST['Date'];
    $Message = $_POST['Message'];

    if (!empty($name) && !empty($number) && !empty($mail) && !empty($date) && !empty($Message))
    {
        $ekle = "INSERT INTO randevular (adsoyad, no, mail, tarih, mesaj) VALUES ('$name', '$number', '$mail', '$date', '$Message')";
        $sorgu = mysqli_query($connection, $ekle);

        if ($sorgu) {
            echo '<div class="alert alert-success" role="alert">Randevu başarılı bir şekilde eklendi.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Kayıt oluşturulamadı.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">istenilen alanlar boş bırakılmamalıdır.</div>';
    }
}

mysqli_close($connection);
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
    <title>Sarfi Makas</title>
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
            <!-- header -->
            <header>
                <div class="header_section">
                    <div class="container-fluid">
                       <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <div class="logo"><a href="index-giris.php"><img src="images/logo.png"></a></div>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                             <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                   <a class="nav-link" href="index-giris.php">Anasayfa</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="service-giris.html">Hizmetlerimiz</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="barbers-giris.html">Berberlerimiz</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="about-giris.html">Hakkımızda</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="contact-giris.html">Bize Ulaşın</a>
                                </li>
                             </ul>
                             <div class="login">
                                <a class="nav-link" href="giris.php">GİRİŞ YAP</a>
                                
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
            <!-- start slider section -->
            <div class="slider_section banner_bg">
                <img src="images/banner.png">
                <div class="container">
                    <div class="text_box">
                        <span></span>
                        <h1><br> 
                </h1>
                        <a href="contact.html">İletişime Geçin</a>
                    </div>
                </div>
            </div>

            <!-- end slider section -->

            <!-- about -->
            <div id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="about_box">
                                <span>Sarfi Makasa Hoşgeldiniz</span>
                                <h2>Salonumuz<strong class="white"> Hakkında</strong></h2>
                                <p>Bir okuyucunun bir sayfanın düzenine baktığında, okunabilir içeriğinden dolayı dikkatinin dağıldığı uzun süredir bilinen bir gerçektir. Lorem Ipsum'un kullanılma nedeni, okunabilir İngilizce gibi görünmesini sağlayan 'Burada içerik, burada içerik' kullanımı yerine, harflerin daha fazla veya daha az normal bir dağılıma sahip olmasıdır. Birçok masaüstü yayıncılık paketi ve web sayfası düzenleyicisi, artık Lorem Ipsum'u varsayılan model metin olarak kullanır ve 'lorem ipsum' araması hala birçok web sitesini ortaya çıkaracaktır.</p>
                                <a href="#">Daha Fazla</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="about_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->
            <!-- service -->
            <div id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2><strong class="white_ll"> Hizmetlerimiz</strong></h2>
                                <span> Saç kesimi, traş, sakal düzenleme, saç boyama, saç stilistleri ve Daha Fazlası</span>
                            </div>
                        </div>
                    </div>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser1.png"></figure>
                                                    <h3>Temiz Kesim</h3>
                                                    <p>"Temiz kesim, hatasız ve düzgün bir görünüm sağlayan profesyonel bir saç kesim yöntemidir."</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser.png"></figure>
                                                    <h3> Saç Stilleri</h3>
                                                    <p>"Saç stilleri, kişinin tarzını yansıtan özgün ve çeşitli görünümler sunan estetik çalışmalardır."</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                                <div class="service_box">
                                                    <figure><img src="images/ser3.png"></figure>
                                                    <h3>Yüz Maskesi</h3>
                                                    <p>"Yüz maskeleri, cildi temizleyen, besleyen ve tazeleyen koruyucu ve bakım sağlayan ürünlerdir."</p>
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
            <!-- pricing -->
            <div class="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Fiyat<strong class="white"> Listesi</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mar_bottom">
                            <div class="pricing_img">
                                <figure><img src="images/fiyat.png" alt="#" />
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pad_left">
                            <div class="pricing_box">
                                <div class="list">
                                    <ul>
                                        <li><span class="float-left">Saç Kesimi</span><span class="float-right">80 TL</span></li>
                                        <li><span class="float-left">Sakal Kesimi</span><span class="float-right">40 TL</span></li>
                                        <li><span class="float-left">Saç Yıkama</span><span class="float-right">30 TL</span></li>
                                        <li><span class="float-left">Damat Tıraşı</span><span class="float-right">200 TL</span></li>
                                    </ul>
                                    <ul>
                                        <li><span class="float-left">Saç Boyama </span><span class="float-right">110 TL</span></li>
                                        <li><span class="float-left">Perma</span><span class="float-right">125 TL</span></li>
                                        <li><span class="float-left">Saç Bakımı</span><span class="float-right">45 TL</span></li>
                                        <li><span class="float-left">Masaj </span><span class="float-right">50 TL</span></li>
                                    </ul>
                                    <a href="#">Daha Fazlası</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="opening">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ourheading">
                                        <h2>Çalışma <strong class="white"> Saatlerimiz</strong></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="opening_bg">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="times">
                                            <ul>
                                                <li><span>Pazartesi</span><span class="float-right">09.00<strong class="bbbb">- 21.00</strong></span></li>
                                                <li><span>Salı</span><span class="float-right">09.00<strong class="bbbb">- 21.00</strong></span></li>
                                                <li><span>Çarşamba</span><span class="float-right">09.00<strong class="bbbb">- 21.00</strong></span></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="times">
                                            <ul>
                                                <li><span>Perşembe</span><span class="float-right">09.00<strong class="bbbb">- 21.00</strong></span></li>
                                                <li><span>Cuma</span><span class="float-right">09.00<strong class="bbbb">- 21.00</strong></span></li>
                                                <li><span>Cumartesi</span><span class="float-right">09.00<strong class="bbbb">- 21.00</strong></span></li>
                                                <li><span>Pazar</span><span class="float-right">Kapalı</span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end Pricing -->

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
                    </div>

                </section>
                <!-- end our barbers -->
                <!-- contact -->
                <div id="contact" class="contact">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-12">
                                <div class="title">
                                    <h2>Geri<strong class="white"> Dönüşleriniz</strong></h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <form action="index-giris.php" method="POST"class="main_form">
                                    <div class="row">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form2-control" placeholder="İsim-Soyisim" type="text" name="YourName">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form2-control" placeholder="Telefon No." type="text" name="numara">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form2-control" placeholder="E-Mail" type="email" name=" Email">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form2-control" placeholder="Tarih" type="date" name=" Date">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="textarea" placeholder="Mesajınız" type="text" name="Message"></textarea>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button class="send" name="Send">Gönder</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.6403137596053!2d28.785919476451095!3d41.033124517893924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa438a39f52db%3A0xa4eb20ddc406fa96!2s%C4%B0stanbul%20Sabahattin%20Zaim%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1684327213476!5m2!1str!2str" width="600" height="400" style="border: 2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact -->

                <!-- footer -->
                <fooetr>
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer_logo">
                                        <a href="index-giris.php"><img src="images/logo.png" alt="logo" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="address">
                                        <h3>Adres</h3>
                                        <p>
                                            Sabahattin Zaim Üniversitesi, Halkalı, Küçükçekmece/İstanbul
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
                                <p>© 2019 All Rights Reserved. <a href="index-giris.php"> Web Tabanlı Programlama Projesi</a></p>
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