<div class="customers">
	<h2><?php __('客户管理');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>操作员</th>
			<th>一般客户数</th>
			<th>重要客户数</th>
			<th>往来邮件数</th>
			
	</tr>
	<?php
	
	$i = 0;
	foreach ($rows as $row):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $row['name']; ?>&nbsp;</td>
		
		<td><?php echo $row['c1']; ?>&nbsp;</td>
		<td><?php echo $row['c0']; ?>&nbsp;</td>
		<td><?php echo $row['mn']; ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>
	
</div>
