<div class="expresses index">
	<h2><?php __('Expresses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ExpressId');?></th>
			<th><?php echo $this->Paginator->sort('CustomerId');?></th>
			<th><?php echo $this->Paginator->sort('Port');?></th>
			<th><?php echo $this->Paginator->sort('CompName');?></th>
			<th><?php echo $this->Paginator->sort('ContactName');?></th>
			<th><?php echo $this->Paginator->sort('Email');?></th>
			<th><?php echo $this->Paginator->sort('MSN');?></th>
			<th><?php echo $this->Paginator->sort('SKYPE');?></th>
			<th><?php echo $this->Paginator->sort('Mobile');?></th>
			<th><?php echo $this->Paginator->sort('Phone');?></th>
			<th><?php echo $this->Paginator->sort('Fax');?></th>
			<th><?php echo $this->Paginator->sort('AddDate');?></th>
			<th><?php echo $this->Paginator->sort('AddUser');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($expresses as $express):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $express['Express']['ExpressId']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['CustomerId']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['Port']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['CompName']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['ContactName']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['Email']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['MSN']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['SKYPE']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['Mobile']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['Phone']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['Fax']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['AddDate']; ?>&nbsp;</td>
		<td><?php echo $express['Express']['AddUser']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $express['Express']['ExpressId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $express['Express']['ExpressId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $express['Express']['ExpressId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $express['Express']['ExpressId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Express', true), array('action' => 'add')); ?></li>
	</ul>
</div>