<?php if(!$statusUpdated){ ?>
	
<?php echo $this->Html->script('jquery/plugins/jquery.validate.js?v=1', array('inline' => true)); ?>
<script>
$(document).ready(function(){
	
	var validator = $("#jobUpdateForm").validate({
        rules: {
            "data[Ops][updated_by]":{
            	required: true,
            },
            "data[Ops][who_requested]":{
            	required: true,
            	minlength:5,
                maxlength:255
            },
            "data[Ops][ignore_time]":{
                required: true,
                minlength:1,
                maxlength:255
            },
            "data[Ops][why]":{
                required: true,
                minlength:5,
                maxlength:255
            }
            
        },
        messages: {
        },
        submitHandler : function(form){
            form.submit();
        }
    });
});
</script>
<div class="col-sm-3 text-left">
	
	<?php echo $this->Form->create("Ops", array("method" => "POST", "action" => "/editjobstatus?jobEntry=$jobEntry", "id" => "jobUpdateForm" ) ); ?>
		
	  <div class="form-group">
	    <label for="OpsUpdatedBy">Your Name: </label>
	    <?php echo $this->Form->input("updated_by", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required", "error" => false));?>
	  </div>
	  <div class="form-group">
		    <label >Job Entry:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Entry']; ?>
	  </div>
	  <div class="form-group">
		    <label >Server Name:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Server_Name']; ?>
	  </div>
             
	  <div class="form-group">
		    <label >Job Name:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Name']; ?>
	  </div>
	  
	  <div class="form-group">
		    <label >Job Schedule Start Day:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Schedule_Start_Day']; ?>
	  </div>
	  
	  <div class="form-group">
		    <label >Job Schedule Actual Start time:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Schedule_Start_Time']; ?>
	  </div>
	  
	  <div class="form-group">
		    <label >ob Schedule Actual End time:</label> 
		    <?php echo $jobResultData['BatchJobsStatusData']['Job_Actual_End_Time']; ?>
	  </div>
	  <label>Comments:</label> 
	  <div class="form-group">
		    <label for="OpsWhoRequested">Who requested :</label> 
		    <?php echo $this->Form->input("who_requested", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required", "error" => false));?>
	  </div>
	  
	  <div class="form-group">    
		    <label for="OpsIgnoreTime">How Long will be Ignored:</label> 
		    <?php echo $this->Form->input("ignore_time", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required", "error" => false));?>
	  </div>
	  
	  <div class="form-group">
		    <label for="OpsWhy">Why:</label> 
		    <?php echo $this->Form->input("why", array("label"=> false, "maxlength" =>"100", "div" =>false, "class"=>"form-control required", "error" => false));?>
	  </div>
		
	  <button type="submit" class="btn btn-default">Submit</button>
	<?php echo $this->Form->end();?>
</div>

<?php } else{ ?>
	
<div class="col-sm-3 text-left"> Request Accepted </div>

<script>
$(document).ready(function(){
	$('#myModal', window.parent.document).modal('hide');
});
</script>
<?php } ?>
