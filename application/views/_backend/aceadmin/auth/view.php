<?php defined('BASEPATH') OR exit('Tidak ada akses skrip langsung yang diizinkan'); ?>

<!DOCTYPE html>
<html lang="id">

    <head>
        <!-- Tell the browser to be responsive to screen width -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
		<!-- Title -->
		<title><?=$title?> | <?=title()?></title>

        <!-- Favicon -->
  		<link rel="icon" href="<?=base_URL()?>_assets/favicon/<?=favicon()?>" sizes="32x32">

        <!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/bootstrap.min.css" />
  		<link rel="stylesheet" href="<?=base_URL()?>_assets/fonts/font-awesome/4.7.0/css/font-awesome.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?=base_URL()?>_assets/fonts/font-google/sans-google.css" />

        <!-- ace styles -->
		<link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace.min.css" />
        <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace-part2.min.css">
        <![endif]-->

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?=base_URL()?>_backend/aceadmin/css/ace-ie.min.css">
        <![endif]-->

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
            <script src="<?=base_URL()?>_backend/aceadmin/js/html5shiv.min.js"></script>
            <script src="<?=base_URL()?>_backend/aceadmin/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">

							<div class="space-24"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
											<a href="<?=base_URL()?>"><img src="<?=base_URL()?>_assets/logo/<?=logo()?>" class="img-responsive"></a><br>
												<i class="ace-icon fa fa-coffee green"></i> 
												Sign In untuk memulai sesimu
											</h4>

											<div class="space-6"></div>

											<!-- notifikasi -->
											<?php
												if ($this->session->flashdata('simpan')) {
													echo '<div class="alert alert-block alert-success">
														     <strong><i class="ace-icon fa fa-check"></i>&nbsp; BERHASIL</strong><br> '.$this->session->flashdata('simpan').'
														  </div>';

												} else if ($this->session->flashdata('gagal')) {
													echo '<div class="alert alert-block alert-danger">
														     <strong><i class="ace-icon fa fa-ban"></i>&nbsp; GAGAL</strong><br> '.$this->session->flashdata('gagal').'
														  </div>';

												} else if ($this->session->flashdata('salah')) {
													echo '<div class="alert alert-block alert-warning">
														     <strong><i class="ace-icon fa fa-warning"></i>&nbsp; KESALAHAN</strong><br> '.$this->session->flashdata('salah').'
														  </div>';
												}
											?>

											<form action="<?=site_URL()?>auth/signin" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Ingat Aku ?</span>
														</label>

														<button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<span class="bigger-110">Sign In </span> 
															<i class="ace-icon fa fa-sign-in"></i>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
                                        </div>
                                        <!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
                                                <a href="javascript:void(0)" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-key"></i> Lupa Password ?
												</a>
											</div>

											<div>
												<a href="javascript:void(0)" data-target="#signup-box" class="user-signup-link">
													Informasi SIP <i class="ace-icon fa fa-info-circle"></i>
												</a>&nbsp;
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
											<a href="<?=base_URL()?>"><img src="<?=base_URL()?>_assets/logo/<?=logo()?>" class="img-responsive"></a><br>
												<i class="ace-icon fa fa-key"></i>
												memulihkan password
											</h4>

											<div class="space-6"></div>
											<p>
												masukkan email yang terkait dengan akunmu !
											</p>

											<form action="<?=site_URL()?>auth/forgot" method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<span class="bigger-110">Kirim</span> 
															<i class="ace-icon fa fa-lightbulb-o"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="javascript:void(0)" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-chevron-left"></i> 
												Kembali ke Sign In
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
											<a href="<?=base_URL()?>"><img src="<?=base_URL()?>_assets/logo/<?=logo()?>" class="img-responsive"></a><br>
												<i class="ace-icon fa fa-info-circle blue"></i>
												Detail Informasi SIP
											</h4>

											<div class="space-6"></div>
											<p>Pastikan kamu memperhatikan hal-hal ini sebagai berikut :</p>
											<ul align="justify">
												<li>Pastikan <i>keluar(logout)</i> saat meninggalkan <b>Sistem</b>, dan ubahlah <b>Password</b> kamu secara berkala.</li>
												<li>Kamu tidak diperbolehkan menggunakan <b>Sistem</b> dalam kondisi atau cara apapun yang dapat <i>merusak, melumpuhkan, membebani atau mengganggu</i> <b>Server</b> maupun <b>Jaringan</b>.</li>
												<li>Kamu tidak diperbolehkan untuk <i>mengakses layanan, akun user, sistem komputer atau jaringan secara tidak sah</i> dengan cara <i>hacking, password minning, atau cara lainnya</i>.</li>
												<li>Apabila ada masalah, silakan hubungi Biro Administrasi Umum STMIK Pranata Indonesia atau email langsung ke <i><a href="mailto:humas@pranataindonesia.ac.id">humas@pranataindonesia.ac.id</a></i> dengan menyertakan identitas <b>NIM</b> dan <b>Nama Mahasiswa/i</b> yang bersangkutan, serta gunakanlah Bahasa Indonesia yang baik, benar, dan sopan.</li>
											</ul>
										</div>

										<div class="toolbar center">
											<a href="javascript:void(0)" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-chevron-left"></i> 
												Kembali ke Sign In
											</a>
                                        </div>

									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
                            </div><!-- /.position-relative -->

                            <div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="javascript:void(0)">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="javascript:void(0)">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="javascript:void(0)">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>

                            <br>

                            <hr style="margin-top: 0.5em; margin-bottom: 0.5em; border-color: grey">
							<!-- footer -->
							<div class="text-center" style="color: gray">
							  Hak Cipta &copy; 2018&nbsp;
							  <a href="<?=base_URL()?>">
							  	<strong style="color: cornflowerblue"><?=title()?></strong>
							  </a>
							</div>
							<!-- /.footer -->
							<hr style="margin-top: 0.5em; margin-bottom: 0.5em; border-color: grey">
                            
                            <div class="space-24"></div>

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?=base_URL()?>_backend/aceadmin/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
            <script src="<?=base_URL()?>_backend/aceadmin/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?=base_URL()?>_backend/aceadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>

		<!-- ace scripts -->
		<script src="<?=base_URL()?>_backend/aceadmin/js/ace-elements.min.js"></script>
		<script src="<?=base_URL()?>_backend/aceadmin/js/ace.min.js"></script>
	</body>
</html>
