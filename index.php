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
		    display: none;
		}

		.bmr{
			padding-top: 50px;
			padding-left: 28%;
		    box-sizing: border-box;
		    max-width: 1100px;
		    display: none;
		}

		.cholesterol{
			padding-top: 50px;
			padding-left: 38%;
		    box-sizing: border-box;
		    max-width: 950px;
		    display: none;
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
		    width: 25%;
		    margin-top: 6px;
		}

		.cholesterol .col-25 {
		    float: left;
		    width: 32%;
		    margin-top: 6px;
		}

		.col-75 {
		    float: left;
		    width: 60%;
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

		.radiobutton {
		    display: block;
		    position: relative;
		    padding-left: 35px;
		    padding-top: 0px;
		    cursor: pointer;
		    font-size: 16px;
		    -webkit-user-select: none;
		    -moz-user-select: none;
		    -ms-user-select: none;
		    user-select: none;
		    display: inline;
		}

		.radiobutton input {
		    position: absolute;
		    opacity: 0;
		    cursor: pointer;
		}

		.checkmark {
		    position: absolute;
		    top: 0;
		    left: 0;
		    height: 20px;
		    width: 20px;
		    background-color: white;
		    border-radius: 50%;
		}

		.radiobutton:hover input ~ .checkmark {
		    background-color: #ccc;
		}

		.radiobutton input:checked ~ .checkmark {
		    background-color: #66b2b2;
		}

		.checkmark:after {
		    content: "";
		    position: absolute;
		    display: none;
		}

		.radiobutton input:checked ~ .checkmark:after {
		    display: block;
		}

		.radiobutton .checkmark:after {
		 	top: 5px;
			left: 5px;
			width: 10px;
			height: 10px;
			border-radius: 50%;
			background: white;
		}

	</style>

</head>
<body>
	<div class="header">Health Care</div>

	<div class="dropdown">
		<button class="dropbtn" id="bnt">Calculator</button>
		  	<div class="dropdown-content">
		    	<a href="#bmi" onclick="showbmi()">BMI</a>
		    	<a href="#bmr" onclick="showbmr()">BMR</a>
		    	<a href="#cholesterol" onclick="showcholesterol()">Cholesterol</a>
		</div>
	</div> 

	<div class="bmi" id="bmi">
		<div class="container">
		  	<form method="get" action="bmi.php">
		    	<div class="row">
		      		<div class="col-25">
		        		<label for="height">Height (cm.)</label>
		      		</div>
		      		<div class="col-75">
		        		<input type="text" id="height" name="height" placeholder="Your height..">
		     		</div>
		    	</div>
			    <div class="row">
			      	<div class="col-25">
			        	<label for="weight">weight (kg.)</label>
			      	</div>
			      	<div class="col-75">
			        	<input type="text" id="weight" name="weight" placeholder="Your weight..">
			      	</div>
			    </div>
			    <div class="row">
			      	<input type="submit" value="Submit">
			    </div>
		  	</form>
		</div>
	</div>

	<div class="bmr" id="bmr">
		<div class="container">
		  	<form method="get" action="bmr.php">
		  		<div class="row">
		      		<div class="col-25">
		        		<label for="sex">Sex</label>
		      		</div>
		      		<div class="col-75">
		        		<label class="radiobutton">Male
		          		<input type="radio" checked="checked" name="radio" value="male">
		          		<span class="checkmark"></span>
		        		</label>
		       			<label class="radiobutton">Female
				        <input type="radio" name="radio" value="female">
				        <span class="checkmark"></span>
		        		</label>
		     		 </div>
		    	</div>
		    	<div class="row">
		      		<div class="col-25">
		        		<label for="height">Height (cm.)</label>
		      		</div>
				    <div class="col-75">
				       	<input type="text" id="height" name="height" placeholder="Your height..">
				    </div>
		    	</div>
		    	<div class="row">
		      		<div class="col-25">
		        		<label for="weight">Weight (kg.)</label>
		      		</div>
		      		<div class="col-75">
		        		<input type="text" id="weight" name="weight" placeholder="Your weight..">
		      		</div>
		    	</div>
			    <div class="row">
				    <div class="col-25">
				    	<label for="age">Age (year)</label>
				    </div>
				    <div class="col-75">
				    	<input type="text" id="age" name="age" placeholder="Your age..">
				    </div>
			    </div>
			    <div class="row">
			      	<div class="col-25">
			        	<label for="exercise">Exercise</label>
			      	</div>
			      	<div class="col-75">
			        	<select id="exercise" name="exercise">
				      		<option value="1.2">Never</option>
				      		<option value="1.375">1-3 days/week</option>
				      		<option value="1.55">3-5 days/week</option>
				            <option value="1.725">5-7 days/week</option>
				            <option value="1.9">Always</option>
			    		</select>
			      	</div>
			    </div>
		    	<div class="row">
		      		<input type="submit" value="Submit">
		    	</div>
		  	</form>
		</div>
	</div>

	<div class="cholesterol" id="cholesterol">
		<div class="container">
			<form method="get" action="cholesterol.php">
			    <div class="row">
			    	<div class="col-25">
			        	<label for="ldl">LDL (mg/dL)</label>
			      	</div>
			      	<div class="col-75">
			        	<input type="text" id="ldl" name="ldl" placeholder="Your LDL range..">
			      	</div>
			    </div>
			    <div class="row">
			      	<div class="col-25">
			        	<label for="hdl">HDL (mg/dL)</label>
			      	</div>
			      	<div class="col-75">
			        	<input type="text" id="hdl" name="hdl" placeholder="Your HDL range..">
			      	</div>
			    </div>
	            <div class="row">
			      	<div class="col-25">
			        	<label for="triglyceride">Triglyceride (mg/dL)</label>
			      	</div>
			      	<div class="col-75">
			        	<input type="text" id="triglyceride" name="triglyceride" placeholder="Your triglyceride range..">
			      	</div>
			    </div>
			    <div class="row">
			      	<input type="submit" value="Submit">
			    </div>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		function showbmi() {
			document.getElementById("bmi").style.display = "block";
			document.getElementById("bmr").style.display = "none";
			document.getElementById("cholesterol").style.display = "none";
			document.getElementById("bnt").innerHTML = "BMI";
		}
		function showbmr() {
			document.getElementById("bmi").style.display = "none";
			document.getElementById("bmr").style.display = "block";
			document.getElementById("cholesterol").style.display = "none";
			document.getElementById("bnt").innerHTML = "BMR";
		}
		function showcholesterol() {
			document.getElementById("bmi").style.display = "none";
			document.getElementById("bmr").style.display = "none";
			document.getElementById("cholesterol").style.display = "block";
			document.getElementById("bnt").innerHTML = "Cholesterol";
		}
	</script>

</body>
</html>