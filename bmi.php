<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Health Care</title>
	<link href="https://fonts.googleapis.com/css?family=Biryani|Cabin+Sketch|Fauna+One|Prompt|Vast+Shadow" rel="stylesheet"> 
	<style type="text/css">

		body{
			text-align: center;
			align-content: center;
			vertical-align: middle;
			font-family: 'Prompt', sans-serif;
			background-image: url('bg.jpg');
		}

		body .header {
			font-size: 90px;
			color: #008080;
			text-shadow: 3px 3px #006666;
		    font-family: 'Vast Shadow', cursive;
		    padding-top: 50px;
		    padding-bottom: 50px;
		}

		.dropbtn {
			font-weight: bold;
		    background-color: #BB626E;
		    color: white;
		    padding: 16px;
		    font-size: 16px;
		    width: 160px;
		    cursor: pointer;
		}

		.dropdown {
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content a {
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		}
		.dropdown-content a:hover {background-color: #f1f1f1}
		.dropdown:hover .dropdown-content {display: block;}
		.dropdown:hover .dropbtn {background-color: #D2979F;}

		.bmi {
			padding-top: 50px;
			padding-left: 38%;
		    box-sizing: border-box;
		    max-width: 950px;
		    display: block;
		}

		.container {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		}

		.col-25 {
		    float: left;
		    width: 45%;
		    margin-top: 6px;
		}

		.col-75 {
		    float: left;
		    width: 55%;
		    margin-top: 6px;
		}

		.row:after {
		    content: "";
		    display: table;
		    clear: both;
		}

		@media (max-width: 600px) {
		    .col-25, .col-75, input[type=submit] {
		        width: 100%;
		        margin-top: 0;
		    }
		}

	</style>

</head>
<body>
	<div class="header">Health Care</div>

	<div class="dropdown">
	  <button class="dropbtn" id="bnt">BMI</button>
	  <div class="dropdown-content">
	    <a href="index.php#bmi">BMI</a>
	    <a href="index.php#bmr">BMR</a>
	    <a href="index.php#cholesterol">Cholesterol</a>
	  </div>
	</div> 

	<div class="bmi" id="bmi">
		<div class="container">
			<div class="row">
			    <div class="col-25">
			        <label for="ldl">YOUR BMI</label>
			   	</div>
			    <div class="col-75">
			       	<?php
						$height = $_GET["height"]/100;
						$weight = $_GET["weight"];
						$bmi = $weight / ($height * $height);
						echo number_format($bmi, 2);
					?>
			    </div>
			</div>
			<div class="row" style="font-size: 40px; color: green;">
			    <?php
					if ($bmi < 18.5) {
						echo "<p style='font-size: 40px; color: #515151; text-shadow: 2px 3px #c9c9c9;'>Underweight</p>";
					}elseif ($bmi >= 18.5 and $bmi < 23.5 ) {
						echo "<p style='font-size: 40px; color: #40B46B; text-shadow: 2px 3px #c9c9c9;'>Healthy</p>";
					}elseif ($bmi >= 23.5 and $bmi < 28.5 ) {
						echo "<p style='font-size: 40px; color: #FFDB19; text-shadow: 2px 3px #c9c9c9;'>Overweight</p>";
					}elseif ($bmi >= 28.5 and $bmi < 35.0 ) {
						echo "<p style='font-size: 40px; color: #FF0000; text-shadow: 2px 3px #c9c9c9;'>Obesity Level 1</p>";
					}elseif ($bmi >= 35.0 and $bmi < 40.0) {
						echo "<p style='font-size: 40px; color: #C1272D; text-shadow: 2px 3px #c9c9c9;'>Obesity Level 2</p>";
					}elseif ($bmi >= 40.0) {
						echo "<p style='font-size: 40px; color: #9B1003; text-shadow: 2px 3px #c9c9c9;'>Obesity Level 3</p>";
					}
				?>
			</div>
		</div>
	</div>

</body>
</html>