<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>

<div class="modal fade" id="gallerysection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Gallery Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Caption </label>
                <input type="text" name="caption" class="form-control" placeholder="Enter the Caption of the Gallery" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter a Description" required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="Enter an image" required>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="gallerybtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Gallery's 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gallerysection">
       Add a Gallery
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
            $query = "SELECT * FROM gallery";
            $query_run = mysqli_query($connection, $query); 
            ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Caption</th>
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
                                <td><?php  echo $row['caption']; ?></td>
                                <td><?php  echo $row['description']; ?></td>
                                <!-- <td>  //echo $row['image']; </td> -->
                                <td><?php echo'<img src="../images/'.$row['image'].'"width="100px;" height="100px;" alt="Image">' ?></td>
                                <td>
                                    <form action="gallery_edit.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn_gall" class="btn btn-danger"> DELETE</button>
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