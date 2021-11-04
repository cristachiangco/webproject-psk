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
!-->

<?php session_start(); ?>

<html>
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<link rel = "stylesheet" type = "text/css" href = "commondesign.css">
		
		<style>
			h1 {
				width : 10vw;
			}
			
			.inner_plant_info_content {
				padding : 2vw 2vw 2vw 4vw;
			}
			
			.plant_img {
				width : 20vw;
				height : 20vw;
				object-fit : fill;
				float : left;
				position : relative;
				border-radius : 50%;
			}
			
			.cart_buy_btn {
				width : 3.5vw;
				height : 3.5vw;
				opacity : 0.6;
				position : absolute;
				background : url("icons/ico_cart.png") no-repeat red;
				background-size : cover;
				margin : 16vw 0vw 0vw -5vw;
				padding : 0.3vw;
				border-radius : 100%;
			
			}
			
			.cart_buy_btn:hover {
				opacity : 0.9;
				border-radius : 50%;
				background-color : red;
			}
			
			.cart_buy_btn:active {
				background-color : maroon;
			}
			
			.plant_information {
				margin-left : 22vw;
			}
			
			.plant_name {
				color : green;
				margin-left : 0;
				font-size : 30;
				font-weight : bold;
				text-align : center;
			}
			
			.plant_price {
				font-size : 16;
				background : url("icons/ico_tag.png") no-repeat;
				background-size : cover;
				color : rgba(0, 0, 0, 0.6);
				padding : 2.3vw 2vw 1vw 4.3vw;
			}
			
			textarea {
				width : 40vw;
				height : 20vw;
				border : none;
				resize : none;
				padding : 1vw;
				text-indent : 3vw;
				font-family : century gothic;
				font-size : 15;
				margin-top : 1vw;
				background-color : rgba(255, 255, 255, 0);
			}
			
			.footer {
				position : absolute;
				bottom : 0;
			}
			
			.plant_img:hover {
				transform : scale(1.3);
				transition : transform .2s;
				border-radius : none;
			}
		</style>
	</head>

<?php
	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'customers');

	if (isset($_POST['pep'])) {
		if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
			$nam = $_SESSION['name'];
			$refno = mt_rand();
			$quan = "1";
			$item = "Herbs";
			$name = "Peppermint";
			$price = "200";

			$lquery = "INSERT INTO transaction (refno, quantity, item, name, price) VALUES ('$refno', '$quan', '$item', '$name', '$price')";

			$done = mysqli_query($con, $lquery);

			if ($done) {
				echo '<script> alert("Added to Cart") </script>';
			}
		}else{
			echo '<script> alert("You need to Login first") </script>';
		}
	}

	if (isset($_POST['lav'])) {
		if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
			$nam = $_SESSION['name'];
			$refno = mt_rand();
			$quan = "1";
			$item = "Herbs";
			$name = "Lavander";
			$price = "200";

			$lquery = "INSERT INTO transaction (refno, quantity, item, name, price) VALUES ('$refno', '$quan', '$item', '$name', '$price')";

			$done = mysqli_query($con, $lquery);

			if ($done) {
				echo '<script> alert("Added to Cart") </script>';
			}
		}else{
			echo '<script> alert("You need to Login first") </script>';
		}
	}		

	if (isset($_POST['euc'])) {
		if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
			$nam = $_SESSION['name'];
			$refno = mt_rand();
			$quan = "1";
			$item = "Herbs";
			$name = "Eucalyptus";
			$price = "2000";

			$lquery = "INSERT INTO transaction (refno, quantity, item, name, price) VALUES ('$refno', '$quan', '$item', '$name', '$price')";

			$done = mysqli_query($con, $lquery);

			if ($done) {
				echo '<script> alert("Added to Cart") </script>';
			}
		}
		else{
			echo '<script> alert("You need to Login first") </script>';
		}
	}
?>

	<body>
		<?php include "psk_background.php" ?>
		<form method = "post">
		<div class = "plant_info_content">
			<h1> Herbs </h1>
			
			<div class = "inner_plant_info_content">
				<img class = "plant_img" src = "plants/herbal_peppermint.jpg"><button class = "cart_buy_btn" name = "pep"></button></img>
				
				<div class = "plant_information">
					<label class = "plant_name"> Peppermint <span class = "plant_price"> P 200.00 </span></label>
								
<textarea disabled = "yes">
	<?php 
		$fopen = fopen("plants_info/herbs_peppermint.txt", "r+");
		$fread = fread($fopen, filesize("plants_info/herbs_peppermint.txt"));
		fclose($fopen);
		echo $fread;
	?>
</textarea>

				</div>
			</div>
			
			<div class = "inner_plant_info_content">
				<img class = "plant_img" src = "plants/herbal_lavender.jpg"><button class = "cart_buy_btn" name = "lav"></button></img>
				
				<div class = "plant_information">
					<label class = "plant_name"> Lavender <span class = "plant_price"> P 200.00 </span></label>
								
<textarea disabled = "yes">
	<?php 
		$fopen = fopen("plants_info/herbs_lavender.txt", "r+");
		$fread = fread($fopen, filesize("plants_info/herbs_lavender.txt"));
		fclose($fopen);
		echo $fread;
	?>
</textarea>

				</div>
			</div>
			
			<div class = "inner_plant_info_content">
				<img id = "euca" class = "plant_img" src = "plants/herbs_eucalyptus.jpg"><button class = "cart_buy_btn" name = "euc"></button></img>
				
				<div class = "plant_information">
					<label class = "plant_name"> Eucalyptus Plant <span class = "plant_price"> P 2,000.00 </span></label>
								
<textarea disabled = "yes">
	<?php 
		$fopen = fopen("plants_info/herbs_eucalyptus.txt", "r+");
		$fread = fread($fopen, filesize("plants_info/herbs_eucalyptus.txt"));
		fclose($fopen);
		echo $fread;
	?>
</textarea>

				</div>
			</div>
			
			<div class = "footer">
				<?php include "psk_footer.php" ?>
			</div>
		
		</div>
		</form>
		<?php include "psk_header.php" ?>
		<?php include "psk_categories.php" ?>
	</body>
</html>

