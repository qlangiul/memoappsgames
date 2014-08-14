<?
require_once "top.php";
$categ_list=array(1,2);

require_once "get_data.php";


if(count($obj_arr)==0):
	echo '<h2 class="soon">Soon...</h2>';
else:
	//print_r($obj_arr);
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
					$str.='<a href="#openModal'.$item->item_id.'">';
					$str.='<img src="imgs/prods/'.$item->item_id.'_0.jpg" alt="'.$item->nume_item.'">';
					$str.='<span class="app-name">'.$item->nume_item.'</span>';
					$str.='</a>';
					$str.='<div id="openModal'.$item->item_id.'" class="modalDialog"><div><a href="#close" title="Close" class="close">X</a>';
					$str.='<h2>'.$item->nume_item.'</h2>';
					$str.='<p class="description">'.$item->descriere_item.'</p>';
					$str.='<h3>What&apos;s new in v'.$item->version.'</h3>';
					$str.='<p class="changes">'.$item->what_is_new.'</p>';
					$str.='</div></div>';
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