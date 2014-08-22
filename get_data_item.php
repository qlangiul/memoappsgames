<?php
	$query =  "select * from mag_tbl_items where item_id=".$the_id;
	
	$result = $con->query($query);
	$obj_arr=array();
	if( !$result){
	}
	else{
		
		while ($obj=$result->fetch_object()){
			array_push($obj_arr, $obj);
		}
	}
?>