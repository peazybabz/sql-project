<?php include 'db.php'; ?>

<?php session_start(); ?>

<?php

    if (isset($_POST['login'])) {
      // code...
      $username =  $_POST['username'];
      $password = $_POST['password'];

      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);

      $query = "SELECT * FROM users WHERE password = '{$password}'";

      $select_user_query = mysqli_query($connection, $query);

      if(!$select_user_query){
        die("Query Failed!!". mysqli_error($connection));
      }

      while($row = mysqli_fetch_array($select_user_query)){
        $db_user_id = $row['userID'];
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_user_role = $row['user_role'];
      }

      if($username !== $db_username || $password!== $db_password){
        header("Location: ../index.php");
      } else if ($username == $db_username && $password == $db_password &&
    $db_user_role!=='admin') {

        $_SESSION['username'] = $db_username;
        $_SESSION['userID'] = $db_user_id;
        $_SESSION['user_role'] = $db_user_role;
        $_SESSION['email'] = $db_user_email;
        //$_SESSION['cart'] = array();

        header("Location: ../user/index.php");
      } else if ($username == $db_username && $password == $db_password && $db_user_role == 'admin') {

        $_SESSION['username'] = $db_username;
        $_SESSION['userID'] = $db_user_id;
        $_SESSION['user_role'] = $db_user_role;
        $_SESSION['email'] = $db_user_email;
        //$_SESSION['cart'] = array();

        header("Location: ../admin/index.php");
      }else {
        header("Location: ../index.php");
      }
    }


 ?>
