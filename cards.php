<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
  <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" href="cardstyle.css">

    <div class="section">
        
        <div class="container">
       
        
            <?php
            require 'dbconfig.php';
            $query = "SELECT * FROM namejobs";
            $query_run = mysqli_query($connection, $query);
            $check_job = mysqli_num_rows($query_run) > 0;

            if($check_job)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                   <!--  <div class="card">
                <div class="imgBx">
                    <div class="img">
                        <img src=" Pngtree.png">  
                        <h2 class="card-title"> Job-<?php echo $row['name']; ?> </h2>
                        <h2 class="card-title">Position- <?php echo $row['position']; ?> </h2>
                        <h2 class="card-title">CTC- <?php echo $row['ctc']; ?> </h2>
                        <p class="card-text"> 
                            <h2 class="card-title"> <?php echo $row['discription']; ?> </h2>
                        </p>
                    </div>
                </div>
                <div class="content">
                    
                   
                    <a href="#">Apply Now</a>
                </div>
            </div>-->
               
            <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo $row['png']; ?>" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3"><?php echo $row['name']; ?></h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>india</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $row['ctc']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="cardsdetail.php">Show More</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                </div>
                            </div>
                    

                     <?php
                    // echo $row['name'];
                }

            }
            else{

                echo "No job found";

            }
            ?>
           
        
    </div>
    
</div>