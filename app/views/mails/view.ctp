<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>>发送者</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mail['Mail']['From']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>To</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mail['Mail']['RecipientsString']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>CC</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mail['Mail']['CC']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>内容</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $mail['Mail']['HTMLBody']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>>原始邮件</dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<a href="/mails/downsmail/<?php echo $mail['Mail']['Id']?>" target="_blank">下载</a>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Reply', true), array('action' => 'reply', $mail['Mail']['Id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Reply ALL', true), array('action' => 'replyall', $mail['Mail']['Id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Forward', true), array('action' => 'forward')); ?> </li>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete')); ?> </li>
	</ul>
</div>
