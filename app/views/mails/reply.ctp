<div class="users" style="width:95%;<?php echo 'float:left';?>;">
<?php echo $this->Form->create('Mail');?>
	<fieldset>
		<legend><?php __('Send Email'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('From',array('value'=>$mail['Mail']['RecipientsString']));
		echo $this->Form->input('RecipientsString',array('value'=>'','rows'=>'2'));
		echo $this->Form->input('CC',array('rows'=>'2'));
		echo $this->Form->input('BCC',array('rows'=>'2'));
		echo $this->Form->input('HTMLBody');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
