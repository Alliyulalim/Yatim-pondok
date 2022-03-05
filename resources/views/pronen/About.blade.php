<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sejarah Pondok</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/themify-icons.css">
    <link rel="stylesheet" href="asset/css/nice-select.css">
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/gijgo.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/slicknav.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> (022) 5401-334</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>mail@pantiyatim.or.id</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo_yatim.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                                        <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                        <li><a href="#">Informasi <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('kegiatan') }}">Kegiatan</a></li>
                                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="{{ route('donasi') }}">AYO Donasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <br>
                        <br>
                        <h3>Sejarah</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!-- slider_area_start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="slider_text "><br>
                    <span><h3>Yayasan Panti Yatim Indonesia</h3>
                    <p>Laznas PYI Adalah Lembaga Amil Zakat Nasional (LAZNAS) berdasarkan SK Kemenag RI No.120 Tahun 2019. Bertekad menjadi lembaga pengelola dana ZISWAF yang berkhidmat menangani anak yatim/piatu dan terlantar serta memberdayakan kaum dhuafa. Berkantor pusat di kota Bandung dan cabang di Jakarta dan Bekasi. Kami saat ini mengayomi langsung lebih dari 300 anak yatim dhuafa dalam 29 asrama, 4000 anak luar asrama, dan kami masih terus berkembang.</p><br>
                </div>
                <div class="row gy-2 gx-4 mb-4">
                <div class="col-sm-6">
                    <p class="mb-0"><img src="{{ asset('asset/img/previous.png') }}" alt="" height="30" width="30">VISI</p>
                    <p>Terwujudnya Lembaga Amil Zakat Nasional yang unggul, amanah dan berperan aktif dalam pembangunan
                        sumberdaya manusia berdasarkan pemberdayaan</p>
                </div>
                <div class="col-sm-6">
                    <p class="mb-0"><img src="{{ asset('asset/img/previous.png') }}" alt="" height="30" width="30">MISI</p>
                    <p>Mengorganisasi sumber daya dan melakukan pemberdayaan potensi umat untuk kesejahtraan kemanusiaan, pendidikan, kesehatan dan dakwah
                        Mengoptimalisasi pengelolaan dana ziswaf (zakat, infaq, sedekah, wakaf) dan kemanusiaan sesuai syari’at islam dan undang-undang yang berlaku
                        Bersinergi membangun program pemberdayaan dan pendayagunaan dengan menguatkan jaringan filantropi Nasional dan Internasional</p>
                </div>

            </div>
                <div class="slider_text "><br>
                    <span><h3>Sejarah</h3>
                    <p>Berawal dari kesepakatan beberapa pedagang di lingkungan Pasar Induk Caringin Bandung Jawa Barat Indonesia , pada tahun 1998 tepatnya di Gang Porib III, RT 003/002 Kelurahan Babakan Ciparay, Kecamatan Babakan Ciparay Kota  Bandung, bermodal rumah kontrakan untuk menampung 4 anak yatim untuk disekolahkan, yang  sebelumnya tidur dan mencari makan di sekitar pasar tersebut.</p><br>
                    <p>Seiring dengan semakin bertambahnya anak yang di tampung, maka di buatlah lembaga formal pada tanggal 18 April 1998 yang diberi nama Nurul Ummah yang berarti Cahaya Umat, disepakati menjadi sebuah  Panti Asuhan di bawah naungan organisasi masyarakat Yayasan Al-fajr. Dibina langsung Dinas Sosial Kota Bandung dan bergabung dalam Forum  Komunikasi Lembaga Kesejahteraan Sosial Anak  (LKSA)  Kota  Bandung.</P><br>
                    <img src="{{ asset('asset/img/sj1.png') }}" alt="" height="400" width="700"><br>
                    <p>Tahun  2009 ,  PSAA Nurul Ummah berganti nama menjadi Panti Yatim  Indonesia  (PYI)  dan  mengadakan perubahan manajemen, sistem pelayanan kepada anak asuh dan kepada donatur serta pembukaan beberapa cabang asrama di wilayah kota Bandung, dengan mengusung slogan Menyayangi Sepenuh Hati, kepercayaan donatur kepada kami semakin meningkat.</p><br>
                    <img src="{{ asset('asset/img/logo_yatim.png') }}" alt="" height="300" width="500"><br>
                </div>
                <div class="slider_text "><br>
                    <span><h3>Budaya</h3>
                    <p>Ibadah. Segala aktivitas yang diselenggarakan dalam Laznas PYI dijiwai oleh semangat untuk beribadah kepada Allah swt. dan mengharap keridlaan-Nya.</p><br>
                    <p>Profesional. Aktivitas Laznas PYI dirancang dengan cermat, diselenggarakan secara detail, selesai dilaksanakan dengan tuntas dan berhasil tercapai tujuannya dengan baik.</p><br>
                    <p>Kualitas. Aktivitas Laznas PYI diselenggarakan untuk mencapai hasil dengan kualitas (mutu) yang sebaik-baiknya sesuai dengan standard jaminan mutu yang telah dinyatakan.</p><br>
                    <p>Prestasi. Seluruh komponen yang terlibat dalam aktivitas Laznas PYI diharapkan mampu berprestasi setinggi mungkin di bidangya masing-masing.</p><br>
                    <p>Perbaikan. Seluruh komponen yang terlibat dalam aktivitas Laznas PYI berusaha untuk melakukan perbaikan secara individual maupun tim demi suksesnya program-program organisasi.</p><br>
                    <p>Amanah. Seluruh komponen yang terlibat dalam aktivitas Laznas PYI berusaha menjaga segala bentuk amanah yang disampikan sehingga dapat dipertanggungjawabkan di dunia dan akhirat.</p><br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->


    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Fundraise</a></li>
                                <li><a href="#">Volunteer</a></li>
                                <li><a href="#">Partner</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+2(305) 587-3407 <br>
                                    info@loveuscharity.com <br>
                                    Flat 20, Reynolds Neck, North
                                    Helenaville, FV77 8WS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                           <center> <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Muhamad alliyul alim</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></center>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="asset/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="asset/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/isotope.pkgd.min.js"></script>
    <script src="asset/js/ajax-form.js"></script>
    <script src="asset/js/waypoints.min.js"></script>
    <script src="asset/js/jquery.counterup.min.js"></script>
    <script src="asset/js/imagesloaded.pkgd.min.js"></script>
    <script src="asset/js/scrollIt.js"></script>
    <script src="asset/js/jquery.scrollUp.min.js"></script>
    <script src="asset/js/wow.min.js"></script>
    <script src="asset/js/nice-select.min.js"></script>
    <script src="asset/js/jquery.slicknav.min.js"></script>
    <script src="asset/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/js/plugins.js"></script>
    <script src="asset/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="asset/js/contact.js"></script>
    <script src="asset/js/jquery.ajaxchimp.min.js"></script>
    <script src="asset/js/jquery.form.js"></script>
    <script src="asset/js/jquery.validate.min.js"></script>
    <script src="asset/js/mail-script.js"></script>

    <script src="asset/js/main.js"></script>
</body>

</html>
