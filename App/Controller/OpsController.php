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
	}
	
	function jobschedules(){
		$this->loadModel('BatchJobsSchedules');
		
		$jobResultData = $this->BatchJobsSchedules->find('all', array("order" => "Created_On desc" ) );
		$this->set('jobResultData',  $jobResultData);
	}
	
	function jobreport(){
		$this->loadModel('BatchJobsStatusData');
		
		$jobResultData = $this->BatchJobsStatusData->find('all', array("conditions" => array('BatchJobsStatusData.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 24 HOUR)', 'Job_latest_status != ' => 'Success' ), 
																	   "order" => "Latest_Check_Time desc" ) );
		$this->set('jobResultData',  $jobResultData);
	}
  
}



?>
