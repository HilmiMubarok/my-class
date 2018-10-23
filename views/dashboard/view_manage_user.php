<h1 class="text-center">Daftar User</h1>
<a href="<?= urlTujuan('dashboard/superadmin/add-user') ?>" class="btn btn-primary">
	<i class="fa fa-plus"></i> Tambah User
</a>
<br>
<br>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Username</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$users = getUser();
			$no    = 1;
			foreach ($users as $user):
		?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $user->nim ?></td>
			<td><?= $user->nama ?></td>
			<td><?= $user->email ?></td>
			<td><?= $user->username ?></td>
			<td><?= $user->status ?></td>
			<td>
				<a href="<?= urlTujuan('dashboard/superadmin/edit-user/'.$user->id_user) ?>" class="btn btn-warning text-white">
					<i class="fa fa-edit"></i>
				</a>
				<a href="<?= urlTujuan('dashboard/superadmin/delete-user/'.$user->id_user) ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		<?php $no++; endforeach ?>
	</tbody>
</table>