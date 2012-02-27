<?php
/*
 * Created on Sep 2, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!-- File: /app/views/posts/index.ctp -->

<h1>Blog posts</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Actions</th>
		<th>Created</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'], 
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td><?php echo $this->Html->link('Delete', array('action' => 'delete', $post['Post']['id']), null, 'Are you sure?')?>
		| <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']), null)?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>
<?php echo
$this->element('helpbox', 
    array("helptext" => "Oh, this text is very helpful."));
?>
123
<?php echo $this->element('helpbox'); ?>
