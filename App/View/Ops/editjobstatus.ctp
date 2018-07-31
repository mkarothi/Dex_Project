<?php
// debug($jobResultData);



?>
<div class="col-sm-3 text-left"> 
	<form method="POST">
		
	  <div class="form-group">
	    <label for="pwd">Your Name: </label>
	    <input type="text" class="form-control" name="updated_by">
	  </div>
	  <div class="form-group">
		    <label for="email">Job Entry:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Entry']; ?>
	  </div>
	  <div class="form-group">
		    <label for="email">Server Name:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Server_Name']; ?>
	  </div>
             
	  <div class="form-group">
		    <label for="email">Job Name:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Name']; ?>
	  </div>
	  
	  <div class="form-group">
		    <label for="email">Job Schedule Start Day:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Schedule_Start_Day']; ?>
	  </div>
	  
	  <div class="form-group">
		    <label for="email">Job Schedule Actual Start time:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Schedule_Start_Time']; ?>
	  </div>
	  
	  <div class="form-group">
		    <label for="email">ob Schedule Actual End time:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Actual_End_Time']; ?>
	  </div>
	  <label for="email">Comments:</label> 
	  
	  <div class="form-group">
		    <label for="email">Who requested :</label> 
		    <input type="text" class="form-control" name="comments.who_requested">
		    
		    <label for="email">How Long will be Ignored:</label> 
		    <input type="text" class="form-control" name="comments.ignore_time">
		    
		    <label for="email">Why:</label> 
		    <input type="text" class="form-control" name="comments.why">
	  </div>
		
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>