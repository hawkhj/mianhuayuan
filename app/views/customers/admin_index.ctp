<div class="customers index">
	<h2><?php __('Customers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id');?></th>
			<th><?php echo $this->Paginator->sort('CustomerId');?></th>
			<th><?php echo $this->Paginator->sort('CustomerType');?></th>
			<th><?php echo $this->Paginator->sort('Country');?></th>
			<th><?php echo $this->Paginator->sort('CompName');?></th>
			<th><?php echo $this->Paginator->sort('CompURL');?></th>
			<th><?php echo $this->Paginator->sort('CompContact');?></th>
			<th><?php echo $this->Paginator->sort('Email');?></th>
			<th><?php echo $this->Paginator->sort('MSN');?></th>
			<th><?php echo $this->Paginator->sort('SKYPE');?></th>
			<th><?php echo $this->Paginator->sort('Mobile');?></th>
			<th><?php echo $this->Paginator->sort('Phone');?></th>
			<th><?php echo $this->Paginator->sort('Fax');?></th>
			<th><?php echo $this->Paginator->sort('Address');?></th>
			<th><?php echo $this->Paginator->sort('Source');?></th>
			<th><?php echo $this->Paginator->sort('Production');?></th>
			<th><?php echo $this->Paginator->sort('PortAndBelong');?></th>
			<th><?php echo $this->Paginator->sort('StartTime');?></th>
			<th><?php echo $this->Paginator->sort('Type');?></th>
			<th><?php echo $this->Paginator->sort('Permission');?></th>
			<th><?php echo $this->Paginator->sort('AddDate');?></th>
			<th><?php echo $this->Paginator->sort('AddUser');?></th>
			<th><?php echo $this->Paginator->sort('UpdateDate');?></th>
			<th><?php echo $this->Paginator->sort('UpdateUser');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($customers as $customer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $customer['Customer']['Id']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['CustomerId']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['CustomerType']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Country']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['CompName']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['CompURL']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['CompContact']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Email']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['MSN']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['SKYPE']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Mobile']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Phone']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Fax']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Address']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Source']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Production']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['PortAndBelong']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['StartTime']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Type']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Permission']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['AddDate']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['AddUser']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['UpdateDate']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['UpdateUser']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $customer['Customer']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $customer['Customer']['Id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $customer['Customer']['Id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['Id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer', true), array('action' => 'add')); ?></li>
	</ul>
</div>