<?php
$servername = $_SERVER['SERVER_NAME'];
$username = "root";
$password = "";
$db_name = "news";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
	// throw new Exception('An Error Occured');
	$conn = mysqli_connect(
		$servername,
		$username,
		$password,
		$db_name
	);

	if (!$conn)
		die("No connection: " . mysqli_connect_error());
} catch (Exception $e) {
	error_log(
		$e->getMessage() . "\t\t" . date("d/m/yH:i:s") . "\t\t" . $_SERVER['PHP_SELF'] . "\r\n",
		3,
		"F:/OpenServer/OSPanel/domains/localhost/errors.txt"
	);
	header('Location: error.php');
}
