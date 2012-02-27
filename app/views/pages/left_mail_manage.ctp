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
您是(<?php echo 
$html->link( $this->Session->read('user'),array('controller'=>'mails','action' => 'index_all',$this->Session->read('username')),array('target'=>'right'));?>)<br />
<a href="#"	>联系人</a><span id="contacterall" onclick="extent()" class="extent">[-]</span><br />
<div id="contactercontent">
	
	<?php
	
	for($i=0;$i<count($listtree);$i++){
		if($listtree[$i]['lvl']==0)
		{
			echo "<div id=\"customer\" name=\"name\">&nbsp;&nbsp;";
			echo $html->link( $listtree[$i]['title'],
								array(	'controller'=>'mails',
										'action' => 'index_customer',
										$listtree[$i]['id']
									  ),
								array('target'=>'right'));
			echo "</div>";
		}
		if($listtree[$i]['lvl']==1)
		{
			echo "<div id=\"contacter\" name=\"name\">&nbsp;&nbsp;&nbsp;&nbsp;|-";
			echo $html->link( $listtree[$i]['title'],
								array(	'controller'=>'mails',
										'action' => 'index_contacter',
										$listtree[$i]['id']
									  ),
								array('target'=>'right'));
			echo "</div>";
		}
	}
	?>
</div>
