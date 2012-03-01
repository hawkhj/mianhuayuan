<?php
class funtionsComponent  extends Object {
   var $name = 'funtions'; // the name of your component
   function buildtree($rows_data,$id,$cc)
	{
		$users = ClassRegistry::init('User');        
		$customers = ClassRegistry::init('Customer');
		$mails = ClassRegistry::init('Mail');
		$us = $users->find('all',array('conditions'=>'Parent='.$id));
		$cc=$cc."-";
		foreach($us as $user)
		{
			$u_name = $user['User']['username'];
			$c1=array();
			$c1=$customers->find('all',array(
			'conditions'=>array(
				'Permission' => $user['User']['Id'],
				'CustomerType'=>1
								)));
			$c0=array();
			$c0=$customers->find('all',array(
			'conditions'=>array(
				'Permission' => $user['User']['Id'],
				'CustomerType'=> 0
								)));
			$mn=0;
			$mn= count($mails->find('all',
				array(
					'conditions'=>array(
					'PopMailBox'=>$user['User']['Email']
						)
			)
			));
			array_push($rows_data,array('name'=>$cc.$u_name,'c1'=>count($c1),'c0'=>count($c0),'mn'=>$mn));
			$rows_data = $this->buildtree($rows_data,$user['User']['Id'],$cc);
		}
		return $rows_data;
	}
}
?>
