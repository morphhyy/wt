<?php 
    include_once 'db.inc.php';
    session_start();
    if(isset($_POST['delete'])){
        $id = $_SESSION['userid'];
        $sql = "DELETE FROM users where id = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        if($stmt->execute()){
            $sql = "DELETE FROM image WHERE userid=?;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $id);
            if($stmt->execute()){
                setcookie('userid', $_SESSION['userid'], time() - 1);
                setcookie('username', $_SESSION['username'], time() - 1);
                session_unset();
                session_destroy();
                header("Location: index.php?profile=delete");
            }
        }else{
            echo "Failed!";
        }  
    }
?>