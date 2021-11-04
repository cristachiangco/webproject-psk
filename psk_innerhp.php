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
			.recommended_content {
				position : absolute;
				top : 12vw;
				height : 21.85vw;
				padding : 1.3vw 0vw 0.3vw 0vw;
				margin-left : -2.5vw;
				width : 80vw;
				background-color : rgba(255, 255, 255, 0.4);
			}
			
			h4 {
				font-weight : bold;
				position : absolute;
				top : -1.55vw;
				color : white;
			}
			
			ul {
				top : -1vw;
				list-style-type : none;
			}
			
			.recom_li {
				float : left;
				margin : .5vw;
				margin-left : .5vw;
				position : relative;
			}
			
			.recom_icon {
				width : 18vw;
				height : 20vw;
				object-fit : cover;
			}
			
			table {
				margin : 0vw 2vw 0vw 2vw;
				position : absolute;
				top : 38vw;
			}
			
			td {
				color : white;
				height: 12vw;
				width : 8vw;
				background-color : rgba(255, 255, 255, 0.4);
				padding : 2vw;
				text-align : center;
				text-decoration : none;
			}
			
			.category_icon {
				width : 8vw;
				height : 8vw;
				object-fit : cover;
				border-radius : 100%;
				margin-bottom : 1vw;
			}
			
			.bottom_left {
				position : absolute;
				bottom : 8px;
				left : 0;
				background-color : rgba(0, 0, 0, 0.6);
				color : white;
				padding : 0vw 1vw 0vw 1vw;
				border-radius : 0px 20px 20px 0px;
				visibility : hidden;
				width : wrap_content;				
			}

			.recom_icon:hover + .bottom_left, .bottom_left:hover {
				visibility : visible;
			}
		</style>
	</head>
	<body>
		<div class = "recommended_content">
			<h4> Featured Items </h4>
			<ul>
				<li class = "recom_li">
					<a href = "psk_plantinfo_herbs.php #euca">
						<img class = "recom_icon" src = "plants/herbs_eucalyptus.jpg"/>
						<div class = "bottom_left"> Eucalyptus </br> P 2,000 </div>	
					</a>
				</li>
				
				<li class = "recom_li">
					<a href = "psk_plantinfo_fern.php #bstfern">
						<img class = "recom_icon" src = "plants/boston_fern.jpg"/>
						<div class = "bottom_left"> Boston Fern </br> P 1,350 </div>	
					</a>
				</li>
				
				<li class = "recom_li">
					<a href = "psk_plantinfo_flowers.php #cnflower">
						<img class = "recom_icon" src = "plants/flower_coneflower.jpg"/>
						<div class = "bottom_left"> Coneflower </br> P 1,350 </div>	
					</a>
				</li>
				
				<li class = "recom_li">
					<a href = "psk_plantinfo_foliage.php #mnstfoliage">
						<img class = "recom_icon" src = "plants/foliage_monstera.png"/>
						<div class = "bottom_left"> Monstera </br> P 2,350 </div>	
					</a>
				</li>
			</ul>
		</div>
		
		<table>
			<tr>
				<td>
					<a href = "psk_plantinfo_cactus.php">
						<img class = "category_icon" src = "icons/cat_cactus.jpg"/> Cactus 
					</a>
				</td>

				<td>
					<a href = "psk_plantinfo_succulent.php">
						<img class = "category_icon" src = "icons/cat_succulents.jpg"/> Succulents 
					</a>
				</td>

				<td>
					<a href = "psk_plantinfo_foliage.php">
						<img class = "category_icon" src = "icons/cat_foliage.jpg"/> Foliage 
					</a>
				</td>

				<td>
					<a href = "psk_plantinfo_flowers.php">
						<img class = "category_icon" src = "icons/cat_flowers.jpg"/> Flowers 
					</a>
				</td>

				<td>
					<a href = "psk_plantinfo_fern.php">
						<img class = "category_icon" src = "icons/cat_fern.jpg"/> Ferns 
					</a>
				</td>

				<td>
					<a href = "psk_plantinfo_herbs.php">
						<img class = "category_icon" src = "icons/cat_herbs.jpg"/> Herbs 
					</a>
				</td>
			</tr>
		</table>		
	</body>
</html>