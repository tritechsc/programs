<?php
$hostname = "";
$database = "";
$username = "";
$password = "";

$connection = mysqli_connect($hostname, $username, $password, $database);

if(mysqli_connect_errno()) {
	print mysqli_connect_error($connection);
}

$data = array(
	0,
	$_SERVER['REMOTE_ADDR'],
	date("H:i:s"),
	date("Y-m-d"),
	$_SESSION['pagename']
);

$data_enc = str_replace(array('[', ']'), '', htmlspecialchars(json_encode($data), ENT_NOQUOTES));
$sql = 'INSERT INTO hits (`id`, `ip`, `timein`, `datein`, `pagename`) VALUES ('.$data_enc.');';
if(!mysqli_query($connection, $sql) && !mysqli_query($connection, 'SELECT * FROM `hits`')) {
	print mysqli_error($connection);
}
?>
