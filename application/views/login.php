<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $judul; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/fontawesome/fontawesome/css/font-awesome.css') ?>">

	<!-- js -->
	<script src="<?= base_url('assets/bootstrap/js/jquery.js') ?>"></script>
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>

	<style>

		.card-signin {
			border: 0;
			border-radius: 1rem;
			box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
		}

		.card-signin .card-body {
			padding: 2rem;
		}

</style>
</head>
<body>
	
	<div class="container" style="margin-top: 100px;">

		<div class="row">
			
			<div class="col-sm-9 col-md-12 col-lg-5 mx-auto">

				<div class="card card-signin my-5">
					<div class="card-header text-center">
						<h5 class="card-title mb-lg-0">M&nbspA&nbspX&nbspP&nbspR&nbspO &nbsp  H&nbspI&nbspS  <i class="fa fa-plus"></i></h5>
						<a href="http://maxpropertindo.com" class="text-center" style="text-decoration: none;" target="_blank">www.maxproitsolution.com </a>
					</div>
					<div class="card-body">
						<?= form_open(site_url('dashboard'), array('id' => 'Frm', 'class' => 'form-signin')); ?>

						<div class="err_msg" style="display: none;">
							<div class="alert alert-secondary msg"></div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<span class="fa fa-user"></span>
									</div>
								</div>
								<input type="text" name="username" class="form-control" id="username" autocomplete="off" placeholder="Username">
							</div>
						</div>

						<div class="form-group mt-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<span class="fa fa-lock pr-1"></span>
									</div>
								</div>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password" style="border-right: none;">
								<div class="input-group-append">
									<div class="input-group-text bg-white">
										<span id="lookup" class="fa fa-eye"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group mt-4">
							<button type="submit" class="btn btn-info btn-block">Login</button>
						</div>
						<a href="<?= site_url('') ?>" class="float-right" style="text-decoration: none;">
							<span class="fa fa-arrow-left"></span>
							Back
						</a>
						<?= form_close(); ?>
					</div>
				</div>

			</div>
			
		</div>
	</div>

	<script type="text/javascript">

		$(document).on('mouseover', '#lookup', function() {
			$("#password").prop('type', 'text');
		});

		$(document).on('mouseout', '#lookup', function() {
			$("#password").prop('type', 'password');
		});

		$("#Frm").submit(function() {

			var username = $("#username").val();
			var password = $("#password").val();

			if (username == "" || password == "") {
				$(".err_msg").show();
				$(".msg").text('Semua kolom harus diisi !');
			} else {

				$.ajax({

					url : "<?= site_url('auth/login') ?>",
					type : "POST",
					cache : false,
					data : { username : username, password : password },
					success : function(result) {

						if (result != 0) {
							window.location.href = result;
						} else {
							$(".err_msg").show();
							$(".msg").text('Data tidak ditemukan !');
						}

					},
					error : function() {
						alert('error');
					}

				});

			}

			return false;

		});

	</script>
</body>
</html>