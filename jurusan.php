<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT tbl_jurusan.id AS id, tbl_jurusan.nama_jurusan, tbl_jurusan.ka_prodi, tbl_guru.nama, tbl_guru.id AS id_guru FROM tbl_jurusan LEFT JOIN tbl_guru on tbl_jurusan.ka_prodi = tbl_guru.id");
$aktif = 'jurusan';
$no = 1;

include_once 'nama.php';
$title = 'Jurusan Sekolah '.$nSekolah;
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
					Daftar Siswa
				</div>
				<table id="table_id" class="dataTable table table-bordered">
				    <thead>
				        <tr>
				            <th>No</th>
				            <th>Nama Jurusan</th>
				            <th>Nama Kaprodi</th>
				        </tr>
				    </thead>
				    <tbody>
				        <?php while($row = mysqli_fetch_assoc($query)) : ?>
				        	<tr>
				        		<td><?= $no++ ?></td>
				        		<td><?= $row['nama_jurusan'] ?></td>
				        		<td><a href="detail_guru.php?id=<?= $row['id_guru'] ?>" target="_blank"><?= isset($row['nama']) ? $row['nama'] : '-' ?></a></td>
				        	</tr>
						<?php endwhile; ?>
				    </tbody>
				</table>
			</div>
			<?php require 'sidebar.php'; ?>
		</div>
		<?php include_once('footer.php'); ?>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/datatables/datatables.min.js"></script>
	<script src="resources/datatables/datatable.js"></script>
</body>
</html>