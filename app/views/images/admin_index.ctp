<div class="images index">
	<h2><?php __('Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ImageId');?></th>
			<th><?php echo $this->Paginator->sort('Name');?></th>
			<th><?php echo $this->Paginator->sort('URL');?></th>
			<th><?php echo $this->Paginator->sort('Status');?></th>
			<th><?php echo $this->Paginator->sort('ProductionID');?></th>
			<th><?php echo $this->Paginator->sort('AddDate');?></th>
			<th><?php echo $this->Paginator->sort('AddUser');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($images as $image):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $image['Image']['ImageId']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['Name']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['URL']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['Status']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['ProductionID']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['AddDate']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['AddUser']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $image['Image']['ImageId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $image['Image']['ImageId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $image['Image']['ImageId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['ImageId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Image', true), array('action' => 'add')); ?></li>
	</ul>
</div>