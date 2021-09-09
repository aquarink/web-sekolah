<nav class="navbar navbar-expand-lg nav-orange">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon" style="color: #fff">Menu</span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'home' ? 'active' : '' ?>" href="index.php"><i class="fa fa-home"></i> HOME</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'tentang_website' ? 'active' : '' ?>" href="tentang_website.php"><i class="fa fa-address-card"></i> TENTANG KAMI</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'artikel' ? 'active' : '' ?>" href="artikel.php"><i class="fa fa-newspaper"></i> ARTIKEL</a>
			<!-- <a class="nav-item nav-link text-white navlink <?= $aktif == 'siswa' ? 'active' : '' ?>" href="siswa.php">SISWA</a> -->
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'guru' ? 'active' : '' ?>" href="guru.php"><i class="fa fa-chalkboard-teacher"></i> GURU</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'jurusan' ? 'active' : '' ?>" href="jurusan.php"><i class="fa fa-chalkboard"></i> JURUSAN</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'ekskul' ? 'active' : '' ?>" href="ekskul.php"><i class="fa fa-gopuram"></i> EKSKUL</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'visi_misi' ? 'active' : '' ?>" href="visi_misi.php"><i class="fa fa-trophy"></i> VISI MISI</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'bukutamu' ? 'active' : '' ?>" href="bukutamu.php"><i class="fa fa-book-open"></i> BUKU TAMU</a>

			<a class="nav-item nav-link text-white navlink" target="_blank" href="login.php"><i class="fa fa-sign-in-alt"></i> LOGIN</a>
		</div>
	</div>
</nav>