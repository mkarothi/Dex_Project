<?php

App::uses('AppController', 'Controller');
class ApplicationmonitorController extends AppController {
	function beforeFilter(){
		$this->layout = "applicationmonitor";
	}
	
	function index(){
		$this->loadModel('ApplicationMonitoringStatus');
		
		$jobResultData = $this->ApplicationMonitoringStatus->find('all', array("conditions" => array('ApplicationMonitoringStatus.Latest_Check_Time > DATE_SUB(NOW(), INTERVAL 24 HOUR) ' ), 
																	   "order" => "Latest_Check_Time desc" ) );
		$this->set('jobResultData',  $jobResultData);
	}
	
	function appconfigurations(){
		$this->loadModel('ApplicationMonitoringConfig');
		
		$jobResultData = $this->ApplicationMonitoringConfig->find('all'); //, array("order" => "Created_On desc" )
		$this->set('jobResultData',  $jobResultData);
	}
	
	function restartserver($configID){
	   $this->autoRender = false;
	   $this->log("restartserver Start");
	   try{
          	exec("<FILE_WITH_PATH> " .$configID );
		  $result['status'] = 1;
		  $result['message'] = "Restart initiated";
	   } catch(Exception $e){
   		  $result['status'] = 0;
		  $result['message'] = $e->getMessage();
                 $this->log("restartserver has error - ". $e->getMessage());
           }
	   echo json_encode($result);
	   exit;
	}
	  
}



?>
