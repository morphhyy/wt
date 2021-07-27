<?php 
    session_start();
    include_once 'db.inc.php';

    // if(isset($_POST['register'])){
        if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
            echo "Sorry cant let that happen<br>";
            print_r($_POST);
        } else {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            
            $sql = "INSERT INTO users(username, password, email)
                    VALUES(?,?,?);";
            
            //Prepare a statement
            $stmt = $conn->prepare($sql);
            //bind the param
            $stmt->bind_param('sss', $username, $password_hash, $email);
            //execute the statement
            $result = $stmt->execute();

            if($result){
                header("Location: index.php?register=sucessfull");
            }else{
                echo "Failed.. Try again!";
            }

        }
?>



