<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="col-sm-11 text-left">
	<br>
	<input class="form-control" id="myInput" type="text" placeholder="Search...">
	<br>
	<?php if($jobResultData){ ?>
	  	<table class="table table-condensed table-responsive table-bordered">
		 <thead><tr> 		
		<?php foreach($jobResultData[0]['ApplicationMonitoringConfig'] as $columnName => $value){ ?>
	  		<th><?php echo $columnName;?></th>
	  	<?php } ?>
	  	<th>Action</th>
	  	</tr></thead>
	  	<tbody id="myTable">
	  	<?php 
	  	$configId = false;
	  	foreach($jobResultData as $jobResult){ ?>
	  		<tr>
		  	<?php 
		  		$configId = false;
		  		foreach($jobResult['ApplicationMonitoringConfig'] as $columnName => $value){  ?>
  					<td><?php echo $value;?></td>
			  	<?php 
			  		if($columnName == 'Config_ID'){
						$configId = $value; 
			  		}
				} ?>
		  		<td> 
		  			<div id="submit-<?php echo $configId;?>"><input type="button" onclick="restartserver(<?php echo $configId;?>); return false;" value="Restart" /></div>	
	  			</td>
		  	</tr>
	  	<?php } ?>
	  	</tbody>
	  </table>
  <?php } ?>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
  
});
function restartserver(configId){
  	ajaxUrl = "/applicationmonitor/restartserver/"+configId;
  	$.ajax( {
        url : ajaxUrl,
        cache : false,
        dataType:"json",
        success : function (data) {
           $("#submit-"+configId).html('<span style="color:red">'+data.message+'</span>');
        },
        error : function() {
            alert('Restart failed');
        }
    });
}
</script>
