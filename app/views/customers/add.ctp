<div class="customers form">
<?php echo $this->Form->create('Customer');?>
	<fieldset>
		<legend><?php __('新建客户'); ?></legend>
	<?php
		echo $this->Form->input('CustomerId',array('label'=>'客户ID'));
		//echo $this->Form->input('CustomerType');
		echo $form->input('CustomerType', array('label'=>'客户类型','type' => 'select' ,
         'options' => array(
         0 => '重要客户',
         1 => '一般客户'
         ) ));
		echo $this->Form->input('Country',array('label'=>'国家'));
		echo $this->Form->input('CompName',array('label'=>'公司名称'));
		echo $this->Form->input('CompURL',array('label'=>'公司网址'));
		echo $this->Form->input('CompContact',array('label'=>'公司联系人'));
		echo $this->Form->input('Email',array('label'=>'联系邮箱'));
		echo $this->Form->input('MSN',array('label'=>'MSN'));
		echo $this->Form->input('SKYPE',array('label'=>'SKYPE'));
		echo $this->Form->input('Mobile',array('label'=>'手机'));
		echo $this->Form->input('Phone',array('label'=>'电话'));
		echo $this->Form->input('Fax',array('label'=>'传真'));
		echo $this->Form->input('Address',array('label'=>'地址'));
		echo $this->Form->input('Source',array('label'=>'来源'));
		echo $this->Form->input('Production',array('label'=>'产品'));
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
<?php echo $this->Form->end(__('保存', true));?>
</div>
<div class="actions">
	<h3><?php __('操作'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('列出所有客户', true), array('action' => 'index'));?></li>
	</ul>
</div>