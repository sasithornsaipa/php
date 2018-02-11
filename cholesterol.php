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

		.cholesterol{
			padding-top: 50px;
			padding-left: 31%;
		    box-sizing: border-box;
		    max-width: 1050px;
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
		    width: 40%;
		    margin-top: 6px;
		}

		.col-75 {
		    float: left;
		    width: 60%;
		    margin-top: 10px;
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
	  <button class="dropbtn" id="bnt">Cholesterol</button>
	  <div class="dropdown-content">
	    <a href="index.php#bmi">BMI</a>
	    <a href="index.php#bmr">BMR</a>
	    <a href="index.php#cholesterol">Cholesterol</a>
	  </div>
	</div> 
	<?php
		$ldl = $_GET["ldl"];
		$hdl = $_GET["hdl"];
		$triglyceride = $_GET["triglyceride"];
		$total = $ldl + $hdl + ($triglyceride/5);
	?>

	<div class="cholesterol" id="cholesterol">
		<div class="container">
			<div class="row">
			    <div class="col-25">
			        <label for="ldl">Your Low Density Lipoprotein (LDL)</label>
			   	</div>
			    <div class="col-75">
			    	<?php
				    	if ($ldl < 100) {
							echo "<p style='font-size: 20px; color: #40B46B; text-shadow: 2px 3px #c9c9c9;'>Idea</p>";
						}elseif ($ldl >= 100 and $ldl < 130) {
							echo "<p style='font-size: 20px; color: #FF9A00; text-shadow: 2px 3px #c9c9c9;'>Near Optimal</p>";
						}elseif ($ldl >= 130 and $ldl < 160 ) {
							echo "<p style='font-size: 20px; color: #FF0000; text-shadow: 2px 3px #c9c9c9;'>Borderline</p>";
						}elseif ($ldl >= 160 and $ldl < 190 ) {
							echo "<p style='font-size: 20px; color: #C1272D; text-shadow: 2px 3px #c9c9c9;'>High</p>";
						}elseif ($ldl >= 190) {
							echo "<p style='font-size: 20px; color: #9B1003; text-shadow: 2px 3px #c9c9c9;'>Severely High</p>";
						}
					?>
			    </div>
			</div>
			<div class="row">
			    <div class="col-25">
			        <label for="hdl">Your High Density Lipoprotein (HDL)</label>
			   	</div>
			    <div class="col-75">
			    	<?php
				    	if ($hdl >= 60) {
							echo "<p style='font-size: 20px; color: #40B46B; text-shadow: 2px 3px #c9c9c9;'>Good</p>";
						}elseif ($hdl <= 59 and $hdl >= 41) {
							echo "<p style='font-size: 20px; color: #FF9A00; text-shadow: 2px 3px #c9c9c9;'>Borderline</p>";
						}elseif ($hdl <= 40) {
							echo "<p style='font-size: 20px; color: #FF0000; text-shadow: 2px 3px #c9c9c9;'>High Risk</p>";
						}
					?>
			    </div>
			</div>
			<div class="row">
			    <div class="col-25">
			        <label for="triglyceride">Your Triglyceride</label>
			   	</div>
			    <div class="col-75">
			    	<?php
				    	if ($triglyceride <= 150) {
							echo "<p style='font-size: 20px; color: #40B46B; text-shadow: 2px 3px #c9c9c9;'>Idea</p>";
						}elseif ($triglyceride >= 150 and $triglyceride < 200) {
							echo "<p style='font-size: 20px; color: #FF9A00; text-shadow: 2px 3px #c9c9c9;'>Elevated</p>";
						}elseif ($triglyceride >= 200 and $triglyceride < 500 ) {
							echo "<p style='font-size: 20px; color: #FF0000; text-shadow: 2px 3px #c9c9c9;'>High</p>";
						}elseif ($triglyceride >= 500) {
							echo "<p style='font-size: 20px; color: #C1272D; text-shadow: 2px 3px #c9c9c9;'>Extremely High</p>";
						}
					?>
			    </div>
			</div>
			<div class="row">
			    <div class="col-25">
			        <label for="ldl">YOUR TOTAL CHOLESTOROL</label>
			   	</div>
			    <div class="col-75" style="margin-top: 25px;">
			       	<?php
						echo "$total mg/dL";
					?>
			    </div>
			</div>
			<div class="row" style="font-size: 40px; color: green;">
			    <?php
					if ($total < 200) {
						echo "<p style='font-size: 40px; color: #40B46B; text-shadow: 2px 3px #c9c9c9;'>Idea</p>";
					}elseif ($total >= 200 and $total < 240 ) {
						echo "<p style='font-size: 40px; color: #FF9A00; text-shadow: 2px 3px #c9c9c9;'>Elevated</p>";
					}elseif ($total >= 240) {
						echo "<p style='font-size: 40px; color: #FF0000; text-shadow: 2px 3px #c9c9c9;'>High</p>";
					}
				?>
			</div>
		</div>
	</div>

</body>
</html>