<div class="customers">
<?php echo $this->Form->create('Customer',array('enctype'=>'multipart/form-data'));?>
<?php echo $this->Form->file('File',array('label'=>'文件'));?>

<?php echo $this->Form->end(__('save', true));?>
</div>
