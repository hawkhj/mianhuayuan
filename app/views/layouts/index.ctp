<?php
/*
 * Created on 2011-11-13
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset();?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout;?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo $this->webroot;?>favicon.ico" type="image/x-icon" />
	<?php echo $this->Html->css('cake.generic');?>
	<?php echo $scripts_for_layout;?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">
		<?php $this->Session->flash();?>
		<frameset cols="20%,*"> 
		
		<frame name="head" src="/pages/head"> 
		<frame name="body" src="/pages/index"> 
		</frameset> 
			<?php echo $content_for_layout;?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
