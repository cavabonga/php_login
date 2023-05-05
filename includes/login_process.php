<?php include('dbcon.php'); ?>
<?php session_start(); ?>

<?php

    if(isset($_POST['login'])){
        $username = $_POST['uname'];
        $email = $_POST['email'];
    }

    $query = "select * from `users` where `username` = '$username' && `email_id` = '$email'";

    $result = mysqli_query($con, $query);

    if(!$result){
        die("Query Failed".mysqli_error());
    } else {
        $row = mysqli_num_rows($result);
        
        if($row == 1){
            $_SESSION['uname'] = $username;
            header('location:..\home.php');
        } else{
            header('location:..\index.php?msg=Sorry your username or email is invalid');
        }
    }

?>