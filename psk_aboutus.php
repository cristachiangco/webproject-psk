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
 ?>
 
<html>
	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<link rel = "stylesheet" type = "text/css" href = "commondesign.css">
		
		<style>
			h1 {
				width : 15vw;
			}
			
			textarea {
				color : rgba(0, 0, 0, 0.8);
				padding : 2vw;
				background-color : rgba(255, 255, 255, 0);
				border : none;
				margin : 0vw 3vw 0vw 3vw;
				font-family : Century Gothic;
				font-size : 18;
				word-wrap : break-word;
				height : 40vw;
				width : 65vw;
				resize : none;
			}
		</style>
	</head>
		
	<body>
		<?php include "psk_background.php" ?>
		
		<div class = "about_content">
			<h1> About Us </h1>
			
			<textarea disabled = "yes">
	<?php
		$fopen = fopen("aboutus.txt", "r+");
		$fread = fread($fopen, filesize("aboutus.txt"));
		fclose($fopen);
		echo $fread;
	?>
			</textarea>
			<?php include "psk_footer.php" ?>
		</div>
		
		<?php include "psk_categories.php" ?>
		<?php include "psk_header.php" ?>
	</body>
</html>