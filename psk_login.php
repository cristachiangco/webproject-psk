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

<?php session_start() ?>

<html>

	<head>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<link rel = "stylesheet" type = "text/css" href = "commondesign.css">
		
		<style>
			.lg {
				text-align : center;
				font-size : 35px;
				margin-bottom : -25px;
			}
			
			.lb {
				margin : 3px;
				font-size : 25px
			}
			
			.inpt {
				width : 100%;
				height : 25px;
				border-radius : 5px;
				background-image : linear-gradient(200deg, #f53f3fcc, #e9f712d9);
				margin-bottom : 5px;
				padding-left : 5px;
			}
			
			.txtlg {
				padding : 0px 50px;
			}
			
			.btn {
				font-size : 20px;
				margin-top : 10px;
				border-radius : 100px;
				background-image : linear-gradient(200deg, #f53f3fcc, #e9f712d9);
			}

			.login-con {
				display : table;
				border : outset;
				width : 100%;
				background-image : linear-gradient(200deg, #3ff571d6, #e80000c2);
			}
			
			.img-cover {
				width : 160px
			}
			
			.loginContainer {
				position : absolute;
				margin : 1vw 0vw 1vw 19vw;
				width : 70vw;
				height : wrap_content;
				top : 12vw;
			}
			
			.footer {
				margin : 0vw 0vw 0vw 5vw;
				position : absolute;
				bottom : -5vw;
			}
		</style>
	</head>

	<?php
		$con = mysqli_connect('localhost','root','');
		mysqli_select_db($con,'customers');

		if (isset($_POST['login'])) {
			$query = "SELECT * from account where username ='" . $_POST['username'] . "'and password ='" . $_POST['password'] . "'" ;
			$result = mysqli_query($con,$query);
			$count = mysqli_num_rows($result);

			if($count > 0){
				$_SESSION['name'] = $_POST['username'];
				header('Location : index.php');
			}else{
				echo '<script> alert("Incorrect Username or Password") </script>';
			}
		}
	?>

	<body>	
		<?php include "psk_background.php" ?>
		
		<div class = "loginContainer">
			<div class = "col" style = "padding-left : 20vh; display : inline-flex;">
				<div class = "login-con">
					<div class = "txtlg">
						<h2 class = "lg"> LOGIN </h2>

						<div class = "form" style = "padding : 20px; margin : 50px 20px; border : dotted;">
							<form style = "text-align : center; width : 150px" method = "post">
								<label class = "lb"> Username </label>
								<input class = "inpt" type = "text" name = "username" placeholder = "Username" required = ""></input>
								<br>

								<label class = "lb"> Password </label>
								<input class = "inpt" type = "password" name = "password" placeholder = "Password" required = ""></input>
								<br>

								<input class = "btn" type = "submit" name = "login"></input>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class = "footer">
			<?php include "psk_footer.php" ?>
		</div>

		<?php include "psk_categories.php" ?>
		<?php include "psk_header.php" ?>
	</body>
</html>