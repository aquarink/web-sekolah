<?php 

session_start();

$active = 'dashboard';
include_once 'nama.php';
$title = 'Akses Admin Sekolah '.$nSekolah;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="#000000" />
  	<meta name="description" content="<?php echo $title; ?>" />
	<meta name="twitter:card" content="summary" />
  	<meta name="twitter:site" content="@jpebriant" />
  	<meta name="twitter:creator" content="@jpebriant" />
  	<meta property="og:title" content="<?php echo $title; ?>" />
  	<meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>" />
  	<meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>/sekolah.jpg" />
  	<meta property="og:description" content="<?php echo $title; ?>" />

	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	
	<style>
	.asup {
		background-image:url(belajar.png);
		background-size:cover;
	}
	</style>
</head>
<body class="asup">
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card shadow">
					<div class="card-header bg-primary text-white">
					<center>
						<img src="resources/images/logo.png" width="80%" alt="" srcset="">
					</center>
					</div>
					<div class="card-body">
						<?php if(isset($_SESSION['sukses'])) : ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['sukses']) ?>
						<?php elseif(isset($_SESSION['gagal'])) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['gagal']) ?>
						<?php endif; ?>
						<form action="proses_login.php" method="POST">

							<table>
								<tr>
									<td><label for="username">Username</label></td>
									<td>:</td>
									<td><input placeholder="Masukan Username" class="form-control" type="text" name="username"></td>
								</tr>

								<tr>
									<td><label for="password">Password</label></td>
									<td>:</td>
									<td><input placeholder="Masukan Password" class="form-control" type="password" name="password"></td>
								</tr>
							</table>

							<br>

							<!-- <div class="form-group">
								<label for="username">Username</label>
								admin	
								<input type="text" name="username">
							</div> -->
							<!-- <div class="form-group"> -->
							<!-- 	<label for="password">Password</label>
								admin
								<input type="text " name="password">
							</div> -->
							<div class="form-group">
								<button type="submit" name="login" class="btn btn-sm btn-block btn-primary">Masuk</button>

								<br>

								<a href="index.php" class="btn btn-sm btn-block btn-default">Kembali</a>
							</div>
							<hr>
							<center>
								<small>2021 © <a style="color:#000;" href="https://waktu.my.id" target="_blank" rel="noopener noreferrer">Waktu.my.id</a></small>
							</center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>