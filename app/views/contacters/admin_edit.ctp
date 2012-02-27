<div class="contacters form">
<?php echo $this->Form->create('Contacter');?>
	<fieldset>
		<legend><?php __('Admin Edit Contacter'); ?></legend>
	<?php
		echo $this->Form->input('ContacterId');
		echo $this->Form->input('CustomerId');
		echo $this->Form->input('ContactName');
		echo $this->Form->input('Email');
		echo $this->Form->input('MSN');
		echo $this->Form->input('SKYPE');
		echo $this->Form->input('Mobile');
		echo $this->Form->input('Phone');
		echo $this->Form->input('Fax');
		echo $this->Form->input('Address');
		echo $this->Form->input('Job');
		echo $this->Form->input('AddDate');
		echo $this->Form->input('AddUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Contacter.ContacterId')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Contacter.ContacterId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contacters', true), array('action' => 'index'));?></li>
	</ul>
</div>