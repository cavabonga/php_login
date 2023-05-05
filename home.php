<?php include('includes\header.php'); ?>
<?php session_start(); ?>

<?php 

    if(isset($_SESSION['uname'])){
        echo "<h2>Hello ".$_SESSION['uname']."</h2>";
    } else{
        header('location: index.php?msg=You need to login');
    }
?>

<a href="includes\logout_process.php" class="btn btn-secondary">Logout</a>

<?php include('includes\footer.php'); ?>