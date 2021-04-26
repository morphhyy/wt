<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="text-align:center">

    <h1>Login Page</h1>
    <form action="" method="post">
        <div> 
            <label>
            Email: <input type="text" id="email" name="email">
            </label>
        </div>
<br>
        <div>
            <label>
            Password: <input type="password" id="pwd" name="pwd">
            </label>
        </div>

        <div>
<br>  
        <label>
            <input  id="show_pwd" type="checkbox"> Show Password
        </label>
        </div>
<br>
        <span>
            <input type="checkbox"> Remember me
        </span>
<br><br>
        <button>Login</button>
    </form>

</div>
</body>
<script src="../js/login.js"></script>
</html>