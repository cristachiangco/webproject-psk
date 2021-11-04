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

<html>
	<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

	<style>
		.lg {
			text-align : center;
			font-size : 35px;
			margin-bottom : 8px;
		}
		
		.txtlg {
			padding : 0px 50px;
		}
		
		.reg-con {
			display : table;
			border : outset;
			width : 100%;
			background-image : linear-gradient(200deg, #3ff571d6, #e80000c2);
		}

		label {
			padding : 5px 5px 5px 5px;
		}
		
		input {
			padding : 3px 3px 3px 3px;
			margin : 5px 5px 5px 5px;
			background-image : linear-gradient(200deg, #f53f3fcc, #e9f712d9);
		}
		
		label, input {
			display : flex;
			margin : 0px;
		}

		.flex {
			display : flex;
			margin : 5px;
		}

		.loginContainer {
			position : absolute;
			margin : 1vw 0vw 1vw 20vw;
			width : 70vw;
			height : wrap_content;
			top : 12vw;
		}

		
		.footer {
			margin : 0vw 0vw 0vw 5vw;
			position : absolute;
			bottom : -10vw;
		}
		</style>
	</head>
	
	<?php 
		$err = $lname = $fname = $address = $contact = $username = $email = $password = "";
		$errlname = $errfname = $erraddress = $errusername = $erremail = $errpassword = "";
		
		if (isset($_POST['register'])) {
			$lname = $_POST['lname'];
			$fname = $_POST['fname'];
			$address = $_POST['address'];
			$contact = $_POST['contactno'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			if (strlen($contact) <11 || strlen($contact)>11) {
				$err = "Enter 11 digit mobile number";
				$errlname = $_POST['lname'];
				$errfname = $_POST['fname'];
				$erraddress = $_POST['address'];
				$errusername = $_POST['username'];
				$erremail = $_POST['email'];
				$errpassword = $_POST['password'];
			}
		}
	?>

	<body>		
		<?php include "psk_background.php" ?>

		<div class = "loginContainer">
			<div class = "col" style = "padding-left : 20vh; display : inline-flex;">
				<div class = "reg-con">
					
					<div class = "txtlg">
						<h2 class = "lg"> REGISTER </h2>
					</div>
					
					<form method = "post">
						<div class = "flex"><label style = "margin-right : 12px"><span style = "color : red"> * </span> Last Name </label>
							<input type = "text" name = "lname" placeholder = "Enter your Last Name" required value = " <?php echo $errlname; ?> ">
						</div>
						
						<div class = "flex"><label style = "margin-right : 10px"><span style = "color : red"> * </span> First Name </label>
							<input type = "text" name = "fname" placeholder = "Enter your First Name" required value = " <?php echo $errfname; ?> ">
						</div>
						
						<div class = "flex"><label style = "margin-right : 29px"><span style = "color : red"> * </span> Address </label>
							<input type = "text" name = "address" placeholder = "Address" required value = " <?php echo $erraddress; ?> ">
						</div>
						
						<div class = "flex"><label style = "margin-right : 5px"><span style = "color : red"> * </span> Contact No. </label>
							<input type = "text" name = "contactno" placeholder = "09*********" required>
						</div>
						
						<span style = "color : cyan"> <?php echo $err ?> </span>
						
						<div class = "flex"><label style = "margin-right : 26px"> Birthday </label>
							<input type = "date" name = "date" required>
						</div>
						</br>
						
						<div class = "flex"><label style = "margin-right : 17px"><span style = "color : red"> * </span> Username </label>
							<input type = "text" name = "username" placeholder = "Username" required value = " <?php echo $errusername; ?> ">
						</div>
						
						<div class = "flex"><label style = "margin-right : 43px"><span style = "color : red"> * </span> Email </label>
							<input type = "text" name = "email" placeholder = "Email" required value = " <?php echo $erremail; ?> ">
						</div>
						
						<div class = "flex"><label style = "margin-right : 20px"><span style = "color : red"> * </span> Password </label>
							<input type = "password" name = "password" placeholder = "Create a password" required value = " <?php echo $errpassword; ?> ">
						</div>
						
						<div style = "text-align : -webkit-center; margin : 15px 0px 8px 0px;">
							<input type = "submit" name = "register" value = "Create an Account" style = "border-radius : 100px; font-size : 14px">
						</div>
					</form>
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

<?php
	session_start();

	$con = mysqli_connect('localhost', 'root','');
	mysqli_select_db($con, 'customers');

	if (isset($_POST['register'])) {
		$ref = mt_rand();
		$lname = $_POST["lname"];
		$fname = $_POST["fname"];
		$address = $_POST["address"];
		$number = $_POST["contactno"];
		$date = $_POST["date"];	
		$username = $_POST["username"];
		$email = $_POST["email"];
		$pass = $_POST["password"];

		if (strlen($number) < 11 || strlen($number) > 11) {
			$err = "Enter 11 digit mobile number";
			$errlname = $_POST['lname'];
			$errfname = $_POST['fname'];
			$erraddress = $_POST['address'];
			$errusername = $_POST['username'];
			$erremail = $_POST['email'];
			$errpassword = $_POST['password'];
		}else{
			$mquery = "INSERT INTO reg (reference_no, lname, fname, address, contact, bday, username, email, password) VALUES ('$ref', '$lname', '$fname', '$address', '$number', '$date', '$username', '$email', '$pass')";
			mysqli_query($con, $mquery);

			$lquery = "INSERT INTO account (username, password, reference_no) VALUES ('$username', '$pass', '$ref')";
			mysqli_query($con, $lquery);

			echo '<script>alert("Registration Completed")</script>';

			$_SESSION['lname'] = $_POST['lname'];
			$_SESSION['fname'] = $_POST["fname"];
			$_SESSION['contact'] =$_POST["contactno"];
			$_SESSION['address'] = $_POST['address'];
		}
	}
?>