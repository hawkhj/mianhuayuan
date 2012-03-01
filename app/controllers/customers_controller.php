<?php
App::import('Sanitize');
class CustomersController extends AppController {
	var $uses = array('Customer','User','Mail');
	var $name = 'Customers';
	var $components = array('funtions');
	function index() {
		$this->helpers[] = 'DataUtil';
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate());
	}
	
	function index_first() {
		
		$this->helpers[] = 'DataUtil';
		//$this->Customer->recursive = 0;
		
		
		$us = $this->User->find('all',array('conditions'=>'Id='.$this->Session->read('username')));
		$rows_data = array();
		
		
		$u_name = $us[0]['User']['username'];
		$c1=array();
		$c1=$this->Customer->find('all',array(
		'conditions'=>array(
			'Permission' => $us[0]['User']['Id'],
			'CustomerType'=>1
							)));
		$c0=array();
		$c0=$this->Customer->find('all',array(
		'conditions'=>array(
			'Permission' => $us[0]['User']['Id'],
			'CustomerType'=> 0
							)));
		//$mn=0;
		$mn= count($this->Mail->find('all',
				array(
					'conditions'=>array(
					'PopMailBox'=>$us[0]['User']['Email']
						)
		)
		));
		array_push($rows_data,array('name'=>$u_name,'c1'=>count($c1),'c0'=>count($c0),'mn'=>$mn));
		$rows_data = $this->funtions->buildtree($rows_data,$this->Session->read('username'),"");
//			
//			
//		foreach($us as $user)
//		{
//			$u_name = $user['User']['username'];
//			$c1=array();
//			$c1=$this->Customer->find('all',array(
//			'conditions'=>array(
//				'Permission' => $user['User']['Id'],
//				'CustomerType'=>1
//								)));
//			$c0=array();
//			$c0=$this->Customer->find('all',array(
//			'conditions'=>array(
//				'Permission' => $user['User']['Id'],
//				'CustomerType'=> 0
//								)));
//			$mn=0;
//			
//			array_push($rows_data,array('name'=>$u_name,'c1'=>count($c1),'c0'=>count($c0),'mn'=>$mn));
//			
//		}
		$this->set('rows',$rows_data);
		
	}
	
	function CustImport() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate(array('CustomerType'=>'0')));
	}
	function CustNorm() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate(array('CustomerType'=>'1')));
	}
	function UserAll($uid) {
		$this->helpers[] = 'DataUtil';
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate(array('Permission'=>$uid)));
	}
	function CustFind() {
		$this->helpers[] = 'DataUtil';
		$conditions = array();
		if($this->data['Customer']['CustomerType']!='')
		{
			array_push($conditions,array('CustomerType'=>$this->data['Customer']['CustomerType']));
		}
		
		if($this->data['Customer']['CompName']!='')
		{
			array_push($conditions,array('CompName'=>$this->data['Customer']['CompName']));
		}
		if($this->data['Customer']['CompContact']!='')
		{
			array_push($conditions,array('CompContact'=>$this->data['Customer']['CompContact']));
		}
		if($this->data['Customer']['Email']!='')
		{
			array_push($conditions,array('Email'=>$this->data['Customer']['Email']));
		}
		if($this->data['Customer']['Country']!='')
		{
			array_push($conditions,array('Country'=>$this->data['Customer']['Country']));
		}
		
		$this->set('customers', $this->paginate($conditions));
	}
	
	function view($id = null) {
		$this->helpers[] = 'DataUtil';
		if (!$id) {
			$this->Session->setFlash(__('Invalid customer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customer', $this->Customer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Customer->create();
//			$this->data['Customer']['StartTime'] = 
//            $this->data['Customer']['StartTime']['year'] . "-" . 
//            $this->data['Customer']['StartTime']['month'] . "-" . 
//            $this->data['Customer']['StartTime']['day'] ; 
//Debugger::dump($this->data['Customer']);
			$this->data['Customer']['AddUser']=$this->Session->read('user')."[".$this->Session->read('username')."]";
			$this->data['Customer']['AddDate']=date("Y-m-d H:i:s");
			$this->data['Customer']['UpdateUser']=$this->Session->read('user')."[".$this->Session->read('username')."]";
			$this->data['Customer']['UpdateDate']=date("Y-m-d H:i:s");
			$this->data['Customer']['Permission']=$this->Session->read('username');
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The customer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid customer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Customer']['UpdateUser']=$this->Session->read('user')."[".$this->Session->read('username')."]";
			$this->data['Customer']['UpdateDate']=date("Y-m-d H:i:s");
			$this->data['Customer']['Permission']=$this->Session->read('username');
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The customer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Customer->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for customer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Customer->delete($id)) {
			$this->Session->setFlash(__('Customer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Customer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid customer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customer', $this->Customer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Customer->create();
			$this->data['Customer']['AddUser']=$this->Session->read('user')."[".$this->Session->read('username')."]";
			$this->data['Customer']['AddDate']=date("Y-m-d H:i:s");
			$this->data['Customer']['UpdateUser']=$this->Session->read('username');
			$this->data['Customer']['UpdateDate']=date("Y-m-d H:i:s");
			$this->data['Customer']['Permission']=$this->Session->read('username');
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The customer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid customer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Customer']['UpdateUser']=$this->Session->read('username');
			$this->data['Customer']['UpdateDate']=date("Y-m-d H:i:s");
			$this->data['Customer']['Permission']=$this->Session->read('username');
			if ($this->Customer->save($this->data)) {
				$this->Session->setFlash(__('The customer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Customer->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for customer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Customer->delete($id)) {
			$this->Session->setFlash(__('Customer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Customer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function excel()
	{
		if (!empty ($this->data['Customer']['File']) && is_uploaded_file($this->data['Customer']['File']['tmp_name'])) {
            $this->data['Customer']['File']['data'] = fread(fopen($this->data['Customer']['File']['tmp_name'], "r"), $this->data['Customer']['File']['size']);
			set_time_limit(240);    //4minutes
			ini_set('memory_limit', '64M');
			App::import('Vendor', 'Spreadsheet_Excel_Reader', array('file' => 'excel/reader.php'));
			$data = new Spreadsheet_Excel_Reader();
			// Set output Encoding.
			$data->setOutputEncoding('UTF-8');
			$data->read($this->data['Customer']['File']['tmp_name']);

			$new_data = array();
			$this->Customer->create();
			for($s=0;$s<count( $data->sheets);$s++)
			{
				if($data->sheets[$s]!=null){
					//var_dump($data->sheets[$s]);
					if($data->sheets[$s]['numRows']>0){
						//var_dump(count($data->sheets[$s]['cells']));
						//var_dump($data->sheets[$s]['cells']);
						for($r=2;$r<count($data->sheets[$s]['cells'])+1;$r++)
						{
							if($data->sheets[$s]['cells'][$r]!=null){
								
								$AddUser=$this->Session->read('user')."[".$this->Session->read('username')."]";
								$AddDate=date("Y-m-d H:i:s");
								$UpdateUser=$this->Session->read('user')."[".$this->Session->read('username')."]";
								$UpdateDate=date("Y-m-d H:i:s");
								array_push($new_data,
									array(
										'Country'	=>$data->boundsheets[$s]["name"],
										'CompName'	=>array_key_exists("1",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["1"]:'',
										'CompURL'	=>array_key_exists("7",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["7"]:'',
										'CompContact'=>array_key_exists("2",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["2"]:'',
										'Email'		=>array_key_exists("3",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["3"]:'',
										'MSN'		=>'',
										'SKYPE'		=>'',
										'Mobile'	=>array_key_exists("6",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["6"]:'',
										'Phone'		=>array_key_exists("4",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["4"]:'',
										'Fax'		=>array_key_exists("5",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["5"]:'',
										'Address'	=>array_key_exists("8",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["8"]:'',
										'Source'	=>array_key_exists("11",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["11"]:'',
										'Production'=>array_key_exists("9",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["9"]:'',
										'PortAndBelong'=>'',
										'Permission ' => $this->Session->read('username'),
										'StartTime'	=>array_key_exists("10",$data->sheets[$s]['cells'][$r])?$data->sheets[$s]['cells'][$r]["10"]:'',
										'Type'		=>0,
										'AddUser'	=>$AddUser,
										'AddDate'	=>$AddDate,
										'UpdateUser'=>$UpdateUser,
										'UpdateDate'=>$UpdateDate
									));
							}
						}
					}
				}
			}
			//$save_data=array('Customer'=>$new_data);
			if ($this->Customer->saveAll($new_data)) {
				$this->Session->setFlash(__('The customer has been saved', true));
				//$this->redirect(array('action' => 'index'));
				var_dump($new_data);
			} else {
				$saveflg=false;
				$this->Session->setFlash(__('The customer could not be saved. Please, try again.', true));
			}
		}
	}
}
