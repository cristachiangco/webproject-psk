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
			body {
				margin : 0;
				padding : 0;
			}
			
			.bg_img_container {
				position : fixed;
				width : 100vw;
				height : 100vh;
				animation-name : myanime;
				animation-duration : 25s; 
				animation-timing-function : ease;
				animation-iteration-count : infinite;
				background-size : cover;
				background-repeat : no-repeat;
				filter : brightness(65%);
			}
			
			@keyframes myanime {
				0% {
					background-image : url(backgrounds/website_img_bckgrnd4.jpg);
				}
				25% {
					background-image : url(backgrounds/website_img_bckgrnd1.jpg);
				}
				50% {
					background-image : url(backgrounds/website_img_bckgrnd2.jpg);
				}
				75% {
					background-image : url(backgrounds/website_img_bckgrnd3.jpg);
				}
				100% {
					background-image : url(backgrounds/website_img_bckgrnd4.jpg);
				}
			}	
		</style>
	</head>
	
	<body>
		<div class = "bg_img_container"> </div>
	</body>
</html>