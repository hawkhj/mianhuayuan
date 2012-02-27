<div class="customers">
	<h2><?php __('一般联系人');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('序号','Id');?></th>
			<th><?php echo $this->Paginator->sort('客户ID','CustomerId');?></th>
			<th><?php echo $this->Paginator->sort('国家','Country');?></th>
			<th><?php echo $this->Paginator->sort('公司名称','CompName');?></th>
			<!--<th><?php //echo $this->Paginator->sort('CompURL');?></th>-->
			<th><?php echo $this->Paginator->sort('公司联络人','CompContact');?></th>
			<th><?php echo $this->Paginator->sort('联络邮箱','Email');?></th>
			<!--<th><?php //echo $this->Paginator->sort('MSN');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('SKYPE');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('Mobile');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('Phone');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('Fax');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('Address');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('Source');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('Production');?></th>-->
			<!--<th><?php //echo $this->Paginator->sort('PortAndBelong');?></th>-->
			<th><?php echo $this->Paginator->sort('开始时间','StartTime');?></th>
			<!--<th><?php //echo $this->Paginator->sort('Type');?></th>-->
			<?php if($this->Session->read('Lvl')=='0'){?>
			<th><?php echo $this->Paginator->sort('Permission');?></th>
			<th><?php echo $this->Paginator->sort('AddDate');?></th>
			<th><?php echo $this->Paginator->sort('AddUser');?></th>
			<th><?php echo $this->Paginator->sort('UpdateDate');?></th>
			<th><?php echo $this->Paginator->sort('UpdateUser');?></th>
			<?php echo '';}?>
			<th class="actions"><?php __('操作');?></th>
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
		<td><?php echo $customer['Customer']['Country']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['CompName']; ?>&nbsp;</td>
		<!--<td><?php //echo $customer['Customer']['CompURL']; ?>&nbsp;</td>-->
		<td><?php echo $customer['Customer']['CompContact']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['Email']; ?>&nbsp;</td>
		<!--<td><?php //echo $customer['Customer']['MSN']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['SKYPE']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['Mobile']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['Phone']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['Fax']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['Address']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['Source']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['Production']; ?>&nbsp;</td>-->
		<!--<td><?php //echo $customer['Customer']['PortAndBelong']; ?>&nbsp;</td>-->
		<td><?php echo $customer['Customer']['StartTime']; ?>&nbsp;</td>
		<!--<td><?php //echo $customer['Customer']['Type']; ?>&nbsp;</td>-->
		<?php if($this->Session->read('Lvl')=='0'){?>
		<td><?php echo $customer['Customer']['Permission']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['AddDate']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['AddUser']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['UpdateDate']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['UpdateUser']; ?>&nbsp;</td>
		<?php echo '';}?>
		<td class="actions">
			<?php echo $this->Html->link(__('查看', true), array('action' => 'view', $customer['Customer']['Id'])); ?>
			<?php echo $this->Html->link(__('编辑', true), array('action' => 'edit', $customer['Customer']['Id'])); ?>
			<?php echo $this->Html->link(__('查看其他联络人', true), array('controller'=>'contacters','action' => 'index', $customer['Customer']['Id'])); ?>
				<?php ?>
				<?php
				if($this->Session->read('Lvl')=='0'){ 
					echo $this->Html->link(__('删除', true), array('action' => 'delete', $customer['Customer']['Id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['Id'])); 
					
				}?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('页 %page% 共 %pages%, 当前 %current% 记录 总共%count% 记录, 开始于第%start%记录, 结束于 %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>