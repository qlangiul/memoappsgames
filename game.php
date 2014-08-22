<?php
require_once "top.php";
$the_id = $_GET['id'];
require_once "get_data_item.php";
if(count($obj_arr)==0):
	echo '<h2 class="soon">ERROR 404</h2>';
else:
	//print_r($obj_arr);
?>
	<div class="content">
	<?php
		foreach($obj_arr as $item)
		{	
			$str='<h2><span>'.$item->nume_item.'</span></h2>';
			
			$str.='<div class="left">';
				$str.='<p class="description">'.$item->descriere_item.'</p>';
			$str.='</div>';
			$str.='<div class="right">';
				$str.='<a href="'.$item->link.'" target="_blank"><img alt="Get it on Google Play" src="/imgs/en_generic_rgb_wo_45.png" /></a>';
				$str.='<div id="slider" class="flexslider">';
					$str.='<ul class="slides">';
					for($i=0;$i<$item->nr_of_pics;$i++){
						$str.='<li><img src="/imgs/prods/'.$item->item_id.'_'.$i.'.jpg" alt="img'.$i.'"></li>';
					}
					$str.='</ul>';
				$str.='</div>';
			$str.='</div><div style="clear:left;">';	
			$str.='<h3>What&apos;s new in v'.$item->version.'</h3>';
			$str.='<p class="changes">'.$item->what_is_new.'</p>';
			echo $str;
		}				
	?>
	</div>
<?php
endif;
require_once "bottom.php";
?>