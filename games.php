<?
require_once "top.php";
$categ_list=array(2);
require_once "get_data.php";
if(count($obj_arr)==0):
	echo '<h2 class="soon">Soon...</h2>';
else:
	print_r($obj_arr);
?>
	<div class="the-names">
		<ul class="slides">
			<?php
				foreach($obj_arr as $item)
				{
					echo '<li class="names"><h2>'.$item->nume_item.'</h2></li>';
				}				
			?>
		</ul>
	</div>
	<div class="items-wrapper">
		<ul class="apps-gamez">
			<?php
				foreach($obj_arr as $item)
				{
					$str='<li id="item'.$item->item_id.'">';
					$str.='<a href="javascript:void(0);">';
					$str.='<img src="imgs/prods/'.$item->item_id.'_0.jpg" alt="'.$item->nume_item.'">';
					$str.='<span class="app-name">'.$item->nume_item.'</span>';
					$str.='</a>';
					$str.='</li>';
					echo $str;
				}				
			?>
		</ul>
	</div>
<?
endif;
require_once "bottom.php";
?>