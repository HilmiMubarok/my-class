<?php

function login()
{
	global $conn;
	$nim      = $_POST['nim'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE nim = '$nim' ";
	$res = $conn->query($sql);
	$row = $res->fetch_object();

	if ($res->num_rows > 0 ) {
		if (password_verify($password, $row->password)) {
			echo "sukses";
		}
	}

}