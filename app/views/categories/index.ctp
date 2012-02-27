<div class="categories index">
	<h2><?php __('Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('CategoryId');?></th>
			<th><?php echo $this->Paginator->sort('CategoryName');?></th>
			<th><?php echo $this->Paginator->sort('ParentId');?></th>
			<th><?php echo $this->Paginator->sort('Order');?></th>
			<th><?php echo $this->Paginator->sort('Permission');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($categories as $category):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $category['Category']['CategoryId']; ?>&nbsp;</td>
		<td><?php echo $category['Category']['CategoryName']; ?>&nbsp;</td>
		<td><?php echo $category['Category']['ParentId']; ?>&nbsp;</td>
		<td><?php echo $category['Category']['Order']; ?>&nbsp;</td>
		<td><?php echo $category['Category']['Permission']; ?>&nbsp;</td>
		<td><?php echo $category['Category']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $category['Category']['CategoryId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $category['Category']['CategoryId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $category['Category']['CategoryId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $category['Category']['CategoryId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Category', true), array('action' => 'add')); ?></li>
	</ul>
</div>