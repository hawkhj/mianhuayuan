<div class="users index">
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('Dept');?></th>
			<th><?php echo $this->Paginator->sort('Lvl');?></th>
			<th><?php echo $this->Paginator->sort('Status');?></th>
			<th><?php echo $this->Paginator->sort('Mobile');?></th>
			<th><?php echo $this->Paginator->sort('Parent');?></th>
			<th><?php echo $this->Paginator->sort('Email');?></th>
			<th><?php echo $this->Paginator->sort('Other');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['Id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['Dept']; ?>&nbsp;</td>
		<td><?php echo $this->DataUtil->getLvlName($user['User']['Lvl']);//  ?>&nbsp;</td>
		<td><?php echo $this->DataUtil->getStatusName($user['User']['Status']);?>&nbsp;</td>
		<td><?php echo $user['User']['Mobile']; ?>&nbsp;</td>
		<td><?php echo $parents[$user['User']['Parent']]; ?>&nbsp;</td>
		<td><?php echo $user['User']['Email']; ?>&nbsp;</td>
		<td><?php echo $user['User']['Other']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $user['User']['Id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $user['User']['Id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['Id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?></li>
	</ul>
</div>