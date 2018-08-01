<?php if(!$statusUpdated){ ?>

<div class="col-sm-3 text-left">
	
	<?php echo $this->Form->create("Ops", array("method" => "POST", "action" => "/editjobstatus?jobEntry=$jobEntry" ) ); ?>
		
	  <div class="form-group">
	    <label for="pwd">Your Name: </label>
	    <?php echo $this->Form->input("updated_by", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required"));?>
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
		    <?php echo $this->Form->input("who_requested", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required"));?>
		    
		    <label for="email">How Long will be Ignored:</label> 
		    <?php echo $this->Form->input("ignore_time", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required"));?>
		    
		    <label for="email">Why:</label> 
		    <?php echo $this->Form->input("why", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required"));?>
	  </div>
		
	  <button type="submit" class="btn btn-default">Submit</button>
	<?php echo $this->Form->end();?>
</div>

<?php } else{ ?>
	
<div class="col-sm-3 text-left"> Request Accepted </div>
<?php } ?>