<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Edit Admin Profile</h6>
</div>

<div class="card-body">
<?php
    $connection= mysqli_connect("localhost","root","","f_g_club");
 if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $id = $_POST['edit_id'] ; 

    $query = "SELECT * FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row){
        ?>
        <form action="code.php" method="POST">



        <?php if(isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo '<h2>'.$_SESSION['success'].'</h2>' ; 
            unset($_SESSION['success']) ; 
        }

        if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>' ; 
            unset($_SESSION['status']) ; 
        }
            ?>



            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            </div>
            <div>
                <a href="register.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
            <?php
    }
}
?>


















<?php 
include('includes/script.php') ;
// include('includes/footer.php') ;  
?>