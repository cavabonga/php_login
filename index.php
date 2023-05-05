<?php include('includes\header.php'); ?>
<?php include('includes\footer.php');  ?>

        <?php 
        
            if(isset($_GET['msg'])){
                echo "<h4>".$_GET['msg']."</h4>";
            }
        
        ?>

        <form class="form" action="includes\login_process.php" method="post">
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" name="uname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-success">
            </div>
        </form>
