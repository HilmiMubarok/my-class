<h1 class="text-center">Tambah User</h1>
<form method="post">
	<div class="form-group">
		<label>NIM</label>
		<input type="number" name="nim" class="form-control" placeholder="Masukkan NIM User" required>
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap User" required>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jenkel" class="form-control">
			<option value="L">Laki-Laki</option>
			<option value="P">Perempuan</option>
		</select>
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggal_lahir" required>
	</div>
	<div class="form-group">
		<label>Pertanyaan 1</label>
		<select name="q1" class="form-control">
			<?php global $questions; for ($i=0; $i < count($questions); $i++): ?>
			<option value="<?= $questions[$i] ?>"><?= $questions[$i] ?></option>
			<?php endfor ?>
		</select>
	</div>
	<div class="form-group">
		<label>Jawaban 1</label>
		<input type="text" name="a1" class="form-control" placeholder="Masukkan Jawaban Dari Pertanyaan 1" required>
	</div>
	<div class="form-group">
		<label>Pertanyaan 2</label>
		<select name="q2" class="form-control">
			<?php global $questions; for ($i=0; $i < count($questions); $i++): ?>
			<option value="<?= $questions[$i] ?>"><?= $questions[$i] ?></option>
			<?php endfor ?>
		</select>
	</div>
	<div class="form-group">
		<label>Jawaban 2</label>
		<input type="text" name="a2" class="form-control" placeholder="Masukkan Jawaban Dari Pertanyaan 2" required>
	</div>
	<div class="form-group">
		<label>Pertanyaan 3</label>
		<select name="q3" class="form-control">
			<?php global $questions; for ($i=0; $i < count($questions); $i++): ?>
			<option value="<?= $questions[$i] ?>"><?= $questions[$i] ?></option>
			<?php endfor ?>
		</select>
	</div>
	<div class="form-group">
		<label>Jawaban 3</label>
		<input type="text" name="a3" class="form-control" placeholder="Masukkan Jawaban Dari Pertanyaan 3" required>
	</div>
	<button class="btn btn-primary" name="btnAddUser">
		Simpan
	</button>
	<a href="<?= urlTujuan('dashboard/superadmin/manage-user') ?>" class="btn btn-success">
		Kembali
	</a>
</form>
<br>