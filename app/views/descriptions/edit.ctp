<div class="descriptions form">
<?php echo $this->Form->create('Description');?>
	<fieldset>
		<legend><?php __('Edit Description'); ?></legend>
	<?php
		echo $this->Form->input('DescId');
		echo $this->Form->input('CustomerId');
		echo $this->Form->input('PriceTerm');
		echo $this->Form->input('PayCadition');
		echo $this->Form->input('LessOrMorePercent');
		echo $this->Form->input('Bank');
		echo $this->Form->input('Express');
		echo $this->Form->input('Account');
		echo $this->Form->input('Requir');
		echo $this->Form->input('AddDate');
		echo $this->Form->input('AddUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Description.DescId')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Description.DescId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Descriptions', true), array('action' => 'index'));?></li>
	</ul>
</div>