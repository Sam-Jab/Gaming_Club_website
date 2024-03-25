<?php
include("security.php");
include("dbconfig.php");
// session_start();    

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}

if(isset($_POST['gamebtn']))
{
    $title = $_POST['title'];
    $release_date = $_POST['release_date'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    $image = $_FILES["image"]['name']; 
      

    $title_query = "SELECT * FROM games WHERE title='$title' ";
    $title_query_run = mysqli_query($connection, $title_query);
    if(mysqli_num_rows($title_query_run) > 0)
    {
        $_SESSION['status'] = "Game Already Exist ";
        $_SESSION['status_code'] = "error";
        header('Location: games.php');  
    }
    else
    {
            $query = "INSERT INTO games (title,release_date,genre,description,image) VALUES ('$title','$release_date','$genre' , '$description' , '$image')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                move_uploaded_file($_FILES["image"]["tmp_name"] , "../images/".$_FILES["image"]["name"]) ; 
                $_SESSION['status'] = "Game is Added";
                $_SESSION['status_code'] = "success";
                header('Location: games.php');
            }
            else 
            {
                $_SESSION['status'] = "Game is Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: games.php');  
            }
        }
        
    }



if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    // $conn = mysqli_connect('localhost','root','','f_g_club');
    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}

if(isset($_POST['updatebtn_gam']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $release_date = $_POST['edit_release_date'];
    $genre = $_POST['edit_genre'];
    $description = $_POST['edit_description'];
    $image = $_FILES["edit_image"]['name'];
    // $conn = mysqli_connect('localhost','root','','f_g_club');
    $query = "UPDATE games SET title='$title', release_date='$release_date', genre='$genre' , description='$description' , image='$image' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["edit_image"]["tmp_name"] , "../images/".$_FILES["edit_image"]["name"]) ; 
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: games.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: games.php'); 
    }
}



if(isset($_POST['delete_btn_reg']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}

if(isset($_POST['delete_btn_gam']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM games WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: games.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: games.php'); 
    }    
}

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
   }
    
}
