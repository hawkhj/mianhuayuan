<h3>Please fill out the form below to register an account.</h3>
<?php $session->flash() ?>
<?php
    echo $form->create("User",array("action"=>"register","style"=>"width:400px;"));//���register���ύ��users���������action register��������
    echo $form->input("username");
    echo $form->input("password");//ע��˴����ֶ�Ҫ�����ݿ�����ֶ�һ��
    echo $form->select("Dept",array('s' => 'S�г�','c' => 'C�ɹ�','j' => 'J����'));
    echo $form->select("Lvl",array('0' => '','1' => '','2' => ''));
    echo $form->input("Mobile");
    echo $form->input("Email");
    echo $form->textarea("Other");
?>
<?php
    echo $form->end("register");
?>	