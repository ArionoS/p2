<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>Nge Gym | Tanya Trainner dan Tips Hidup Sehat</title>

    <link rel="icon" type="image/png" sizes="32x32" href="landing/images/new/logo2.png" />
    <!-- Bootstrap core CSS-->
    <link href="vidtutor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vidtutor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="vidtutor/css/osahan.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="vidtutor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="vidtutor/owl-carousel/owl.theme.css">

    <link rel="stylesheet" href="{!! asset('home/style.css') !!}">
</head>

<body id="page-top">
<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
        &nbsp;&nbsp;

        <a class="navbar-brand mr-1" href="index.html">
            <div class="logo">
                <img src="landing/images/new/logoland.png" style="height: 50px;width: 100px;margin-left: 30px">
            </div>
        </a>
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <div class="input-group-append">
                    <button class="btn btn-light" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            <!--<li class="nav-item mx-1">
            <a class="nav-link" href="upload.html">
               <i class="fas fa-plus-circle fa-fw"></i>
               Upload Video
            </a>
         </li> -->
            <li class="nav-item mx-1">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-plus-circle fa-fw"></i>
                    Back To Main
                </a>
            </li>

            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
                <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    Rajendra
                </a>
                </div>
            </li>
        </ul>
    </nav>

    <div id="wrapper">
        
        <div id="content-wrapper">
            <div class="container-fluid pb-0" style="padding-right: 30px; padding-left: 30px;">
                <div class="video-block section-padding">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="single-video-left">
                                <div class="single-video">
                                    <video width="100%" height="315%" src="vidtutor/vid/html.mp4" frameborder="5" controls></video>
                                </div>
                                <div class="single-video-title box mb-3">
                                    <h2><a href="#">HTML </a><span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span></h2>

                                </div>
                                <div class="single-video-info-content box mb-3">
                                    <h6>Diterbitkan</h6>
                                    <p>2021</p>
                                    <h6>Genre </h6>
                                    <p>Learn</p>
                                    <h6>Synopsis</h6>
                                    <p>Bagi Anda yang belum tahu, HTML adalah kepanjangan dari Hypertext Markup Language. Perlu diketahui bawah HTML bukan termasuk bahasa pemrograman, melainkan HTML adalah markup standart yang digunakan dalam menampilkan halaman website. Jadi dengan HTML tidak memiliki kemampuan untuk membuat website yang dinamis, perlu mengkombinasikan dengan bahasa pemrograman web lain.
                                        Menurut sejarahnya, HTML pertama kali diperkenalkan pada tahun 1990-an. Tim Berners-Lee pada tahun 1989 menciptakan HTML sederhana namun sangat efektif untuk pengkodean dokumen elektronik. Web browser pada zaman itu digunakan untuk membuka dokumen-dokumen dengan format HTML. Pada saat tahun 90-an inilah yang menjadi sejarah lahirnya HTML sehingga dinamakan HTML versi 1.0.</p>
                                    <h6>Kualitas</h6>
                                    <p>Blueray</p>
                                    <h6>Diterbitkan</h6>
                                    <p>CODING LEARN APPLICATION </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-video-right">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="main-title">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp; Close</a>
                                                </div>
                                            </div>
                                            <h6>Movie Selection</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{url('fl.Film2')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="video-page.html"><img class="../img-fluid" src="vidtutor/images/b.png" alt=""></a>
                                                <div class="time">00:00</div>
                                            </div>
                                            <div class="video-title">
                                                <a href="{{url('fl.Film2')}}">JAVA</a>
                                            </div>

                                            <div class="video-page text-danger">
                                                Trailer Available <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Cooming Soon"><i class="fas fa-frown text-danger"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
                                            </div>
                                        </div>

                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{url('fl.Film3')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="#"><img class="../img-fluid" src="vidtutor/images/c.png" alt=""></a>
                                                <div class="time">60:00</div>
                                            </div>

                                            <div class="video-title">
                                                <a href="{{url('fl.Film3')}}">CSS</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
                                            </div>
                                        </div>

                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{url('fl.Film4')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="#"><img class="../img-fluid" src="vidtutor/images/d.png" alt=""></a>
                                                <div class="time">60:00</div>
                                            </div>

                                            <div class="video-title">
                                                <a href="{{url('fl.Film4')}}">SQL</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
                                            </div>
                                        </div>

                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{url('fl.Film5')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="#"><img class="../img-fluid" src="vidtutor/images/e.png" alt=""></a>
                                                <div class="time">60:00</div>
                                            </div>

                                            <div class="video-title">
                                                <a href="{{url('fl.Film5')}}">JS</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Bluray Available <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
                                            </div>
                                        </div>
                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{url('fl.Film6')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="#"><img class="../img-fluid" src="vidtutor/images/f.png" alt=""></a>
                                                <div class="time">60:00</div>
                                            </div>

                                            <div class="video-title">
                                                <a href="{{url('fl.Film6')}}">PHP</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Web-Rip Available <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
                                            </div>
                                        </div>
                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{url('fl.Film7')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="#"><img class="../img-fluid" src="vidtutor/images/g.png" alt=""></a>
                                                <div class="time">60:00</div>
                                            </div>

                                            <div class="video-title">
                                                <a href="{{url('fl.Film7')}}">PHYTON</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Blueray Available <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2019
                                            </div>
                                        </div>

                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{{url('fl.Film8')}}"><i class="fas fa-play-circle"></i></a>
                                                <a href="#"><img class="../img-fluid" src="vidtutor/images/h.png" alt=""></a>
                                                <div class="time">60:00</div>
                                            </div>

                                            <div class="video-title">
                                                <a href="{{url('fl.Film8')}}">C++</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Blueray Available <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 2020
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
    </div>

    <!-- /.container-fluid -->
    <!-- Sticky Footer -->
    <footer class="sc-htpNat cnzSqm">
        <div class="sc-chPdSV ckEKKQ">
            <div class="sc-htpNat hZywIq">
                <div class="sc-htpNat bGGnxF"><img alt="SehatQ" src="landing/images/new/logo2.png" width="150" height="150" class="sc-jzJRlG jJeLuK" /></div>
                <div class="sc-kGXeez iygvnT">
                    <div class="sc-kpOJdX gxxeLD">
                        <div class="sc-htpNat bSPBUS">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Langganan Newsletter</h4>
                            <div class="sc-htpNat iZWQZt">
                                <p class="sc-gZMcBi LMvqO">Jadi orang yang pertama tahu info &amp; promosi kesehatan terbaru
                                    dari
                                    SehatQ. Gratis.</p>
                                <div class="sc-kGXeez kJqNCf">
                                    <div class="sc-kpOJdX cxogSu"><label class="sc-jbKcbu hJrbEv"><input type="radio" name="news_gender" class="sc-jqCOkK iXJHQM" /><span class="sc-dNLxif gzOlIM"><i></i>Perempuan</span></label>
                                    </div>
                                    <div class="sc-kpOJdX kHHyUN"><label class="sc-jbKcbu hJrbEv"><input type="radio" name="news_gender" class="sc-jqCOkK iXJHQM" /><span class="sc-dNLxif gzOlIM"><i></i>Laki-laki</span></label>
                                    </div>
                                </div>
                                <div class="sc-hqyNC lgqMMo">
                                    <div class="sc-kGXeez jXfIFk">
                                        <div class="sc-kpOJdX rRICf">
                                            <div class="sc-iAyFgw PPzwV">
                                                <div class="sc-hSdWYo lpuOSs">
                                                    <div class="sc-jlyJG jpaAuv">
                                                        <input type="email" maxLength="150" placeholder="Email" value="" class="sc-jAaTju bXLluq" />
                                                    </div>
                                                    <div class="sc-jWBwVP eWjpev">
                                                        <button type="button" class="sc-bxivhb fUcnfF sc-ifAKCX ebnevm"><i class="sc-EHOje hNxZub"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-htpNat iZWQZt">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Metode Pembayaran</h4>
                            <div class="sc-kGXeez fvSaIv">
                                <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/bca.png?v=6" alt="Metode pembayaran BCA" width="60" height="20" class="sc-jzJRlG jJeLuK" /></div>
                                <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/mandiri.png?v=6" alt="Metode pembayaran Mandiri" width="65" height="18" class="sc-jzJRlG jJeLuK" /></div>
                                <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/bni.png?v=6" alt="Metode pembayaran BNI" width="58" height="17" class="sc-jzJRlG jJeLuK" /></div>
                                <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/payment/permata.png?v=6" alt="Metode pembayaran Permata" width="84" height="20" class="sc-jzJRlG jJeLuK" /></div>
                                <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/cc.png?v=6" alt="Metode pembayaran Kartu Kredit" width="180.36" height="29" class="sc-jzJRlG jJeLuK" />
                                </div>
                                <div class="sc-kpOJdX jdDXmT"><img src="https://static.sehatq.com/web/assets/img/gopay.png?v=6" alt="Metode pembayaran Gopay" width="73.84" height="16" class="sc-jzJRlG jJeLuK" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="sc-kpOJdX bonvib">
                        <div class="sc-htpNat iZWQZt">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Fitur</h4>
                            <div class="sc-htpNat iZWQZt">
                                <ul class="sc-gipzik kRcWov">

                                    <li class="sc-csuQGl clWQaq"><a href="/promo" class="sc-gZMcBi sc-kAzzGY wYtXl">Promo</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="/artikel" class="sc-gZMcBi sc-kAzzGY wYtXl">Artikel</a>
                                    </li>
                                    <li class="sc-csuQGl clWQaq"><a href="/telemed" class="sc-gZMcBi sc-kAzzGY wYtXl">Chat
                                            Dokter</a>
                                    </li>
                                    <li class="sc-csuQGl clWQaq"><a href="/penyakit" class="sc-gZMcBi sc-kAzzGY wYtXl">Penyakit</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="/forum" class="sc-gZMcBi sc-kAzzGY wYtXl">Forum</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="/review" class="sc-gZMcBi sc-kAzzGY wYtXl">Review</a>
                                    </li>
                                    <li class="sc-csuQGl clWQaq"><a href="/tes-kesehatan" class="sc-gZMcBi sc-kAzzGY wYtXl">Tes
                                            Kesehatan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sc-kpOJdX bonvib">
                        <div class="sc-htpNat bGGnxF">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Perusahaan</h4>
                            <div class="sc-htpNat iZWQZt">
                                <ul class="sc-gipzik kRcWov">
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Tentang Kami</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="/karir" class="sc-gZMcBi sc-kAzzGY wYtXl">Karir</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="/kontak" class="sc-gZMcBi sc-kAzzGY wYtXl">Kontak
                                            Kami</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sc-htpNat iZWQZt">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Follow us on</h4>
                            <div class="sc-htpNat iZWQZt">
                                <ul class="sc-gipzik kRcWov">
                                    <li class="sc-csuQGl clWQaq"><a href="#" target="_blank" rel="noopener noreferrer" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">
                                            <div class="sc-bdVaJa iwhGZe"><img src="https://static.sehatq.com/web/assets/img/socials/social_fb_grey.svg?v=6" alt="Facebook" height="14" width="14" class="sc-jzJRlG jJeLuK" /><span class="sc-gZMcBi hrxLF">Facebook</span></div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sc-kpOJdX cBXViV">
                        <div class="sc-htpNat bGGnxF">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Dukungan</h4>
                            <div class="sc-htpNat iZWQZt">
                                <ul class="sc-gipzik kRcWov">
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Syarat
                                            dan Ketentuan</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Privacy
                                            Policy</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Kebijakan
                                            Editorial</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl">Direktori
                                            Tag</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Pusat
                                            Bantuan</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sc-htpNat iZWQZt">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Daftar Menjadi Mitra</h4>
                            <div class="sc-htpNat iZWQZt">
                                <ul class="sc-gipzik kRcWov">
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl Anchor-NexLink">Merchant</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="/mitra-faskes" class="sc-gZMcBi sc-kAzzGY wYtXl">Mitra
                                            Faskes</a></li>
                                    <li class="sc-csuQGl clWQaq"><a href="#" class="sc-gZMcBi sc-kAzzGY wYtXl">Mitra
                                            Perusahaan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sc-kpOJdX cBXViV">
                        <div class="sc-htpNat iZWQZt">
                            <h4 class="sc-gZMcBi cCJIfu poppins">Available On</h4>
                            <div class="sc-htpNat iZWQZt"><a href="#" target="_blank" rel="noopener noreferrer" class="sc-gZMcBi sc-kAzzGY EXJwv"><img src="https://static.sehatq.com/web/assets/img/appstore.png?v=6" alt="App Store" width="150" height="50" class="sc-jzJRlG jJeLuK" /></a></div>
                            <div class="sc-htpNat cwbsJi"><a href="#" target="_blank" rel="noopener noreferrer" class="sc-gZMcBi sc-kAzzGY EXJwv"><img src="https://static.sehatq.com/web/assets/img/playstore.png?v=6" alt="Play Store" width="150" height="44.67" class="sc-jzJRlG jJeLuK" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../RegLog/sessionLogout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vidtutor/jquery/jquery.min.js"></script>
    <script src="vidtutor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vidtutor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Owl Carousel -->
    <script src="vidtutor/owl-carousel/owl.carousel.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="vidtutor/js/custom1.js"></script>
</body>

</html>