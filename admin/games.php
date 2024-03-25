<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Game Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter the title of the game" required>
            </div>
            <div class="form-group">
                <label>Release date</label>
                <input type="text" name="release_date" class="form-control" placeholder="Enter the release date">
                <small class="error_date" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" name="genre" class="form-control" placeholder="Enter the gendre" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter a Description" required>
            </div>
            <div class="form-group">
                <label>image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Enter an image" required>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="gamebtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">OUR GAMES
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add a Game
</button>
        </h6>
</div>

<div class="card-body">
    <div class ="table-responsive">
        <?php if(isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo '<h2 bg-primary text-white>'.$_SESSION['success'].'</h2>' ; 
            unset($_SESSION['success']) ; 
        }

        if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<h2 class="bg-info text-white">'.$_SESSION['status'].'</h2>' ; 
            unset($_SESSION['status']) ; 
        }
            ?>
            <?php
            $connection = mysqli_connect("localhost" , "root" , "" , "f_g_club") ;
            $query = "SELECT * FROM games";
            $query_run = mysqli_query($connection, $query); 
            ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>Release Date</th>
                    <th>Gendre</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thread>
            <tbody>
            <?php
                if(mysqli_num_rows($query_run) > 0)        
                        {
                    while($row = mysqli_fetch_assoc($query_run))
                        {
            ?>
                <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['title']; ?></td>
                                <td><?php  echo $row['release_date']; ?></td>
                                <td><?php  echo $row['genre']; ?></td>
                                <td><?php  echo $row['description']; ?></td>
                                <!-- <td>  //echo $row['image']; </td> -->
                                <td><?php echo'<img src="../images/'.$row['image'].'"width="100px;" height="100px;" alt="Image">' ?></td>
                                <td>
                                    <form action="games_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn_gam" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>
    </div>
</div>
</div>
</div>
 
<?php 
include('includes/script.php') ;
// include('includes/footer.php') ;  
?>