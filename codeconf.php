<?php
session_start();
require 'db_con.php';

if(isset($_POST['delete_job']))
{
    $name_job = mysqli_real_escape_string($con, $_POST['delete_job']);

    $query = "DELETE FROM student_list WHERE id='$name_job' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Job Deleted Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Job Not Deleted";
        header("Location: index2.php");
        exit(0);
    }
}

if(isset($_POST['update_job']))
{
    $name_job = mysqli_real_escape_string($con, $_POST['name_job']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $port_website = mysqli_real_escape_string($con, $_POST['port_website']);
    $resume = mysqli_real_escape_string($con, $_POST['resume']);
    $coverletter = mysqli_real_escape_string($con, $_POST['coverletter']);

    $query = "UPDATE student_list SET name='$name', email='$email', port_website='$port_website', resume='$resume', coverletter='$coverletter' WHERE id='$name_job' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Job Updated Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Job Not Updated";
        header("Location: index2.php");
        exit(0);
    }

}


if(isset($_POST['post_job']))
{ 
     $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $port_website = mysqli_real_escape_string($con, $_POST['port_website']);
    $resume = mysqli_real_escape_string($con, $_POST['resume']);
    $coverletter = mysqli_real_escape_string($con, $_POST['coverletter']);

    $query = "INSERT INTO student_list (name,email,port_website,resume,coverletter) VALUES ('$name','$email','$port_website','$resume','$coverletter')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: job-detailconf.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: job-detail.php");
        exit(0);
    }
}

?>