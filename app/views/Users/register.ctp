<h3>Please fill out the form below to register an account.</h3>
<?php $session->flash() ?>
<?php
    echo $form->create("User",array("action"=>"register","style"=>"width:400px;"));//点击register后提交到users控制器里的action register方法处理
    echo $form->input("username");
    echo $form->input("password");//注意此处的字段要与数据库里的字段一致
    echo $form->select("Dept",array('s' => 'S市场','c' => 'C采购','j' => 'J经理'));
    echo $form->select("Lvl",array('0' => '','1' => '','2' => ''));
    echo $form->input("Mobile");
    echo $form->input("Email");
    echo $form->textarea("Other");
?>
<?php
    echo $form->end("register");
?>	