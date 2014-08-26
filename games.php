<?
require_once "top.php";
$categ_list=array(2);
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
					$str.='<a class="app-link"  href="javascript:void(0)" data-mobile="/game/'.$item->item_id.'/" data-desktop="#game'.$item->item_id.'">';
					$str.='<img src="/imgs/prods/'.$item->item_id.'_0.jpg" alt="'.$item->nume_item.'">';
					$str.='<span class="app-name">'.$item->nume_item.'</span>';	
					$str.='</a>';
					$str.='<div class="modalDialog" id="game'.$item->item_id.'">';
						$str.='<div class="content">';
							$str.='<a href="#close" title="Close" class="close">X</a>';
							$str.='<h2><span>'.$item->nume_item.'</span></h2>';
							$str.='<div class="left">';
								$str.='<div class="description">'.$item->descriere_item.'</div>';
							$str.='</div>';
							$str.='<div class="right">';
								$str.='<a href="'.$item->link.'" target="_blank"><img alt="Get it on Google Play" src="/imgs/en_generic_rgb_wo_45.png" /></a>';
								$str.='<div id="slider'.$item->item_id.'" class="flexslider">';
									$str.='<ul class="slides">';
									for($i=0;$i<$item->nr_of_pics;$i++){
										$str.='<li><img src="/imgs/prods/'.$item->item_id.'_'.$i.'.jpg" alt="img'.$i.'"></li>';
									}
									$str.='</ul>';
								$str.='</div>';
							$str.='</div><div style="clear:left;"></div>';	
							$str.='<h3>What&apos;s new in v'.$item->version.'</h3>';
							$str.='<div class="changes">'.$item->what_is_new.'</div>';
						$str.='</div>';
					$str.='</div>';

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