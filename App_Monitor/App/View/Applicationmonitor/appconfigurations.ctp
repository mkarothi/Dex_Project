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
	  	</tr></thead>
	  	<tbody id="myTable">
	  	<?php foreach($jobResultData as $jobResult){ ?>
	  		<tr>
		  	<?php foreach($jobResult['ApplicationMonitoringConfig'] as $columnName => $value){ ?>
  				<td><?php echo $value;?></td>
		  	<?php } ?>
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
</script>
