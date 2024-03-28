<?php
// include('security.php');
session_start();
include("includes/header.php");
include("includes/navbar.php");
?>

<div class="modal fade" id="tournamentsection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Tournament Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter the title of the tournament" required>
            </div>
            <div class="form-group">
                <label>date</label>
                <input type="date" name="date" class="form-control" placeholder="Enter the  date">
                <small class="error_date" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>time</label>
                <input type="time" name="time" class="form-control" placeholder="Enter the time" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter a Description" required>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="tournamentbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">OUR TOURNAMENTS
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tournamentsection">
       Add a Tournament
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
            $query = "SELECT * FROM tournaments";
            $query_run = mysqli_query($connection, $query); 
            ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Description</th>
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
                                <td><?php  echo $row['date']; ?></td>
                                <td><?php  echo $row['time']; ?></td>
                                <td><?php  echo $row['description']; ?></td>
                                <td>
                                    <form action="tournaments_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="tour_edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn_tour" class="btn btn-danger"> DELETE</button>
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