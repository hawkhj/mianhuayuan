<h3>请登陆</h3>
<?php
if (isset($error)) {
  echo('<div style="color:red" >UserName Or Password wrong</div>');
}
?>
<?php echo $form->create('User', array('action' => 'login')); ?>

<?php
    echo $form->input('username',array('label'=>'用户名'));
    echo $form->input('password',array('label'=>'密码'));
?>
<?php echo $form->end('登陆');?>
