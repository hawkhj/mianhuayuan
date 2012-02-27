<div class="customers form">
<?php echo $this->Form->create('Customer');?>
	<fieldset>
		<legend><?php __('Admin Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('CustomerId');
		echo $this->Form->input('CustomerType');
		echo $this->Form->input('Country');
		echo $this->Form->input('CompName');
		echo $this->Form->input('CompURL');
		echo $this->Form->input('CompContact');
		echo $this->Form->input('Email');
		echo $this->Form->input('MSN');
		echo $this->Form->input('SKYPE');
		echo $this->Form->input('Mobile');
		echo $this->Form->input('Phone');
		echo $this->Form->input('Fax');
		echo $this->Form->input('Address');
		echo $this->Form->input('Source');
		echo $this->Form->input('Production');
		echo $this->Form->input('PortAndBelong');
		echo $this->Form->input('StartTime');
		echo $this->Form->input('Type');
		echo $this->Form->input('Permission');
		echo $this->Form->input('AddDate');
		echo $this->Form->input('AddUser');
		echo $this->Form->input('UpdateDate');
		echo $this->Form->input('UpdateUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Customer.Id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Customer.Id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('action' => 'index'));?></li>
	</ul>
</div>