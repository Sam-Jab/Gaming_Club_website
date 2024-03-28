<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Edit a Tournamets </h6>
</div>

<div class="card-body">
<?php
    $connection= mysqli_connect("localhost","root","","f_g_club");
 if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $id = $_POST['edit_id'] ; 

    $query = "SELECT * FROM tournaments WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row){
        ?>
        <form action="code.php" method="POST" >



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
                <label> Title </label>
                <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Enter the Title">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="edit_date" value="<?php echo $row['date'] ?>" class="form-control " placeholder="Enter the  date">
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" name="edit_time" value="<?php echo $row['time'] ?>" class="form-control" placeholder="Enter the Time">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="edit_description" value="<?php echo $row['description'] ?>" class="form-control" placeholder="Enter a Description">
            </div>
            
            <div>
                <a href="tournaments.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="updatebtn_tour" class="btn btn-primary">UPDATE</button>
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