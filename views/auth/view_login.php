<button class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#formLogin">
	Login
</button>
<button class="btn btn-danger btn-block btn-lg" data-toggle="modal" data-target="#formRegister">
	Register
</button>

<div class="modal" id="formLogin">
	<div class="modal-dialog modal-dialog-centered animated bounceIn">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h3>Login</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">

					<div class="form-group">
						<label>Masukkan NIM Anda</label>
						<input type="number" name="nim" class="form-control form-control-lg" value="20117034">
					</div>

					<div class="form-group">
						<label>Masukkan Password Anda</label>
						<input type="password" name="password" class="form-control form-control-lg" value="koploplo123">
					</div>

					<button type="submit" name="btnLogin" class="btn btn-primary btn-block btn-lg">
						<i class="fa fa-arrow-right"></i> Login
					</button>

				</form>

			</div>
		</div>
	</div>
</div>

<!-- Form Register -->
<div class="modal" id="formRegister">
	<div class="modal-dialog modal-dialog-centered animated bounceIn">
		<div class="modal-content">
			<div class="modal-header bg-danger text-white">
				<h3>Register</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">

					<div class="form-group">
						<label>Masukkan NIM Anda</label>
						<input type="number" name="nim" class="form-control form-control-lg" value="20117034">
					</div>

					<button type="submit" name="btnRegister" class="btn btn-danger btn-block btn-lg">
						<i class="fa fa-arrow-right"></i> Register
					</button>

				</form>
			</div>
		</div>
	</div>
</div>

<?php
	if (isset($_POST['btnLogin'])) {
		login();
	}
?>