<?php
$konfigurasi = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Selamat Datang | DATASOFT SOLUSI</title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/images/datasoft1.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Simple Line Font -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Selamat Datang | DATASOFT SOLUSI</title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/images/datasoft.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>0341-441635
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>info@dso-id.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Perum Banjararum Blk.L, No.12, Singosari, Malang.
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo base_url() ?>" title="<?php echo $konfigurasi->namaweb ?>">
     <img src="<?php echo base_url('assets/upload/image/'.$konfigurasi->logo) ?>" style="max-width:150px; height:auto;">
   </a>
                       <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>"><strong>BERANDA</strong></a>
                                </li>
                                <li class="nav-item">
                                    <ul class="nav nav-pills">
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('about');?>" role="button" aria-haspopup="true" aria-expanded="false"><strong>BERITA</strong></a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="<?php echo site_url('agenda');?>"><strong>INFORMASI</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('agenda');?>"><strong>INDEKS BERITA</strong></a>
                                        </div>
                                      </li>
                                </li>
                                <li class="nav-item">
                                    <ul class="nav nav-pills">
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('about');?>" role="button" aria-haspopup="true" aria-expanded="false"><strong>LAYANAN</strong></a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="<?php echo site_url('home/anggota');?>"><strong>SOFTWARE KEANGGOTAAN</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('home/simpanan');?>"><strong>SOFTWARE SIMPANAN</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('home/sijaka');?>"><strong>SOFTWARE SIJAKA</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('home/kredit');?>"><strong>SOFTWARE KREDIT</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('home/akuntansi');?>"><strong>SOFTWARE AKUNTASI</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('home/migration');?>"><strong>DATABASE MIGRATION</strong></a>
                                        </div>
                                      </li>
                                </li>
                                <li class="nav-item">
                                    <ul class="nav nav-pills">
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('about');?>" role="button" aria-haspopup="true" aria-expanded="false"><strong>PROFIL</strong></a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="<?php echo site_url('home/team');?>"><strong>TEAM DATASOFT SOLUSI</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('home/proposal');?>"><strong>PROPOSAL</strong></a>
                                        </div>
                                      </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>"><strong>UNDUHAN</strong></a>
                                </li>
                                <li class="nav-item">
                                    <ul class="nav nav-pills">
                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('about');?>" role="button" aria-haspopup="true" aria-expanded="false"><strong>GALLERY</strong></a>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="<?php echo site_url('galeri');?>"><strong>GALERI FOTO</strong></a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="<?php echo site_url('galeri');?>"><strong>GALERI VIDEO</strong></a>
                                        </div>
                                      </li>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>"><strong>CONTACT</strong></a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<br>
    <div class="text-center" style="font-size: 35px;">
        <img src="<?php echo base_url().'theme/images/migration.png'?>" class="img-fluid about-img" style="margin-left:  110px;" style="display: block; margin: auto;"  alt="#"><br><br>
        <strong>DATABASE MIGRATION</strong>
    </div>

<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>DATABASE MIGRATION (MIGRASI DATABASE)</h2><br><br>
                <h2>TUJUAN</h2>
               <p style="text-align:left;">
                Mempercepat proses implementasi software sistem,<br>
                Menghindari salah input karena di input secara manual,<br>
                Mempercepat proses inputing DATA awal.
               </p>
            </div>
        </div>
    </div>
</section>


<!--//END ABOUT -->

<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru;?></span> Karyawan
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_siswa;?></span> Siswa Magang
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files;?></span> Berita
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda;?></span> Unduhan</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END DETAILED CHART -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-4">
          <div class="row" style="margin-top: 0px;">
            <div class="col-md-6" style="margin-top: -20px;">
                     <a class="" style="color: white;"><strong style="font-size: 25px;">TEAM DATASOFT SOLUSI
                      </strong></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sitemap" style="font-size: 10px;">
                        <i class="fas fa-home fa-2x text-primary" style="margin-top: 40px; margin-left: -45px;"></i><a style="color: #8c8f91; font-size: 15px; margin-left: 22px;"><strong>Team DATASOFT SOLUSI</strong>
                          <br>PERUM BUMI BANJARUM ASRI BLOK L 12, Singosari, Malang<br>
                              Telepon: 0341-441635<br>
                              Whatsapp: +6281336050662
                              Email:datasoft.indonesia@gmail.com
                              </a>
                              <i class="fas fa-phone-volume fa-2x text-primary" style="margin-top: 40px; margin-left: -38px;"></i><strong style="color: #cfd2d4; font-size: 17px; margin-left: 22px;">0341441635
                              </strong><br>

                              <i class="far fa-envelope fa-2x text-primary" style="margin-top: 40px; margin-left: -40px;"></i><strong style="color: #cfd2d4; font-size: 17px; margin-left: 22px;">pusat@dso-id.com
                              </strong>
                            </div>
    
                    </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="row" style="margin-top: 0px;">
            <div class="col-md-4" style="margin-top: -20px;">
                     <a class="" style="color: white;"><strong style="font-size: 25px; margin-left: -170px;">LATEST NEWS
                      </strong></a>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="bg-faded"> 
                <img src="<?php echo base_url().'theme/images/anggota6.jpg'?>" class="img-fluid about-img" style="margin-left: -185px; height: 70px; margin-top: 5px;" alt="#">
                <a style="color: white; font-size: 15px;">Team DATASOFT SOLUSI</a>
              </div><br>
            </div><br>
            <div class="col-md-4">
                  <div class="bg-faded"> 
                <img src="<?php echo base_url().'theme/images/proposal.png'?>" class="img-fluid about-img" style="margin-left: -185px; height: 70px; margin-top: 5px;" alt="#">
                <a style="color: white; font-size: 15px;">Proposal</a>
              </div>
                
            </div>
               
          </div>
    
         </div>
        </div>
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>