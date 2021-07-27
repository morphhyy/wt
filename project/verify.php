<?php 
    include_once 'db.inc.php';
    session_start();

    if(isset($_GET["reg-username"])){
        // put code of usernname here
        $username = mysqli_real_escape_string($conn, $_GET['reg-username']);
        $sql = "SELECT * FROM users where username=?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        $count = $result->num_rows;

        if($count !== 0){
            echo "already exists";
        }
    }else if (isset($_GET["reg-email"])){
        // put code of email here
        $email = mysqli_real_escape_string($conn, $_GET['reg-email']);
        $sql = "SELECT * FROM users where email=?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $count = $result->num_rows;

        if($count !== 0){
            echo "already exists";
        }
    } else {
        echo "";
    }


    if(isset($_GET['username']) && isset($_GET['password'])){
        $username = mysqli_real_escape_string($conn, $_GET['username']);
        $password = mysqli_real_escape_string($conn, $_GET['password']);

        $sql = "SELECT * FROM users where username = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        $rowCount = $result->num_rows;

        if($rowCount == 0){
            echo 'invalid username';
        } else {
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            setcookie('userid', $_SESSION['userid'], time() + 86400);
            setcookie('username', $_SESSION['username'], time() + 86400);
            echo "correct";
            }else{
                echo "invalid password";
            }
            
        }
    }


    if(isset($_GET['u']) && isset($_GET['p']) && isset($_GET['e'])){
        $id = $_SESSION['userid'];
        $username = mysqli_real_escape_string($conn, $_GET['u']);
        $password = mysqli_real_escape_string($conn, $_GET['p']);
        $email = mysqli_real_escape_string($conn, $_GET['e']);

        $sql = "SELECT * FROM users where id = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])){
            //check for username
            $sql = "SELECT * FROM users WHERE username = ? AND username != ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ss', $username, $row['username']);
            $stmt->execute();
            $result = $stmt->get_result();
            // var_dump($result);
            $count = $result->num_rows;
            if($count !== 0){
                echo "username exist";
            }else{
                $sql = "SELECT * FROM users WHERE email = ? AND email != ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $email, $row['email']);
                $stmt->execute();
                $result = $stmt->get_result();
                $count = $result->num_rows;
                if($count !== 0){
                    echo "email exist";
                }else{
                    $sql = "UPDATE users SET username = ? , email = ? WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('ssi', $username, $email, $id);
                    $status = $stmt->execute();
                  
                    if($status){
                        unset($_SESSION['username']);        
                        setcookie('username', $username, time() + 86400);
                        $_SESSION['username'] = $username;
                        echo "correct";
                    }else{
                        echo($conn->error);
                    }
                }
            }
        }else{
            echo "incorrect";
        }
    }



?>