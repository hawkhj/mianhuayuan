<div class="customers form">
<?php echo $this->Form->create('Customer');?>
	<fieldset>
		<legend><?php __('Edit Customer'); ?></legend>
	<?php
		//echo $this->Form->input('Id');
		echo $this->Form->input('CustomerId',array('label'=>'客户ID'));
		//echo $this->Form->input('CustomerType');
		echo $this->Form->input('CustomerType', array('label'=>'客户类型','type' => 'select' ,
         'options' => array(
         0 => '重要客户',
         1 => '一般客户'
         ) ));
		echo $this->Form->input('Country');
		echo $this->Form->input('CompName',array('label'=>'公司名称'));
		echo $this->Form->input('CompURL',array('label'=>'公司网址'));
		echo $this->Form->input('CompContact',array('label'=>'公司联络人'));
		echo $this->Form->input('Email');
		echo $this->Form->input('MSN');
		echo $this->Form->input('SKYPE');
		echo $this->Form->input('Mobile');
		echo $this->Form->input('Phone');
		echo $this->Form->input('Fax');
		echo $this->Form->input('Address');
		echo $this->Form->input('Source');
		echo $this->Form->input('Production');
		echo $this->Form->input('PortAndBelong',array('label'=>'到货港口及所属国家'));
		echo $this->Form->input('StartTime',array('label'=>'开始时间','type' => 'text'));
		echo $this->Form->input('Type',array('type'=>'hidden','value'=>'0'));
		//echo $this->Form->input('Permission');
		//echo $this->Form->input('AddDate');
		//echo $this->Form->input('AddUser');
		//echo $this->Form->input('UpdateDate');
		//echo $this->Form->input('UpdateUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customers', true), array('action' => 'index'));?></li>
	</ul>
</div>