<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Lancana">
	<meta name="author" content="Lancana">
	<link rel="icon" href="assets/images/lancanabig.png">		
	<title>Lancana.id</title>

	<link rel="favicon" href="assets/images/favicon.png">	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href='/'><img src="assets/images/lancana.png" widht="180" height="30"alt="Atlanta HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href = 'about'>About</a></li>
                    
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href='artikel'>Daftar Bencana</a></li>
							<li><a href="#">Pencegahan</a></li>
							<li><a href="#">Histori Laporan</a></li>
						
						</ul>
					</li>

					<li><a href='daftar'>Daftar Akun</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	
	
	<!-- Header -->
	<header id="head">
	 <div class="container">
            <div class="banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Lapor Sigap</h2>
                        <p>Anda Kena Bencana ? Lancana Solusinya</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Sistem Informasi Pelaporan Bencana</h2>
                        <p>Solusi Informasi Bencana yang ada di Indonesia</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Bencana Alam</h2>
                        <p>Bencana Alam adalah peristiwa atau rangkaian peristiwa yang mengancam dan mengganggu kehidupan dan penghidupan masyarakat yang disebabkan, baik oleh faktor alam dan/atau faktor nonalam maupun faktor manusia sehingga mengakibatkan timbulnya korban jiwa manusia, kerusakan lingkungan, kerugian harta benda, dan dampak psikologis.</p>
                        <div class="da-img"></div>
                    </div>
                   
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
            </div>
        </div>	
	</header>



	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> 
		<h2 >Lancana</h2>
		<h3 class="text-muted">
			Layanan Aspirasi dan Pengaduan Online Rakyat
Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang
		</h3>
	</div>

	<hr>
	<!-- /Intro-->
		
	
	<!-- /Highlights -->

	<!-- container -->
	




		  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3 class="thin text-center">Lapor Sigap Bencana</h3>
					<p class="text-center text-muted">Laporan anda sangat berguna bagi masyarakat sekitar  </p>
					<hr>
					
					<form action = "{{ url('/insert_laporan') }}" method = "post">
						<div class="top-margin">
							<label for="ketikJudulLaporanAnda">Ketik Judul Laporan Anda <span class="text-danger">*</span></label>
							<input class="form-control" id="ketikJudulLaporanAnda" type="text" placeholder="Ketik Judul Laporan Anda" data-sb-validations="required" />
							<div class="invalid-feedback" data-sb-feedback="ketikJudulLaporanAnda:required"></div>
							
						</div>
						<div class="top-margin">
							<label for="ketikIsiLaporanAnda">Ketik Isi Laporan Anda <span class="text-danger">*</span></label>
							<textarea class="form-control" id="ketikIsiLaporanAnda" type="text" placeholder="Ketik Isi Laporan Anda" style="height: 10rem;" data-sb-validations="required"></textarea>
							
							<div class="invalid-feedback" data-sb-feedback="ketikIsiLaporanAnda:required"></div>
							
						</div>

						<div class="top-margin">
							<label for="ketikJenisBencana">Ketik Jenis Bencana <span class="text-danger">*</span></label>
							<input class="form-control" id="ketikJenisBencana" type="text" placeholder="Ketik Jenis Bencana" data-sb-validations="required" />
							<div class="invalid-feedback" data-sb-feedback="ketikJenisBencana:required"></div>
						</div>

						<div class="top-margin">
							<label for="ketikJenisBencana">Ketik Lokasi Kejadian <span class="text-danger">*</span></label>
							<input class="form-control" id="ketikLokasiKejadian" type="text" placeholder="Ketik Lokasi Kejadian" data-sb-validations="required" />
							<div class="invalid-feedback" data-sb-feedback="ketikLokasiKejadian:required"></div>
						</div>

						<div class="top-margin">
							<label for="tanggalKejadian">Tanggal Kejadian <span class="text-danger">*</span></label>
							<input class="form-control" id="tanggalKejadian" type="text" placeholder="Tanggal Kejadian" data-sb-validations="required" />
							
							<div class="invalid-feedback" data-sb-feedback="tanggalKejadian:required"></div>
					
						</div>
						
						<div class="top-margin">
							<label for="tanggalKejadian">Status Kejadian <span class="text-danger">*</span></label>
							<input class="form-control" id="StatusKejadian" type="text" placeholder="Status Kejadian" data-sb-validations="required" />
							
							<div class="invalid-feedback" data-sb-feedback="StatusKejadian:required"></div>
					
						</div>
						

						

						<hr>

						<div class="row">
							<div class="col-lg-8">
								<b><a href="">Upload Lampiran</a></b>
							</div>
							
							<div class="col-lg-4 text-right">
								<button class="btn btn-action" type="submit">Kirim</button>
							</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	

		<hr>





		  

</div>	<!-- /container -->
	<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2>Penilaian Penduduk</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="assets/images/person_1.png" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Sangat mempermudah ketika kita ingin memastikan suatu tempat</p>
                  <small>Yuk Sri</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="assets/images/person_2.png" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Bisa mengetahui lokasi bencana yang baru terjadi</p>
                  <small>Budi</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="assets/images/person_3.png" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Ketika kita pulang dari kantor dan hujan deras, kita bisa mengetahui lokasi banjir dimana saja.</p>
                  <small>Lek Kati</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 panel">
						<h3 class="panel-title">About Lancana</h3>
						<div class="panel-body">
							<p>ngoceh.</p> 
						</div>
					</div>

					<div class="col-md-4 panel contact"> 
						<h3 class="panel-title">Contact Info</h4>
						<div class="panel-body">
						
						<p>Hubungi kami .</p>
						<ul>
						  <li><i class="fa fa-phone"></i>0812-3418-9999</li>
						  <li><a href="#"><i class="fa fa-envelope-o"></i> lancana@gmail.com</a></li>
						  <li><i class="fa fa-flag"></i>Gubeng Jaya</li>
						</div>
					</div>

					<div class="col-md-3 panel">
						<h3 class="panel-title">Follow me</h3>
						<div class="panel-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
								<a href=""><i class="fa fa-youtube fa-2"></i></a>
								<a href=""><i class="fa fa-pinterest fa-2"></i></a>
							</p>	
						</div>
					</div>
			
				</div> <!-- /row of panels -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href='/'>Home</a> | 
								<a href='about'>About</a> |
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2021. 
							</p>
						</div>
					</div>

				</div> <!-- /row of panels -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>