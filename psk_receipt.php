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
	session_start();
	$_SESSION['lname'] = "";
	$_SESSION['fname'] = "";
	$_SESSION['contact'] = "";
	$_SESSION['address'] = "";
?>

<html>
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<link rel = "stylesheet" type = "text/css" href = "commondesign.css">
		
		<style>			
			h1 {
				width : 18vw;
			}
			
			h3 {
				background-color : rgb(125, 179, 143);
				width : 58vw;
				padding-left : 1vw;
				color : rgba(0, 0, 0, 0.8);
			}
			
			.inner_receipt_content {
				margin-left : 5vw;
			}
			
			.customer_details {
				margin-left : 6vw;
			}
			
			.customer_name_lbl, .customer_contact_lbl, .customer_address_lbl {
				
			}
			
			table {
				margin-left : 3vw;
				text-align : center;
			}
			
			.col_00, .col_01, .col_02, .col_03, .col_04 {
				font-weight : bold;
				background-color : rgba(255, 255, 255, 0.3);
				padding : 0.3vw;
				text-align : center;
			}
			
			.col_00 {
				width : 10vw ;
			}
			
			.col_01 {
				width : 15vw;
			}
			
			.col_02 {
				width : 8vw;
			}
			
			.col_03 {
				width : 5vw;
			}
			
			.col_04 {
				width : 10vw;
			}
			
			.item_img {
				width : 4vw;
				height : 4vw;
				object-fit : contain;
			}
			
			.order_total_lbl, .order_price {
				background-color : maroon;
				font-weight : bold;
				float : right;
				position : relative;
				color : white;
				text-align : center;
				font-size : 18;
			}
			
			.order_total_lbl {
				margin-left : 1vw;
				padding : 1vw 3vw 1vw 3vw;
			}
			
			.order_price {
				margin-right : 6vw;
				padding : 1vw 5vw 1vw 5vw;
			}

			h1 {
				width : 20vw;
			}
			
			table {
				margin-left : 2.5vw;
				text-align : center;
			}
				
			.table_header {
				font-weight : bold;
			}
			
			.column_01, .column_02, .column_03, .column_04 {
				padding : 0.5vw;
				background-color : rgb(125, 179, 143);
			}
			
			.column_00 {
				width : 5vw;
			}
			
			.column_01 {
				width : 8vw;
			}
			
			.column_02 {
				width : 10vw;
			}
			
			.column_03 {
				width : 20vw;
			}
			
			.column_04 {
				width : 15vw;
			}
			
			td {
				padding : .5vw 0vw 0vw .5vw;
			}
			
			tr:hover {
				background : pink;
				opacity : 0.8;
				color : black;
			}
			
			.trashBtn {
				width : 2vw;
				height : 2vw;
				background : url("icons/ico_trash.png") no-repeat;
				background-size : cover;
				border : 1px solid rgb(125, 179, 143);
				border-radius : .5vw;
				margin-right : 0.5vw;
			}
			
			.trashBtn:hover {
				background-color : red;
			}
			
			.trashBtn:active {
				background-color : maroon;
				border : none;
			}
			
			.item_img {
				width : 4vw;
				height : 4vw;
				object-fit : contain;
			}
		</style>
	</head>
	
	<body>
		<?php include "psk_background.php" ?>
	
		<div class = "receipt_content">
			<h1> Order Details </h1>
			
			<div class = "inner_receipt_content">
				<h3> Delivery Information </h3>
				
				<div class = "customer_details">
					<label class = "customer_name_lbl" name = "customer_name"> 
						<?php 
							if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
								echo $_SESSION['lname'].", ".$_SESSION['fname'];
							}
						?>
					</label></br>

					<label class = "customer_contact_lbl" name = "customer_contact">
						<?php
							if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
								echo $_SESSION['contact'];
							} 
						?> 
					</label></br>

					<label class = "customer_address_lbl" name = "customer_address"> 
						<?php
							if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
								echo $_SESSION['address'];
							} 
						?> 
					</label></br>
				</div>
				
				<h3> Purchased Items </h3>
				
				<table>
					<tr class = "table_header">
					<td class = "column_01"> Reference No. </td>
						<td class = "column_01"> Quantity </td>
						<td class = "column_02"> Item </td>
						<td class = "column_03"> Name </td>
						<td class = "column_04"> Price </td>
					</tr>

					<?php 
						$con = mysqli_connect('localhost','root','');
						mysqli_select_db($con, 'customers');

						$sql = "SELECT refno, quantity, item, name, price from transaction";
						$result = mysqli_query($con,$sql); 
						$num = mysqli_num_rows($result);

						if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
							if ($num > 0) {
								while ( $row = $result -> fetch_assoc()) {
									error_reporting(error_reporting()& ~E_NOTICE);
									$pr =$row["price"];
									$int =(int)$pr; 
									$sum = $sum + $int;
									echo "<tr><td>" . $row["refno"] . "</td><td>" .	$row["quantity"] . "</td><td>" . $row["item"] . "</td><td>" . $row["name"] . "</td><td>" . "P" . $row["price"] . "</td><td>";
								}
							
							}
						}else{

						}
					?>

				</table>		
				
				<label class = "order_price"> 
					<?php 
						if (empty($sum)) {
							echo "P0";
						}else{
							echo 'P'.$sum;
						} 
					?> 
				</label>

				<label class = "order_total_lbl"> Order Total : </label>
			</div>
		</div>
		
		<?php include "psk_header.php" ?>
		<?php include "psk_categories.php" ?>
	</body>
</html>