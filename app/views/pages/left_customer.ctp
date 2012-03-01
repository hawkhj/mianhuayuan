<?php
/*
 * Created on 2011-11-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<style>
ul{
	margin-right:2px;
}
.title
{
	border:1px #eeeeee solid;
	cursor:pointer;
}
.content
{
	border:1px #eeeeee solid;
	margin:0px;
	padding:2px;
}
</style>
<script>
function hide(id)
{
	obj=document.getElementById(id)
	if(obj.style.display=="")
	{
		obj.style.display="none"
	}else
	{
		obj.style.display="";
	}
}
</script>
<div onclick="hide('menu')" class="title">菜单功能</div>
<ul id="menu" style="display:none;" class="content">
<li><?php echo $html->link('查看全部客户', array('controller'=>'customers','action' => 'Index'),array('target'=>'right')); ?></li>
<li><?php echo $html->link('查看重要客户', array('controller'=>'customers','action' => 'CustImport'),array('target'=>'right')); ?></li>
<li><?php echo $html->link('查看一般客户', array('controller'=>'customers','action' => 'CustNorm'),array('target'=>'right')); ?></li>
<li><?php echo $html->link('查找客户', array('controller'=>'customers','action' => 'CustFind'),array('target'=>'right')); ?></li>
<li><?php echo $html->link('新建客户', array('controller'=>'customers','action' => 'add'),array('target'=>'right')); ?></li>
<li><?php echo $html->link('Excel导入客户', array('controller'=>'customers','action' => 'excel'),array('target'=>'right')); ?></li>
</ul>
<?php
if( $this->Session->read('Lvl')<3)
{
	echo '<ul>';
	//var_dump($Users);
	foreach($Users as $User)
	{
		if($User['User']['Id']==$this->Session->read('username'))
		{
			echo '<li>'.$html->link($User['User']['username'],array('controller'=>'customers','action' => 'UserAll',$User['User']['Id']),array('target'=>'right','title'=>'Email:'.$User['User']['Email'])).'</li>';
			$this->DataUtil->listsubUser($Users,$User['User']['Id']);
		}
	}
	echo '</ul>';
}
?>