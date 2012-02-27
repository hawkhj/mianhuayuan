<?php
/*
 * Created on Sep 2, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>


<h1>我的邮件列表</h1>
<table>
	<tr>
		<th>Id</th>
		<th>主题</th>
		<th>发信人</th>
		<th>发信时间</th>
	</tr>



	<?php foreach ($mails as $mail): ?>
	<tr>
		<td><?php echo $mail['Mail']['Id']; ?></td>
		<td>
			<?php echo $this->Html->link($mail['Mail']['Subject'], 
array('controller' => 'mails', 'action' => 'view', $mail['Mail']['Id'])); ?>
		</td>
		<td><?php echo $mail['Mail']['From']; ?></td>
		<td><?php echo $mail['Mail']['SendDate']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>
