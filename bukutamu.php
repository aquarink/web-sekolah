<?php 
require_once 'koneksi.php';
$aktif = 'bukutamu'; 

include_once 'nama.php';
$title = 'Buku Tamu Sekolah '.$nSekolah;
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

	<link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
	<script defer src="fontawesome-free-5.15.4-web/js/all.js"></script>
</head>
<body>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<?php include_once('slogan.php'); ?>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Buku Tamu
				</div>
				<div>
					<form method="POST" action="proses_bukutamu.php">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" placeholder="nama" autocomplete="off" required="required" name="nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="Email" class="form-control" id="email" placeholder="email" autocomplete="off" required="required" name="email">
						</div>
						<div class="form-group">
							<label for="isi">Isi</label>
							<textarea name="isi" class="form-control" rows="5" maxlength="250" placeholder="maksimal 250 karakter"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
							<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
						</div>
					</form>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<?php include_once('footer.php'); ?>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>