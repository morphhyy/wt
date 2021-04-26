<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../css/style.css'>
    <title>Document</title>

</head>
<body>
<form action="register.php" method="POST" name='gedey'>
    <div>
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname">

        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname">
    </div>
<br>

    <div>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email">
    </div>
<br>
    <div>
        <label for="psw">Password: </label>
        <input type="password" id="psw" name="psw"> 

        <label for="rpsw">Re-type Password: </label>
        <input type="password" id="rpsw" name="rpsw">
        <p class='error' style='display: none'></p>       
    </div>
    <span id='message'></span>
<br>
    <div>
    <label for="gender">Gender: </label>
    <input type="radio" name="gender" id="gender">Male
    <input type="radio" name="gender" id="female">Female
    </div>
<br>
    <div>
        <label for="dob">Date Of Birth: </label>
        <input type="date" id="dob" name="dob">
    </div>
<br>
    <div>
    <input type="checkbox">
    <label>I agree with the terms and condition</label>
    </div>
<br>
<button>Submit</button>
</form>
</body>
<script src="../js/register.js"></script>
</html>