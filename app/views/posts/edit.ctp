<?php
/*
 * Created on Sep 2, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!-- File: /app/views/posts/edit.ctp -->
	
<h1>Edit Post</h1>
<?php
	echo $this->Form->create('Post', array('action' => 'edit'));
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->input('id', array('type' => 'hidden')); 
	echo $this->Form->end('Save Post');
?>
