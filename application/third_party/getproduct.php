<?php
ini_set("display_errors", "Off");
include ('db.php');

$roundinfo = $_GET['roundinfo'];
$pieces = explode(",", $roundinfo);
$round = $pieces[0];
$date = $pieces[1];
$time = $pieces[2];
$type = $pieces[3];

switch($type){
	case($type == 'final'):
		  $return_arr = array();

		  $fetch = $database->query("SELECT * FROM tbl_newstock WHERE stock_grade LIKE '" . mysql_real_escape_string($_GET['term']) . "' AND stock_round LIKE '" .$round. "'");
			 
			while ($row = $database->fetch_array($fetch)) {
				$getcatid = $row['stock_cat'];
				
				$fetchcat = $database->query("SELECT * FROM tbl_category WHERE cat_id = '$getcatid'");
				$cat = $database->fetch_array($fetchcat);
				
				$getsize = $row['stock_size'];		
				$fetchsize = $database->query("SELECT * FROM tbl_size WHERE size_id = '$getsize'");
				$size = $database->fetch_array($fetchsize);
				
				$grade = $row['stock_grade'];
				
				/*$fetchgrade = $database->query("SELECT * FROM tbl_grade WHERE  cat_id = '$getcatid' AND grade_name = '$grade'");
				$grader = $database->fetch_array($fetchgrade);*/
				if($row['stock_cts'] == ''){}
				else{
				$row_array['value'] = $grade;
				$row_array['cost_price'] = $row['stock_rate'];
				$row_array['pid'] = $row['stock_id'];
				$row_array['label'] = $size['size_name'].', '.$grader['grade_description'].', '.$grade.', '.$cat['cat_name'];
				$row_array['size'] = $getsize;
				$row_array['cat'] = $getcatid;}
				array_push($return_arr,$row_array);
			}
		
		echo json_encode($return_arr);
	break;
	
	case($type == 'merged'):
		$return_arr = array();

		  $fetch = $database->query("SELECT * FROM tbl_stock_merge WHERE stock_grade LIKE '" . mysql_real_escape_string($_GET['term']) . "' AND stock_round LIKE '" .$round. "' AND stock_date LIKE '" .$date. "' AND stock_time LIKE '" .$time. "'");
			 
			while ($row = $database->fetch_array($fetch)) {
				$getcatid = $row['stock_cat'];
				
				$fetchcat = $database->query("SELECT * FROM tbl_category WHERE cat_id = '$getcatid'");
				$cat = $database->fetch_array($fetchcat);
				
				$getsize = $row['stock_size'];		
				$fetchsize = $database->query("SELECT * FROM tbl_size WHERE size_id = '$getsize'");
				$size = $database->fetch_array($fetchsize);
				
				$grade = $row['stock_grade'];
				
				/*$fetchgrade = $database->query("SELECT * FROM tbl_grade WHERE  cat_id = '$getcatid' AND grade_name = '$grade'");
				$grader = $database->fetch_array($fetchgrade);*/
				if($row['stock_cts'] == ''){}
				else{$row_array['value'] = $grade;
				$row_array['cost_price'] = $row['stock_rate'];
				$row_array['pid'] =  $row['stock_id'];
				$row_array['label'] = $size['size_name'].', '.$grader['grade_description'].', '.$grade.', '.$cat['cat_name'];
				$row_array['size'] = $getsize;
				$row_array['cat'] = $getcatid;}
				array_push($return_arr,$row_array);
			}
		
		echo json_encode($return_arr);
	break;
	
	case($type == 'unmerged'):
		  $return_arr = array();

		$fetch = $database->query("SELECT * FROM tbl_stock WHERE stock_grade LIKE '" . mysql_real_escape_string($_GET['term']) . "' AND stock_round LIKE '" .$round. "' AND stock_date LIKE '" .$date. "' AND stock_time LIKE '" .$time. "'");
			 
			while ($row = $database->fetch_array($fetch)) {
				$getcatid = $row['stock_cat'];
				
				$fetchcat = $database->query("SELECT * FROM tbl_category WHERE cat_id = '$getcatid'");
				$cat = $database->fetch_array($fetchcat);
				
				$getsize = $row['stock_size'];		
				$fetchsize = $database->query("SELECT * FROM tbl_size WHERE size_id = '$getsize'");
				$size = $database->fetch_array($fetchsize);
				
				$grade = $row['stock_grade'];
				/*
				$fetchgrade = $database->query("SELECT * FROM tbl_grade WHERE  cat_id = '$getcatid' AND grade_name = '$grade'");
				$grader = $database->fetch_array($fetchgrade);*/
				if($row['stock_cts'] == ''){}
				else{
				$row_array['value'] = $grade;
				$row_array['cost_price'] = $row['stock_rate'];
				$row_array['pid'] = $row['stock_id'];
				$row_array['label'] = $size['size_name'].', '.$grader['grade_description'].', '.$grade.', '.$cat['cat_name'];
				$row_array['size'] = $getsize;
				$row_array['cat'] = $getcatid;}
				array_push($return_arr,$row_array);
			}
		
		echo json_encode($return_arr);
	break;
	}


/*$return_arr = array();

  $fetch = $database->query("SELECT * FROM tbl_newstock WHERE stock_grade like '" . mysql_real_escape_string($_GET['term']) . "'");
     
    while ($row = $database->fetch_array($fetch)) {
        $getcatid = $row['stock_cat'];
		
		$fetchcat = $database->query("SELECT * FROM tbl_category WHERE cat_id = '$getcatid'");
		$cat = $database->fetch_array($fetchcat);
		
		$getsize = $row['stock_size'];		
		$fetchsize = $database->query("SELECT * FROM tbl_size WHERE size_id = '$getsize'");
		$size = $database->fetch_array($fetchsize);
		
		$grade = $row['stock_grade'];
		
		$fetchgrade = $database->query("SELECT * FROM tbl_grade WHERE  cat_id = '$getcatid' AND grade_name = '$grade'");
		$grader = $database->fetch_array($fetchgrade);
		
		$row_array['value'] = $grade;
        $row_array['cost_price'] = $row['stock_rate'];
        $row_array['pid'] = $grader['grade_id'];
        $row_array['label'] = $size['size_name'].', '.$grader['grade_description'].', '.$grade.', '.$cat['cat_name'];
        $row_array['size'] = $getsize;
		$row_array['cat'] = $getcatid;
        array_push($return_arr,$row_array);
    }

echo json_encode($return_arr);
*/
?>