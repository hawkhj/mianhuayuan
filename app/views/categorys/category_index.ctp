<?php
/*
 * Created on 2011-11-9
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Order</th>
		<th>Actions</th>
		<th>Created</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($Category as $Categorys): ?>
	<tr>
		<td><?php echo $Category['Category']['CategoryId']; ?></td>
		<td>
			<?php echo $Category['Category']['CategoryName']; ?>
		</td>
		<td>
			<?php echo $Category['Category']['Order']; ?>
		</td>
		<td><?php echo $this->Html->link('Delete', array('action' => 'delete', $post['Category']['CategoryId']), null, 'Are you sure?')?>
		| <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Category']['CategoryName']), null)?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>