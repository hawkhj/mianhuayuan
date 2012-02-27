<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
		<legend><?php __('Admin Edit Image'); ?></legend>
	<?php
		echo $this->Form->input('ImageId');
		echo $this->Form->input('Name');
		echo $this->Form->input('URL');
		echo $this->Form->input('Status');
		echo $this->Form->input('ProductionID');
		echo $this->Form->input('AddDate');
		echo $this->Form->input('AddUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Image.ImageId')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Image.ImageId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
	</ul>
</div>