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

		.bmr{
			padding-top: 50px;
			padding-left: 27%;
		    box-sizing: border-box;
		    max-width: 1100px;
		    display: block;
		}

		input[type=text], select, textarea{
		    width: 100%;
		    padding: 12px;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		    resize: vertical;
		}

		label {
		    padding: 12px 12px 12px 0;
		    display: inline-block;
		}

		input[type=submit] {
		    background-color: #66b2b2;
		    color: white;
		    padding: 12px 20px;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		    float: right;
		}

		input[type=submit]:hover {
		    background-color: #b2d8d8;
		}

		.container {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		}

		.col-25 {
		    float: left;
		    width: 55%;
		    margin-top: 6px;
		}

		.col-75 {
		    float: left;
		    width: 35%;
		    margin-top: 18px;
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
	  <button class="dropbtn" id="bnt">BMR</button>
	  <div class="dropdown-content">
	    <a href="index.php#bmi">BMI</a>
	    <a href="index.php#bmr">BMR</a>
	    <a href="index.php#cholesterol">Cholesterol</a>
	  </div>
	</div> 

	<div class="bmr" id="bmr">
		<div class="container">
			<div class="row">
			    <div class="col-25">
			        <label for="ldl">Your Basal Metabolic Rate (BMR)</label>
			   	</div>
			    <div class="col-75">
			       	<?php
			       		$sex = $_GET["radio"];
						$height = $_GET["height"];
						$weight = $_GET["weight"];
						$age = $_GET["age"];
						$exercise = $_GET["exercise"];
						if ($sex == "male") {
							$bmr = 66 + (13.7*$weight) + (5*$height) - (6.8*$age);
						}else{
							$bmr = 665 + (9.6*$weight) + (1.8*$height) - (4.7*$age);
						}
						echo "$bmr Kilocalories";
					?>
			    </div>
			</div>
			<div class="row">
			    <div class="col-25">
			        <label for="ldl">Your Total Daily Energy Expenditure (TDEE)</label>
			   	</div>
			    <div class="col-75">
			       	<?php
						$tdee = $bmr * $exercise;
						echo "$tdee Kilocalories";
					?>
			    </div>
			</div>
		</div>
	</div>
</body>
</html>