<?php 
    session_start();

    session_unset();
    session_destroy();
    setcookie("username", "", time()-86400);
    setcookie('userid', "", time() + 86400);
    header("Location: index.php?done")
?>
