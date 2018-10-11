<?php session_start(); ?>

<?php

    $_SESSION['username'] = null;
    $_SESSION['userID'] = null;

    header("Location: ../index.php");

?>
