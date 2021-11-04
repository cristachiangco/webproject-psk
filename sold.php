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
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'customers');

	$lquery = "INSERT INTO sold (refno, quantity, item, name, price) VALUES ('$refno', '$quan', '$item', '$name', '$price')";
	$done = mysqli_query($con, $lquery);

	header('Location: index.php')
?>