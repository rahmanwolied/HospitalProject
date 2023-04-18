<?php
    session_start();
    session_unset();
    session_destroy();
    echo 1;
    header('Location: index.php');
?>