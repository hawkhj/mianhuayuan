<?php
/*
 * Created on 2011-11-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

<style>
.extent
{
	cursor:pointer;
	font:10px;
}
</style>
<h1> 产品分类</h1>
<a href="#" onclick="return false;">	全部</a><br />
<div id="categorycontent">
	<?php foreach ($categories as $category): ?>
	<div id="category" name="name">|-<?php echo $html->link( $category['Category']['CategoryName'],array('controller'=>'productions','action' => 'index',$category['Category']['CategoryId']),array('target'=>'right')); ?></div>
	<?php endforeach; ?>
</div>
