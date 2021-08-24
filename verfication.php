<?php
            include 'require.php';

            // Sql Query
 //      echo $_SESSION['msg'];
            $email=$_POST['email'];
            $numrows="SELECT * from User WHERE Email='$email'";
            $result=(mysqli_query($connect,$numrows));
        // Checking whether data already exist or not
        if($result->num_rows==0)
        {
            // session_start();
            // $_SESSION['msg']="Sorry! Email is already taken";
            header('location:portfoliosignup.php');

            // Inserting values in the database 
            // header('location:portfoliosignup.php');
            // $sql="INSERT INTO `User`.`User` (`First Name`, `Last Name`,`Email`, `School`,`10th %`, `12th %`,`University`, `Graduation Course`,`html`, `css`,`java`, `bootstrap`,`c`, `Password`,`token`,`status`) VALUES ( '$firstname','$lastname','$email', '$school', '$per10', '$per12', '$university', '$graduation', '$html', '$css', '$java', '$bootstrap', '$c', '$encrypt','$token','inactive')"; 

            // if($connect->query($sql))
            // {
        }else{

        }

        // require './libphp-phpmailer/class.phpmailer.php';
        // require './libphp-phpmailer/class.smtp.php';
        // $randomNumber = rand(10000,99999);
        // $mail = new PHPMailer();
        // $mail->setFrom('rakhiresumecreator@gmail.com');
        // $mail->addAddress('fitnessblog223@gmail.com');
        // $mail->Subject = 'Resume Creator OTP';
        // $mail->Body = $randomNumber;

        // $mail->isHTML(true);
        // $mail->AltBody = "Sorry! Something went wrong";
        // $mail->IsSMTP();
        // $mail->SMTPSecure = 'ssl';
        // $mail->Host = 'ssl://smtp.gmail.com';
        // $mail->SMTPAuth = true;
        // $mail->Port = 465;
        // $mail->Username = 'rakhiresumecreator';
        // $mail->Password = 'Aditi@123';
        // if(!$mail->send()) {
        //   echo 'Email is not sent.';
        //   echo 'Email error: ' . $mail->ErrorInfo;
        // }else{
        //     echo "Email sent";
        // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Portfolio Creater</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- CSS -->
<style>
    html, body {
    margin:0px;
    height:100%;
    }
    img
    {
        height: 100%;
        width: 100%;
    }
    .leftPanel
    {
        width: 50%;
    }
    .code
    {
        width: 50%; 
    }
    .whole{
        display: flex;
        position:fixed;

        width: 100%;
        height: 100%;
    }
    .check
    {
        padding-top: 30%;
        padding-left: 20%;
        height: 40%;
    }
    .c{
        position: absolute;
    }
    .another
    {
        display: flex;
        padding-left: 20%;
    }
    p{
        padding-right: 10%;
    }

    button
    {
        background-color:blue;
        color:white;
        padding:8px;
        width:100px;
        border-radius:60px;
        border:2px solid blue;
        margin-left:120px;
        margin-top:10px;
    }
    button:hover
    {
        opacity: 0.5;
    }
    .but
    {
       padding-left:120px;
       margin:10px;
    }
    @media screen and (max-width: 1008px) {
        .check{
            padding-left: 20px;
        }
        .another
        {
            padding-left: 0%;
        }
    }
    @media screen and (max-width: 1018px) {
        .check{
            padding-left: 20px;
        }
        .another
        {
            padding-left: 10%;
        }
    }
    @media screen and (max-width: 645px) {
        #vc
        {
            width: 50%;
        }
    }
    @media screen and (max-width: 920px) {
        .check{
            padding-left: 0%;
        }
        .another
        {
            padding-left: 0%;
        }
    }
    @media screen and (max-width: 581px) {
        button{
            margin-left: 0%;
        }
    }
</style>
</head>
<body>
    <div class="whole">
        <div class="leftPanel">
            <img src="./images/ver.png">
        </div>
        <div class="code">
            <div class="check">
                <div class="alert alert-success c" role="alert">
                    Verfication code has been sent to your registered email
                  </div>
            </div>
            <form action="#" method="post">
                <div class="another">
                    <p>Verification code</p>
                    <input type="text" name="vc" placeholder="Verification Code" required="required">
                </div>
                <button type="submit" name="submit" style="outline: none;">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>