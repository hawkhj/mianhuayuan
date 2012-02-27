<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
		<legend><?php __('Edit Category'); ?></legend>
	<?php
		echo $this->Form->input('CategoryId');
		echo $this->Form->input('CategoryName');
		echo $this->Form->input('ParentId');
		echo $this->Form->input('Order');
		echo $this->Form->input('Permission');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Category.CategoryId')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Category.CategoryId'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>