<!DOCTYPE html>
<html>
<head>
	<title>Display</title>

<style type="text/css">
	table {
		border-collapse: collapse;
		margin: 20px 40px 40px 40px;
	}

	td, th {
		text-align: center;
		border: 1px solid #000;
		font-size: 20px;
		height: 40px;
		padding:5px 15px 5px 15px;
	}

	th {
		font-size: 30px;
		text-shadow: 1px 1px 5px grey;
	}
</style>

</head>

<body>
	<table>
		<tr>
			<th colspan="4">Personal Information</th>
		</tr>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Date of Birth</th>
			<th>Gender</th>
		</tr>
		<tr>
			<td><?= $_POST['first_name'] ?></td>
			<td><?= $_POST['last_name'] ?></td>
			<td><?= $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'] ?></td>
			<td><?= $_POST['gender'] ?></td>
		</tr>
	</table>

	<table>
		<tr>
			<th colspan="4">Account Information</th>
		</tr>
		<tr>
			<th>Email</th>
			<th>Password</th>
			<th>Security Question</th>
			<th>Security Answer</th>
		</tr>
		<tr>
			<td><?= $_POST['email'] ?></td>
			<td><?= $_POST['password'] ?></td>
			<td><?= $_POST['security_question'] ?></td>
			<td><?= $_POST['security_answer'] ?></td>
		</tr>
	</table>

	<table>
		<tr>
			<th colspan="5">Contact Information</th>
		</tr>
		<tr>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Zip Code</th>
			<th>Phone</th>
		</tr>
		<tr>
			<td><?= $_POST['address'] ?></td>
			<td><?= $_POST['city'] ?></td>
			<td><?= $_POST['state'] ?></td>
			<td><?= $_POST['zip_code'] ?></td>
			<td><?= $_POST['phone'] . " (" . $_POST['p_type'] . ")"?></td>
		</tr>
	</table>
</body>
</html>