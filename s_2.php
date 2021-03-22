<?php include 'base.php' ?>


<?php require 'common.php'; ?>
<?php


	$tid_query="SELECT * from waiting";
	$select_tid_result=mysqli_query($con,$tid_query);
	$tid_row_fetch=mysqli_num_rows($select_tid_result);
	
	?>
     
	<div class="container">

 <div class="row text-left">
 <div > <h2> Ongoing </h2>
   <?php $row=mysqli_fetch_array($select_tid_result) ?>
   
 <div class="col-md-3 col-md-6">
 <div class="thumbnail">
  <div class="caption"><h6> customer_id : -  <?php echo $row['cust_id'] ?> </h4>
  <?php 
  $sq = "delete from waiting where cust_id = 'bhaibhai' ";
  $select_td_result= mysqli_query($con,$sq);
  
  ?>
  
  </div>
  
  <a href="#"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-block"> Ride Now</a>
 
 
 </div>
 </div>
 
 <br><br><br><br><br><br><br><br>
 
 
 </div>
 
 <br><br><br>
 

  </div> 