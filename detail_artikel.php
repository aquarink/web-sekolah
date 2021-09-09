<?php 

require_once 'koneksi.php';
if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id = $id");
$artikel = mysqli_fetch_assoc($query);
$aktif = 'artikel';

include_once 'nama.php';
$title = $artikel['judul'].' | Sekolah '.$nSekolah;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<meta name="theme-color" content="#000000" />
  	<meta name="description" content="<?= $artikel['judul'] ?>" />
	<meta name="twitter:card" content="summary" />
  	<meta name="twitter:site" content="@jpebriant" />
  	<meta name="twitter:creator" content="@jpebriant" />
  	<meta property="og:title" content="<?= $artikel['judul'] ?>" />
  	<meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>/detail_artikel.php?id="<?php echo $_GET['id']; ?> />
  	<meta property="og:image" content="https://<?php echo $_SERVER['SERVER_NAME']; ?>/images/artikel/<?= $artikel['foto'] ?>" />
  	<meta property="og:description" content="<?= $artikel['judul'] ?>" />

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
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<?php include_once('slogan.php'); ?>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					<?= $artikel['judul'] ?> (<?= date('d M y', strtotime($artikel['tanggal'])) ?>)
				</div>
				<div class="artikel">
					<img src="images/artikel/<?= $artikel['foto'] ?>" alt="" width="100%" class="float-left mb-3 img-thumbnail">
					<div style="text-align: justify;"><?= $artikel['isi'] ?></div>
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