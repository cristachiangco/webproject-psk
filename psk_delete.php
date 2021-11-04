<!--
	***Online Website Plant Shop***
		  ***Header Content***
		
			BSCS - 3A
	Members:
	Aguilar, Edward John
	Batu, Laurence Angelo T.
	Casi, Maria Kyla
	Chiangco, Crista Mae E.
	Delas Alas, Jommel
	Inodeo, Chara Mae
-->

<?php 
	$con = mysqli_connect('localhost', 'root','');
	$loc = mysqli_select_db($con, 'customers');

	$ref = $_GET['id'];
	$query = "DELETE FROM transaction WHERE refno = '$ref'";
	$data = mysqli_query($con, $query);

	if ($data) {
		header('Location : psk_transaction.php');
	}
?>