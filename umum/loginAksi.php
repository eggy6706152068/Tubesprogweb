<?php
include "../lib/fungsi.php";

$u			= isset($_POST['username']) ? $_POST['username'] : NULL;
$p	 		= isset($_POST['password']) ? $_POST['password'] : NULL;

$QLogin 	= mysql_query("SELECT * FROM master WHERE u = '$u' AND p = '$p'");
$JLogin		= mysql_num_rows($QLogin);

if ($JLogin != 1) {
	echo "<div id='gagal'>Login Gagal. Periksa kembali</div>";
} else {
	$AUser				= mysql_fetch_array($QLogin);
	$_SESSION['umum'] 	= $AUser['u'];
	?>
	<script language="JavaScript">alert('LOGIN SUKSES');
	document.location=('index.php')</script>
	
	<?php
}

?>