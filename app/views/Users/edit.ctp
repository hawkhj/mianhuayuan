<?php
$where=true;
		if($this->Session->read('Lvl')!='1'){
			$where=false;
		}
?>
<?echo $this->Session->flash();?>
<div class="users" style="<?php if(!$where){echo 'float:left';}?>">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
		
		echo $this->Form->input('Id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		//echo $this->Form->input('Dept');
		
			echo $form->input('Dept', array('type' => 'select' ,'disabled'=>true,
	         'options' => array(
	         0 => '经理',
	         1 => '销售',
	         2 => '采购',
	         3 => '其他'
	         ) ));
		
		//echo $this->Form->input('Lvl');
		echo $form->input('Lvl', array('type' => 'select' ,'disabled'=>true,
         'options' => array(
         0 => '管理员',
         1 => '总经理',
         2 => '部门经理',
         3 => '销售业务员'
         ),'readonly'=>true ));
		//echo $this->Form->input('Status');
		echo $form->input('Status', array('type' => 'select' ,'disabled'=>true,
         'options' => array(
         0 => '离职',
         1 => '在职',
         2 => '停薪留职'
         ) ));
         
		echo $this->Form->input('Mobile');
		echo $this->Form->input('Parent');
		echo $this->Form->input('Email');
		echo $this->Form->input('Other');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
