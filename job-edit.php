<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php include('indexnavbar.php'); ?>

   

        


   <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Jobs Edit
                            <a href="index2.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                           if(isset($_GET['id']))
                           {
                               $name_job = mysqli_real_escape_string($con, $_GET['id']);
                               $query = "SELECT * FROM namejobs WHERE name='$name_job' ";
                               $query_run = mysqli_query($con, $query);
   
                               if(mysqli_num_rows($query_run) > 0)
                               {
                                   $job = mysqli_fetch_array($query_run);
                                
                                   ?>
                                
                                  
                                   <form action="code.php" method="POST">
                                   <input type="hidden" name="name_job" value="<?=  $job['id']; ?>">

                                    <div class="mb-3">
                                       <label>Company Name</label>
                                       <input type="text" name="name" value="<?=$job['name'];?>" class="form-control">
                                     </div>
                                    <div class="mb-3">
                                       <label>Position</label>
                                      <input type="text" name="position" value="<?=$job['position'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>CTC</label>
                                      <input type="text" name="ctc"  value="<?=$job['ctc'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>Job Discription</label>
                                      <input type="text" name="discription"  value="<?=$job['discription'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>Responsibility</label>
                                      <input type="text" name="responsibility"  value="<?=$job['responsibility'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>Qualifications</label>
                                      <input type="text" name="qualifications"  value="<?=$job['qualifications'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                      <label>png</label>
                                      <input type="file" name="png" class="form-control">
                                   </div>
                                    <div class="mb-3">
                                       <button type="submit" name="update_job" class="btn btn-primary">Update Job</button>
                                       <a name="CURD TABLE" href="adminhome3.php" class="btn btn-primary">Back</a>
                            
                                    </div>

                                    </form>
                                    <?php
                                }
                             
                                
                                else
                                {
                                 echo "<h4>No Such Job Found</h4>";
                                }
                            }
                             
                             
                            
                         
                                   ?>
                            
                </div>
            </div>
        </div>
    </div>
                
                    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>