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

<?php session_start(); ?>

<html>
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<link rel = "stylesheet" type = "text/css" href = "commondesign.css">
		
		<style>
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
			
			.total_content {
				float : left;
				width : 67vw;
				position : relative;
				list-style-type : none;
				overflow : hidden;
				font-weight : bold;
			}
			
			.total_lbl, .price_computation {
				background-color : rgb(125, 179, 143);
				font-weight : bold;
				float : right;
				position : relative;
				color : maroon;
				text-align : center;
				font-size : 18;
			}
			
			.total_lbl {
				margin-left : 1vw;
				padding : 1vw 3vw 1vw 3vw;
			}
			
			.price_computation {
				margin-right : 3vw;
				padding : 1vw 5vw 1vw 5vw;
			}
			
			.proceedBtn {
				position : relative;
				float : right;
				right : 2vw;
				background-color : rgb(125, 179, 143);
				color : white;
				font-weight: bold;
				padding : 1vw 3vw 1vw 3vw;
				text-align : center;
				font-size : 16;
				border-radius : .4vw;
				font-weight : bold;
			}
			
			.proceedBtn:hover {
				background-color : #54E8AC;
			}
			
			.proceedBtn:active {
				background-color : green;
			}
			
			.footer {
				position : relative;
				bottom : -25vw;
				padding : 0vw 1.3vw 0vw 1.3vw;
			}
		</style>
	</head>
		
	<body>
		<?php include "psk_background.php" ?>
		
		<form method = "post" action = "psk_receipt.php">
			<div class = "transaction_content">
				<h1> Checking Out </h1>
				
				<table>
					<tr class = "table_header">
					<td class = "column_01"> Reference No. </td>
						<td class = "column_01"> Quantity </td>
						<td class = "column_02"> Item </td>
						<td class = "column_03"> Name </td>
						<td class = "column_04"> Price </td>
						<td class = "column_00"> </td>
					</tr>

					<?php 
						$con = mysqli_connect('localhost','root','');
						mysqli_select_db($con, 'customers');

						$sql = "SELECT refno, quantity, item, name, price from transaction";
						$result = mysqli_query($con,$sql); 
						$num = mysqli_num_rows($result);

						if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
							if ($num > 0) {
								while ($row = $result -> fetch_assoc()) {
									error_reporting(error_reporting() & ~E_NOTICE);
									$pr = $row["price"];
									$int = (int)$pr; 
									$sum = $sum + $int;
									echo "<tr><td>" . $row["refno"] . "</td><td>" . $row["quantity"] . "</td><td>" . $row["item"] . "</td><td>" . $row["name"] . "</td><td>" . "P" . $row["price"] . "</td><td>" . "<a href = 'psk_delete.php?id=" .  $row['refno'] . "'><img class = 'trashBtn' src = 'icons/ico_trash.png'/></a>" . "</td><td>";
								}
							}
						}else{

						}
					?>

				</table>			
			
				<ul class = "total_content"> 
					<button name = "proceed" class = "proceedBtn"> Proceed </button>
					<li class = "price_computation">
						<?php 
							if (empty($sum)) {
								echo "P0";
							}else{
								echo 'P' . $sum	;
							} 
						?>
					</li>
					<li class = "total_lbl"> TOTAL : </li>
				</ul>
				
				<div class = "footer">
					<?php include "psk_footer.php" ?>
				</div>
			</div>
		</form>
		
		<?php include "psk_categories.php" ?>
		<?php include "psk_header.php" ?>
	</body>
</html>