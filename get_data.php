<?php
	$query =  "select * from mag_tbl_items where categ_id in (". implode(',', array_map('intval', $categ_list)) .")";
	
	$result = $con->query($query);
	$obj_arr=array();
	while ($obj=$result->fetch_object()){
		array_push($obj_arr, $obj);
	}
?>