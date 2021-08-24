<?php
      //Connection to database
      include 'require.php';

      //Session start
      session_start();
      $email=$_SESSION['email'];
      $sql="Delete from User where Email='$email'";
      mysqli_query($connect,$sql);

      //Session destroy
        session_destroy();
        header('location:home.php');


?>