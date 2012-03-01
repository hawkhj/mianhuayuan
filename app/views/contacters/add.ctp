
<div class="contacters form">
<?php echo $this->Form->create('Contacter');?>
	<fieldset>
		<legend><?php __('Add Contacter'); ?></legend>
	<?php
		echo $this->Form->hidden('CustomerId',array('value'=>$id,'readonly'=>'true'));
		echo $this->Form->input('ContactName');
		echo $this->Form->input('Email');
		echo $this->Form->input('MSN');
		echo $this->Form->input('SKYPE');
		echo $this->Form->input('Mobile');
		echo $this->Form->input('Phone');
		echo $this->Form->input('Fax');
		echo $this->Form->input('Address');
		echo $this->Form->input('Job');
		//echo $this->Form->input('AddDate');
		//echo $this->Form->input('AddUser');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><a href="#" onclick="history.go(-1);return false;">返回</a></li>
	</ul>
</div>