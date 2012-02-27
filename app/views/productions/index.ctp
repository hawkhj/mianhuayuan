<div class="productions index">
	<h2><?php __('Productions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id');?></th>
			<th><?php echo $this->Paginator->sort('CategoryId');?></th>
			<th><?php echo $this->Paginator->sort('ItemName');?></th>
			<th><?php echo $this->Paginator->sort('ArtNo');?></th>
			<th><?php echo $this->Paginator->sort('Material');?></th>
			<th><?php echo $this->Paginator->sort('Type');?></th>
			<th><?php echo $this->Paginator->sort('Yarn');?></th>
			<th><?php echo $this->Paginator->sort('Density');?></th>
			<th><?php echo $this->Paginator->sort('WeightPerSquareMeter');?></th>
			<th><?php echo $this->Paginator->sort('Filling');?></th>
			<th><?php echo $this->Paginator->sort('WeightPerPiece');?></th>
			<th><?php echo $this->Paginator->sort('Size');?></th>
			<th><?php echo $this->Paginator->sort('Shape');?></th>
			<th><?php echo $this->Paginator->sort('Surface');?></th>
			<th><?php echo $this->Paginator->sort('Thickness');?></th>
			<th><?php echo $this->Paginator->sort('TotalWeight');?></th>
			<th><?php echo $this->Paginator->sort('PileMaterial');?></th>
			<th><?php echo $this->Paginator->sort('PileWeight');?></th>
			<th><?php echo $this->Paginator->sort('BackingMaterial');?></th>
			<th><?php echo $this->Paginator->sort('BackingWeight');?></th>
			<th><?php echo $this->Paginator->sort('Description');?></th>
			<th><?php echo $this->Paginator->sort('AddDate');?></th>
			<th><?php echo $this->Paginator->sort('Quantity');?></th>
			<th><?php echo $this->Paginator->sort('UpdateUser');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($productions as $production):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $production['Production']['Id']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['CategoryId']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['ItemName']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['ArtNo']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Material']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Type']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Yarn']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Density']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['WeightPerSquareMeter']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Filling']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['WeightPerPiece']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Size']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Shape']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Surface']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Thickness']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['TotalWeight']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['PileMaterial']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['PileWeight']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['BackingMaterial']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['BackingWeight']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Description']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['AddDate']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['Quantity']; ?>&nbsp;</td>
		<td><?php echo $production['Production']['UpdateUser']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $production['Production']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $production['Production']['Id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $production['Production']['Id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $production['Production']['Id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Production', true), array('action' => 'add')); ?></li>
	</ul>
</div>