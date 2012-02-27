<div class="productions form">
<?php echo $this->Form->create('Production');?>
	<fieldset>
		<legend><?php __('Edit Production'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('CategoryId');
		echo $this->Form->input('ItemName');
		echo $this->Form->input('ArtNo');
		echo $this->Form->input('Material');
		echo $this->Form->input('Type');
		echo $this->Form->input('Yarn');
		echo $this->Form->input('Density');
		echo $this->Form->input('WeightPerSquareMeter');
		echo $this->Form->input('Filling');
		echo $this->Form->input('WeightPerPiece');
		echo $this->Form->input('Size');
		echo $this->Form->input('Shape');
		echo $this->Form->input('Surface');
		echo $this->Form->input('Thickness');
		echo $this->Form->input('TotalWeight');
		echo $this->Form->input('PileMaterial');
		echo $this->Form->input('PileWeight');
		echo $this->Form->input('BackingMaterial');
		echo $this->Form->input('BackingWeight');
		echo $this->Form->input('Description');
		echo $this->Form->input('AddDate');
		echo $this->Form->input('Quantity');
		echo $this->Form->input('UpdateUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Production.Id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Production.Id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Productions', true), array('action' => 'index'));?></li>
	</ul>
</div>