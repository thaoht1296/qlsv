<?php

    session_start();
    $_SESSION = array();
    session_destroy();
    header("location: index.php");
    setcookie("logout", "Bạn đã đăng xuất khỏi DH!", time()-86400, "/","", 0);
    exit;
?>

