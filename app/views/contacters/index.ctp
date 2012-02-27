<div class="contacters index">
	<h2><?php __('Contacters');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('ContacterId');?></th>
			<th><?php echo $this->Paginator->sort('CustomerId');?></th>
			<th><?php echo $this->Paginator->sort('ContactName');?></th>
			<th><?php echo $this->Paginator->sort('Email');?></th>
			<th><?php echo $this->Paginator->sort('MSN');?></th>
			<th><?php echo $this->Paginator->sort('SKYPE');?></th>
			<th><?php echo $this->Paginator->sort('Mobile');?></th>
			<th><?php echo $this->Paginator->sort('Phone');?></th>
			<th><?php echo $this->Paginator->sort('Fax');?></th>
			<th><?php echo $this->Paginator->sort('Address');?></th>
			<th><?php echo $this->Paginator->sort('Job');?></th>
			<th><?php echo $this->Paginator->sort('AddDate');?></th>
			<th><?php echo $this->Paginator->sort('AddUser');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($contacters as $contacter):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $contacter['Contacter']['ContacterId']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['CustomerId']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['ContactName']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['Email']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['MSN']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['SKYPE']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['Mobile']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['Phone']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['Fax']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['Address']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['Job']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['AddDate']; ?>&nbsp;</td>
		<td><?php echo $contacter['Contacter']['AddUser']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $contacter['Contacter']['ContacterId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $contacter['Contacter']['ContacterId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $contacter['Contacter']['ContacterId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contacter['Contacter']['ContacterId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contacter', true), array('action' => 'add')); ?></li>
	</ul>
</div>