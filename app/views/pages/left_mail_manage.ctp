<?php
/*
 * Created on 2011-11-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<script>
function extent()
{
	var obj=document.getElementById("contactercontent");
	var obj2=document.getElementById("contacterall");
	if(obj.style.display=='none')
	{
		obj.style.display='';
		obj2.innerHTML='[-]';
		
	}else
	{
		obj.style.display='none';
		obj2.innerHTML='[+]';
	}
	
}
</script>
<style>
.extent
{
	cursor:pointer;
	font:10px;
}
</style>
您是(<?php echo $this->Session->read('user');?>)<br />
<a href="#" onclick="return false;">	全部</a><span id="contacterall" onclick="extent()" class="extent">[-]</span><br />
<div id="contactercontent">
	<?php foreach ($Contacters as $condition): ?>
	<div id="contacter" name="name">|-<?php echo $html->link( $condition['Contacter']['ContactName'],array('controller'=>'mails','action' => 'index',$condition['Contacter']['ContacterId']),array('target'=>'right')); ?></div>
	<?php endforeach; ?>
</div>
