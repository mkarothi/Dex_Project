<?php

App::uses('AppController', 'Controller');
class OpsController extends AppController {
	
	// var $uses = array();
	
	function beforeFilter(){
		$this->layout = "ops";
	}
	
	function index(){
		$this->loadModel('BatchJobsStatusData');
		
		$conditions = array('BatchJobsStatusData.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 24 HOUR) ' );
		
		if(isset($_POST['days']) && $_POST['days'] == 7){
			$conditions = array('BatchJobsStatusData.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 7 DAY) ' );
		}
		
		$jobResultData = $this->BatchJobsStatusData->find('all', array("conditions" => $conditions, 
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
		
		$conditions = array('BatchJobsStatusData.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 24 HOUR) ' );
		
		if(isset($_POST['days']) && $_POST['days'] == 7){
			$conditions = array('BatchJobsStatusData.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 7 DAY) ' );
		}
		
		$conditions['Job_latest_status != '] = 'Success';
		
		$jobResultData = $this->BatchJobsStatusData->find('all', array("conditions" => $conditions, 
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
	
	function editjobstatus($jobEntry = ''){
		debug($_REQUEST['jobEntry']);
		
		debug($this->data);
		debug($_REQUEST);
		
		$updateComments = '';
		
		$this->loadModel('BatchJobsStatusData');
		
		$conditions = array('BatchJobsStatusData.Job_Entry' => $_REQUEST['jobEntry']);
		$jobResultData = $this->BatchJobsStatusData->find('first', array("conditions" => $conditions, 
																	   "order" => "Latest_Check_Time desc" ) );
		$this->set('jobResultData',  $jobResultData);
	}
  
}



?>
