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
		<link rel = "stylesheet" type = "text/css" href = "commondesign.css">
		
		<style>	
			.header_content {
				background-color : white;
				margin : -1vw 0vw 0vw 0vw;
				position : fixed;
				width : 100vw;
				height : 10vw;
			}
			
			.web_logo {
				width : 7vw;
				margin-left : 2vw;
				margin-top : 0.5vw;
				transition : width 4s, height 4s, transform 2s;
				position : fixed;
			}
			
			.web_logo:hover {
				transform : scaleX(-1);				
			}	
			
			.web_title {
				color : rgb(125, 179, 143);
				font-weight : bold;
				font-size : 3.3vw;
				top : 1vw;
				left : 8.5vw;
				position : fixed;
				text-decoration : none;
			}

			.user_icon {
				background-color : rgb(125, 179, 143);
				width : 4vw;
				top : 1.5vw;	
				border-radius : 50%;
				right : 3vw;
				position : fixed;
			}
			
			.login {
				color : rgb(125, 179, 143);
				font-weight : normal;
				font-size : 1.5vw;
				right : 8vw;
				top : 2.5vw;
				position : fixed;
				text-decoration : none;
			}
			
			.login:hover {
				text-decoration : underline;
			}
			
			.navigation_content {
				position : fixed;
				top : 6.5vw;
				right : 0vw;
				width : 100vw;
			}

			.nav_list {
			  list-style-type : none;
			  margin : 0vw;
			  overflow : hidden;
			  background-color : rgb(125, 179, 143);
			}

			.navi {
			  float : right;
			  text-align : center;
			  margin-right : .5vw;
			  font-size : 20;
			  height : 1.1vw;
			  padding : 10px 10px 20px 10px;
			}
			
			.cartBtn {
				width : 2.5vw;
				height : 2.5vw;
				background : url("icons/ico_cart.png") no-repeat;
				background-size : cover;
				border : 1px solid rgb(125, 179, 143);
				border-radius : .5vw;
				margin : .3vw 1vw .3vw .3vw;
				float : right;
			}
			
			.cartBtn:active {
				border : none;
				padding : 0.07vw;
			}
		</style>
	</head>

	<body>
		<div class = "header_content"> 
			<a class = "web_title" href = "index.php"> Plant Shop and Know </a>
			<a href = "index.php"><img class = "web_logo" src = "icons/logo_web.png"/></a>

			<?php	
				if (isset($_SESSION['name']) || !empty($_SESSION['name'])) {
					$nam = $_SESSION['name'];
					echo '<a class = "login" href = "psk_logout.php">' . $nam . '<img class = "user_icon" src = "icons/ico_user.png"/></a>';
				}else{
					echo '<a class = "login" href = "psk_login.php"> Log In <img class = "user_icon" src = "icons/ico_user.png"/></a>';
				}
			?>
		</div>

		<div class = "navigation_content"> 
			<ul class = "nav_list">
				<li><a class = "navi" href = "psk_aboutus.php"> About Us </a></li>
				<li><a class = "navi" href = "index.php"> Home </a></li>
				<li><a class = "cartBtn" href = "psk_transaction.php"> </a></li>
			</ul>
		</div>
	</body>
</html>