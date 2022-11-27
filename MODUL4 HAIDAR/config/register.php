<?php
$database = mysqli_connect("localhost:3308", "root", "", "modul3");
function register($data){
	global $database;

	$email = $data["email"];
	$nama = $data["nama"];
	$telp =  $data["telp"];
	$pass = $data["pass"];
	$passconf = $data["passconf"];

	if($pass !== $passconf){
		echo "
		<script>
			alert('kata sandi berbeda');
		</script>
		"; 
		header("Location: ../register-haidar.php");
		exit;
	}

	$query="INSERT INTO wad_modul4 VALUES('', '$nama', '$email', '$pass', '$telp')";
  mysqli_query($database, $query);
	return mysqli_affected_rows($database);

}
?>