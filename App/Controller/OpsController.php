<?php

App::uses('AppController', 'Controller');
class OpsController extends AppController {
	function beforeFilter(){
		$this->layout = "ops";
	}
	
	function index(){
		$this->loadModel('BatchJobsStatusData');
		
		$jobResultData = $this->BatchJobsStatusData->find('all', array("conditions" => array('BatchJobsStatusData.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 24 HOUR) ' ), 
																	   "order" => "Latest_Check_Time desc" ) );
		$this->set('jobResultData',  $jobResultData);
		if(isset($_POST['export']) && $_POST['export'] == 'export'){
			$this->exportsheet($jobResultData, 'BatchJobsStatusData');
		}
	}
	
	function jobschedules(){
		$this->loadModel('BatchJobsSchedules');
		
		$jobResultData = $this->BatchJobsSchedules->find('all', array("order" => "Created_On desc" ) );
		$this->set('jobResultData',  $jobResultData);
		if(isset($_POST['export']) && $_POST['export'] == 'export'){
			$this->exportsheet($jobResultData, 'BatchJobsSchedules');
		}
	}
	
	function jobreport(){
		$this->loadModel('BatchJobsStatusData');
		
		$jobResultData = $this->BatchJobsStatusData->find('all', array("conditions" => array('BatchJobsStatusData.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 24 HOUR)', 'Job_latest_status != ' => 'Success' ), 
																	   "order" => "Latest_Check_Time desc" ) );
		$this->set('jobResultData',  $jobResultData);
		
		if(isset($_POST['export']) && $_POST['export'] == 'export'){
			$this->exportsheet($jobResultData, 'BatchJobsStatusData');
		}
	}
	
	function exportsheet($results, $tableName){
		$this->autoRender = FALSE;
		foreach($results[0][$tableName] as $fieldNames => $values){ 
            		$header[] = $fieldNames ;
        	}
        	$rows[] = $header;
        	foreach($results as $result) {
            		$rowValues = array();
            		foreach($result[$tableName] as $values) { 
                		$rowValues[] = $values;
            		}
            		$rows[] = $rowValues;
        	}
        	$exportArray = $rows;
        	$filename = $tableName."_".date("Y-m-d-H-i-s") .".xls";
        	$this->exportresults($exportArray, $filename);
	}
  
}



?>
