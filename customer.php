
<?php include 'base.php' ?>
<?php
include 'common.php';
 ?>

<div class="container">
        <div class="row">
            <div class="col s6 offset-s3 z-depth-1" id="panell" style="margin-top: 60px;padding: 0px;">
                <h5 id="title" style="background-color: #009688;color: white;padding: 8px;margin-top: 0px">Enter Customer Id</h5>
                <form id="ride-now" method="post" action="customer_script.php" style="padding:0px;border-radius: 3px;box-sizing: border-box;">
                    <div class="form-group">
                         <input type="text" class="form-control" id="name" name="name" placeholder="Enter customer ID" required> 
				   </div>
                    <button class="btn waves-effect waves-light" type="submit" style="float: right;margin-bottom: 10px;margin-right: 10px;">Ride Now
                        <i class="material-icons right">send</i>
                    </button>
                </form>
                <br>
            </div>
        </div>

    </div>