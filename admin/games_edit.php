<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Edit a Game </h6>
</div>

<div class="card-body">
<?php
    $connection= mysqli_connect("localhost","root","","f_g_club");
 if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $id = $_POST['edit_id'] ; 

    $query = "SELECT * FROM games WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    foreach($query_run as $row){
        ?>
        <form action="code.php" method="POST" enctype="multipart/form-data">



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
                <label>Release date</label>
                <input type="text" name="edit_release_date" value="<?php echo $row['release_date'] ?>" class="form-control " placeholder="Enter the release date">
            </div>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" name="edit_genre" value="<?php echo $row['genre'] ?>" class="form-control" placeholder="Enter the Gender">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="edit_description" value="<?php echo $row['description'] ?>" class="form-control" placeholder="Enter a Description">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="edit_image" value="<?php echo $row['image'] ?>" class="form-control" placeholder="Enter a Image">
            </div>
            <div>
                <a href="games.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="updatebtn_gam" class="btn btn-primary">UPDATE</button>
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