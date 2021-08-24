<?php
    include 'require.php';
    session_start();

        if(isset($_GET['token']))
        {
           $token=$_GET['token']; 
           $numrows="UPDATE User SET status='active' WHERE token='$token'";
           $query=mysqli_query($connect,$numrows);

            if($query)
            {
                if(isset($_SESSION['msg'])){
                    $_SESSION['msg']="Your email is successfully verified";
                    header('location:portfoliosignin.php');
                }
                else
                {
                        $_SESSION['msg']="You are logged out.";
                        header('location:portfoliosignin.php');
                }
            }
        }
        else
        {
            $_SESSION['msg']="Account not updated.";
            header('location:portfoliosignup.php');
        }

?>