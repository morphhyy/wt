<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

<style type="text/css">
	p {
		position: absolute;
		font-size: 30px;
		font-weight: bold;
		padding: 0px;
		margin: 0px;
		left: 40px;
		word-spacing: 5px;
	}

	.labels {
		position: absolute;
		left: 0px;
		width: 250px;
		text-align: right;
		font-size: 25px;
		line-height: 40px;
		word-spacing: 5px;
	}

	.inputs {
		position: absolute;
		left: 260px;
		width: 430px;
		font-size: 25px;
		line-height: 40px;
		word-spacing: 5px;
	}

	#p2 {
		top:250px;
	}

	#p3 {
		top: 600px;
	}

	.l1 {
		top: 60px;
	}

	.l2 {
		top: 300px;
	}
	.l3 {
		top: 650px;
	}

	input {
		width: 300px;
	}

	#container {
		background-color: #f8f8f8;
		position: absolute;
		top: 20px;
		left: 105px;
		width: 700px; height: 900px;
		border-left: 4px solid grey;
		border-top:2px dotted black;
		border-right: none;
		border-bottom: 3px dotted black;
	}
</style>

</head>

<body>
<div id="container">
<form action="./display.php" method="POST">
	<p id="p1">Personal Information</p>

	<div class="labels l1">
		<label>First Name: </label><br>
		<label>Last Name: </label><br>
		<label>Date of birth: </label><br>
		<label>Gender: </label><br>
	</div>

	<div class="inputs l1">
		<input type="text" name="first_name" id="fname"><br>
		<input type="text" name="last_name" id="lname"><br>
		<select name="day" id="dob" style="width: 95px;">
			<option>Day</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
		
		<select name="month" style="width: 95px;">
			<option>Month</option>
			<option value="01">Jan</option>
			<option value="02">Feb</option>
			<option value="03">Mar</option>
		</select>
		
		<select name="year" style="width: 95px;">
			<option>Year</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
		</select>
		<br>

		<select name="gender" style="width: 300px">
			<option>Choose a gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Others">Others</option>			
		</select>
	</div>

	<p id="p2">Account Information</p>

	<div class="labels l2">
		<label>Email: </label><br>
		<label>Re-type Email: </label><br>
		<label>Password: </label><br>
		<label>Re-type Password: </label><br>
		<label>Security Question: </label><br>
		<label>Security Answer: </label><br>
	</div>

	<div class="inputs l2">
		<input type="email" name="email" id="email"><br>
		<label style="font-size: 12px; position: absolute; top:22px ;">(Your email will be your username)</label>
		<input type="email" name="re_email" id="re_email"><br>
		
		<input type="password" name="password" id="password"><br>
		<label style="font-size: 12px; position: absolute; top:103px ;">(Min 8 characters, 1 number, case-sensitive)</label>
		<input type="password" name="re_password" id="re_password"><br>
		
		<select name="security_question" id="security_question">
			<option>Choose a security question</option>
			<option value="Qn1">Security question 1</option>
			<option value="Qn2">Security question 2</option>
		</select>
		<br>
		<input type="text" name="security_answer" id="security_answer" style="margin-bottom: 0px;"><br>
		<label style="font-size: 12px; position: absolute; top:225px ;">(Not Case Sensitive)</label>

	</div>


	<p id="p3">Contact Information</p>

	<div class="labels l3">
		<label>Address: </label><br>
		<label>City: </label><br>
		<label>State: </label><br>
		<label>Zip Code: </label><br>
		<label>Phone: </label><br>
	</div>

	<div class="inputs l3">
		<input type="text" name="address" id="address"><br>
		<input type="text" name="city" id="city"><br>
		<select name="state">
			<option>Choose an state</option>
			<option>State 1</option>
			<option>State 2</option>
		</select><br>
		<input type="text" name="zip_code"><span style="margin-left:15px; padding:3px; font-size:12px; border:1px dotted black;">Optional</span><br>
		<input type="number" name="phone">
		<select name="p_type" style="width: 95px;">
			<option>Mobile</option>
		</select>
		<br>
		<label style="font-size: 12px; position: absolute; top:187px ;">No spaces or dashes</label>

		<input type="submit" name="submit" value="Submit Details" style="width:150px;">
	</div>
</div>

</form>

</body>
</html>