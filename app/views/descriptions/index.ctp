<div class="descriptions index">
	<h2><?php __('Descriptions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('DescId');?></th>
			<th><?php echo $this->Paginator->sort('CustomerId');?></th>
			<th><?php echo $this->Paginator->sort('PriceTerm');?></th>
			<th><?php echo $this->Paginator->sort('PayCadition');?></th>
			<th><?php echo $this->Paginator->sort('LessOrMorePercent');?></th>
			<th><?php echo $this->Paginator->sort('Bank');?></th>
			<th><?php echo $this->Paginator->sort('Express');?></th>
			<th><?php echo $this->Paginator->sort('Account');?></th>
			<th><?php echo $this->Paginator->sort('Requir');?></th>
			<th><?php echo $this->Paginator->sort('AddDate');?></th>
			<th><?php echo $this->Paginator->sort('AddUser');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($descriptions as $description):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $description['Description']['DescId']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['CustomerId']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['PriceTerm']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['PayCadition']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['LessOrMorePercent']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['Bank']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['Express']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['Account']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['Requir']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['AddDate']; ?>&nbsp;</td>
		<td><?php echo $description['Description']['AddUser']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $description['Description']['DescId'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $description['Description']['DescId'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $description['Description']['DescId']), null, sprintf(__('Are you sure you want to delete # %s?', true), $description['Description']['DescId'])); ?>
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
		<li><?php echo $this->Html->link(__('New Description', true), array('action' => 'add')); ?></li>
	</ul>
</div>