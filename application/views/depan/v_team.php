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
    <img src="<?php echo base_url().'theme/images/coding99.jpeg'?>" class="img-fluid"  style="margin-left:  240px;"  alt="#">
    <div class="container" style="text-align: center;">
    <br>
    <br>
    <br>
    <br>
   
         <h2>Team Datasoft Solusi</h2>
         <br>
         <p>Team Datasoft SOLUSI saat ini terdiri dari beberapa orang yang jika digabungkan team memiliki<br>
          kemampuan antara lain:</p>
          <br>        
                   <div style="text-align: center;">
                   <strong style="color: blue;">TEKNISI KOMPUTER</strong><br>
                   <strong style="color: blue;">TEKNISI JARINGAN</strong><br>
                   <strong style="color: blue;">DEKSTOP PROGAMING</strong><br>
                   <strong style="color: blue;">WEB PROGAMING</strong><br>
                   <strong style="color: blue;">AKUNTASI:JASA,DAGANG,INDUSTRI & KOPERASI</strong><br>
                   <strong style="color: blue;">MIGRASI ANTAR DATABASE</strong><br>
                   <strong style="color: blue;">ROBOTIK/MEKATRONIKA</strong><br>
                   <strong style="color: blue;">KONSULTAN MANAJEMEN</strong>
</div>
<br>
<div class="container" style="text-align: center;" style="opacity: 10">
    <br>
    <br>
    <h6><strong>SOFTWARE DATASOFT SOLUSI</strong></h6>
        <br>
         <p style="text-align: left;">Program software datasoft solusi sebuah software system yang disusun dan dikembangkan sejak tahun 1992 oleh sholeh basuki,SE yang berkedudukan di perum bumi banjarum asri L-12 malang dan telah dilakukan inovasi secara terus menerus seiring dengan pesat nya perkembangan teknologi informasi pada saat ini.</p>
         <br>
         <p  style="text-align: left;">penggunaan program itu sendiri itu sangat fleksibel, hal ini telah dibuktikan dengan dipakainya dibeberapa perusahaan dikota malang dan sekitarnya dengan jenis kegiatan usaha yang beraneka ragam seperti ; perdagangan umum, jasa umum atau gabungan keduanya dengan jaminan program akan berjalan sesuai dengan menu yang ada.</p>
         <br>
         <p  style="text-align: left;">sesuai tujuannya, program DATASOFT SOLUSI mampu memproses data keuangan menjadi laporan keuangan dengan waktu relatf singkat meskipun sumber data di-akses dari beberapa tempat (cabang-cabang) yang letaknya berjauhan. hal ini sangat dimungkinkan, karena transfer data melalui media internet sebagai sarananya.</p>
</div>
<br>
<div class="container" style="text-align: center;" style="opacity: 10">
    <br>
    <br>
    <h6><strong>HASIL YANG DIHARAPKAN</strong></h6>
        <br>
        <p  style="text-align: left;">dengan diterapkannya program datasoft SOLUSI pada proses pengolahan data keuangan,maka hasil yang diharapkan dari kegiatan ini adalah terciptanya suatu sistem jaringan informasi manajemen berbasis komputer yang mampu menghasilka output atau laporan secara cepat dan tepat, sesuai prinsip-primsip atau kaidah-kaidah akuntansi secara umum.</p>
</div>
<div class="container" style="text-align: center;" style="opacity: 10">
    <br>
    <br>
    <h6><strong>KOMPONEN PENDUKUNG</strong></h6>
        <br>
        <div style="text-align: left;">
        <p>keberhasilan suatu sistem sangat bergantung dari dukungan semua pihak terkait, dijajaran suatu perusahaan karena sama sama disadari, bahwa secanggih apapun program komputer ataupun hardware yg digunakan manakala tidak didukung oleh komponen lain, maka tidak bisa berharap banyak manfaat yang diperoleh perusahaan.</p>
        </div>
        <br>
        <p style="text-align: left;">demikian pula penerapan program software DATASOFT SOLUSI akan berjalan lancar dan berhasil guna bila didukung secara konsisten 7 komponen penting yaitu:</p>
</div>
<div class="container" style="text-align: left;" style="opacity: 10">
    <br>
    <br>
    <h6><strong>DECESION MAKER (DM)</strong></h6>
        <p> digunakan atau tidak program software datasoft solusi sangat bergantung komitmen serta keputusan perusahaan.</p>
</div>
<div class="container" style="text-align: left;" style="opacity: 10">
    <br>
    <h6><strong>SUMBER DAYA MANUSIA (SDM)</strong></h6>
        <p>untuk mengoperasikan diperlukan dukungan SDM yang memiliki kemauan dan kemampuan.</p>
</div>
<div class="container" style="text-align: left;" style="opacity: 10">
    <br>
    <h6><strong>HARDWARE & LOKAL AREA NETWORK (LAN)</strong></h6>
        <p>tersedianya perangkat komputer dan sistem jaringan(LAN) yang memadai sebagai media operasional.</p>
</div>
<div class="container" style="text-align: left;" style="opacity: 10">
    <br>
    <h6><strong>SOFTWARE SYSTEM KOMPUTER (SSK)</strong></h6>
        <p>salah satu komponen pendukung yang menghasilkan laporan manajemen.</p>
</div>
<div class="container" style="text-align: left;" style="opacity: 10">
    <br>
    <h6><strong>STANDARD OPERASIONAL PRODUCTION (SOP)</strong></h6>
        <p>adanya petunjuk operasional yang mengatur prosedur teknis pelaksanaanyang mengacu pada sistem software komputer.</p>
</div>
<div class="container" style="text-align: left;" style="opacity: 10">
    <br>
    <h6><strong>SYSTEM KONTROL (SK)</strong></h6>
        <p>catatan-catatan yang berupa kontrol dan evaluasi terhadap jalanya 6 komponen yang sebagai bahan pengembangan sistem & penyesuaian lebih lanjut.</p>
</div>
<div class="container" style="text-align: left;" style="opacity: 10">
    <br>
    <h6><strong>MAINTENCE (PERAWATAN)</strong></h6>
        <p>agar progran datasoft SOLUSI dapat berfungsi secara optimal maka diperlukan perawatan secara periodik agar segera terdeteksi bila salah satu rangkaian sistem tidak berfungsi untuk selanjutnya dilakukan perbaikan dan penyesuaian sebagaimana mestinya</p>
</div>
<br>
<br>
<br>
   
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
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
                        <i class="fas fa-home fa-2x text-primary" style="margin-top: 40px; margin-left: -10px;"></i><a style="color: #8c8f91; font-size: 15px; margin-left: 22spx;"><strong>Team DATASOFT SOLUSI</strong>
                          <br>PERUM BUMI BANJARUM ASRI BLOK L 12, Singosari, Malang<br>
                              Telepon: 0341-441635<br>
                              Whatsapp: +6281336050662
                              Email:datasoft.indonesia@gmail.com
                              </a>
                              <i class="fas fa-phone-volume fa-2x text-primary" style="margin-top: 40px; margin-left: -85px;"></i><strong style="color: #cfd2d4; font-size: 17px; margin-left: 22px;">0341441635
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
                <img src="<?php echo base_url().'theme/images/proposal.png'?>" class="img-fluid about-img" style="margin-left: -300px; height: 70px; margin-top: 5px;" alt="#">
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