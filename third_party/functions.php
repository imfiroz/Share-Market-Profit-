<?php

function cat_dropdown($cat, $row){
	global $database;
	$query = $database->query("SELECT * FROM tbl_category");
	$row_count = $database->num_rows($query);
		$dropdown .= '<select name="round'.$row.'" id="round'.$row.'" style="width:200px !important;">';
        $dropdown .= '<option>Select New Category</option>';
	while($row_cat = $database->fetch_array($query)){
		if($cat == $row_cat['cat_name']){$selected = "selected";}else{$selected="";}
        $dropdown .= '<option value="'.$row_cat['cat_id'].'" '.$selected.'>'.$row_cat['cat_name'].'</option>';
		}
		$dropdown .= '</select>';
	echo $dropdown;
	}
	
function inward_dropdown($inward){
	global $database;
	$query = $database->query("SELECT * FROM tbl_inward");
	$row_count = $database->num_rows($query);
    $dropdown .= '<option>Select</option>';
	while($row_inward = $database->fetch_array($query)){
		if($inward == $row_inward['inward_id']){$selected = "selected";}else{$selected="";}
        $dropdown .= '<option value="'.$row_inward['inward_id'].'" '.$selected.'>Inward '.$row_inward['inward_id'].' <strong>Created On</strong> '.$row_inward['inward_date'].'</option>';
		}
		$dropdown .= '</select>';
	echo $dropdown;
	}
	
function cat_dropdownbyid($cat){
	global $database;
	$query = $database->query("SELECT * FROM tbl_category");
	$row_count = $database->num_rows($query);
		$dropdown .= '<select name="cat" id="cat" style="width:200px !important;">';
        $dropdown .= '<option>Select New Category</option>';
	while($row_cat = $database->fetch_array($query)){
		if($cat == $row_cat['cat_id']){$selected = "selected";}else{$selected="";}
        $dropdown .= '<option value="'.$row_cat['cat_id'].'" '.$selected.'>'.$row_cat['cat_name'].'</option>';
		}
		$dropdown .= '</select>';
	echo $dropdown;
	}

function size_dropdown($size, $row){
	global $database;
	$query = $database->query("SELECT * FROM tbl_size");
	$row_count = $database->num_rows($query);
		$dropdown .= '<select name="size'.$row.'" id="size'.$row.'" style="width:200px !important;">';
        $dropdown .= '<option>Select New Size</option>';
	while($row_cat = $database->fetch_array($query)){
		if($size == $row_cat['size_name']){$selected = "selected";}else{$selected="";}
        $dropdown .= '<option value="'.$row_cat['size_id'].'" '.$selected.'>'.$row_cat['size_name'].'</option>';
		}
		$dropdown .= '</select>';
	echo $dropdown;
	}

function catname($cat){
	global $database;
	$query = $database->query("SELECT * FROM tbl_category WHERE cat_id = '$cat'");
	$row_cat = $database->fetch_array($query);	
	echo $row_cat['cat_name'];

	}
	
function size($size){
	global $database;
	$query = $database->query("SELECT * FROM tbl_size WHERE size_id = '$size'");
	$row_size = $database->fetch_array($query);	
	echo $row_size['size_name'];
	}

function cost($cat, $size, $grade){
	global $database;
	$query = $database->query("SELECT * FROM tbl_pricelist WHERE price_size = '$size' AND price_cat = '$cat' AND price_grade = '$grade'");
	$row_size = $database->fetch_array($query);	
	echo $row_size['cost_price'];
	}
	
function salecost($cat, $size, $grade){
	global $database;
	$query = $database->query("SELECT * FROM tbl_pricelist WHERE price_size = '$size' AND price_cat = '$cat' AND price_grade = '$grade'");
	$row_size = $database->fetch_array($query);	
	$val = $row_size['cost_price'] + $row_size['price_add'] + $row_size['price_add1'] - $row_size['price_less'] - $row_size['price_less1'];
	echo $val;
	}

function diffcost($cat, $size, $grade){
	global $database;
	$query = $database->query("SELECT * FROM tbl_pricelist WHERE price_size = '$size' AND price_cat = '$cat' AND price_grade = '$grade'");
	$row_size = $database->fetch_array($query);	
	$val = $row_size['cost_price'] + $row_size['price_add'] + $row_size['price_add1'] - $row_size['price_less'] - $row_size['price_less1'];
	$diff = $val - $row_size['cost_price'];
	if($row_size['cost_price'] > $val){
		echo '<span style="color:#F00; font-weight:bold;">'.$diff.'</span>';
		}
	else{
		echo '<span style="color:#0C0; font-weight:bold;">'.$diff.'</span>';
		}
	}

function ctstotal($invoice){
	global $database;
	$query = $database->query("SELECT sum(prod_cts) FROM view_invoice WHERE invoice_id = '$invoice'");
	$row_size = $database->fetch_array($query);	
	 return $row_size['sum(prod_cts)'];
	}
	
function iwctstotal($invoice){
	global $database;
	$query = $database->query("SELECT sum(prod_cts) FROM view_inward WHERE inward_id = '$invoice'");
	$row_size = $database->fetch_array($query);	
	return $row_size['sum(prod_cts)'];
	}

function iwratetotal($invoice){
	global $database;
	$query = $database->query("SELECT sum(prod_uprice) FROM view_inward WHERE inward_id = '$invoice'");
	$row_size = $database->fetch_array($query);	
	return $row_size['sum(prod_uprice)'];
	}
	
function dd_stock($selected){
	global $database;
	$query = $database->query("SELECT stock_time, stock_round, stock_date, reas_final FROM tbl_stock
WHERE stock_merged='No' AND reas_final = 'No'
GROUP BY stock_date, stock_round, stock_time");
	//$r = $row_stock = $database->fetch_array($query);
	/*echo "SELECT stock_time, stock_round, stock_date, reas_final FROM tbl_stock GROUP BY stock_date, stock_round, stock_time";
	exit;*/
	//print_r($query);exit;
	while($row_stock = $database->fetch_array($query)){
		if($row_stock['reas_final'] == 'No'){
		$stock_round = $row_stock['stock_round'];
		$row_stock['stock_date'];	
		
		$queryr = $database->query("SELECT * FROM tbl_rounds WHERE round_id = '$stock_round'");
		$row_round = $database->fetch_array($queryr);
		$val = $row_stock['stock_round'].','.$row_stock['stock_date'].','.$row_stock['stock_time'];
		if($selected == $val){$selectedyn = 'selected';}else{$selectedyn = '';}
		
		echo '<option value="'.$val.'" '.$selectedyn.'>'.$row_round['round_name'].' - '.$row_stock['stock_date'].' '.$row_stock['stock_time'].'</option>';
		}
	 }
}
	
function dd_stock_merged($selected){
	global $database;
	$query = $database->query("SELECT * FROM tbl_stock_merge GROUP BY stock_date, stock_round, stock_time");
	while($row_stock = $database->fetch_array($query)){
	$stock_round = $row_stock['stock_round'];
	$row_stock['stock_date'];	
	$queryr = $database->query("SELECT * FROM tbl_rounds WHERE round_id = '$stock_round'");
	$row_round = $database->fetch_array($queryr);
	$val = $row_stock['stock_round'].','.$row_stock['stock_date'].','.$row_stock['stock_time'];
	if($selected == $val){$selectedyn = 'selected';}
	
	echo '<option value="'.$val.'" '.$selectedyn.'>'.$row_round['round_name'].' - '.$row_stock['stock_date'].' '.$row_stock['stock_time'].'</option>';
	}
	}
	
function dd_rounds($selected){
	global $database;
	$queryr = $database->query("SELECT * FROM tbl_rounds");
	while($row_round = $database->fetch_array($queryr)){
		echo '<option value="'.$row_round['round_id'].'" ';
		if($selected == $row_round['round_id']){echo 'selected="selected"';}
		echo '>'.$row_round['round_name'].'</option>';
	}
	}
	
function cust_name($selected){
	global $database;
	$queryr = $database->query("SELECT * FROM tbl_customer WHERE cust_id = '$selected'");
	$row_cust = $database->fetch_array($queryr);
		return $row_cust['cust_name'];
	}

function round_name($selected){
	global $database;
	$queryr = $database->query("SELECT * FROM tbl_rounds WHERE round_id = '$selected'");
	$row_cust = $database->fetch_array($queryr);
		return $row_cust['round_name'];
	}
	
function cust_dd($selected){
	global $database;
	$queryr = $database->query("SELECT * FROM tbl_customer");
	$row_cust = $database->fetch_array($queryr);
	if($selected == $row_cust['cust_id']){$selectedyn = 'selected';}
	echo '<option value="'.$row_cust['cust_id'].'" '.$selectedyn.'>'.$row_cust['cust_name'].'</option>';
	}	
	
function us_total($total){
	global $database;
	$queryr = $database->query("SELECT * FROM tbl_parameters");
	$row_rate = $database->fetch_array($queryr);
	$ustotal = ($total / $row_rate['usd_rate']) / $row_rate['terms_rate'];
	return $ustotal;
	}

function dd_stock_in($selected){
	global $database;
	$query = $database->query("SELECT stock_time, stock_round, stock_date, reas_final FROM tbl_stock GROUP BY stock_date, stock_round, stock_time");
	while($row_stock = $database->fetch_array($query)){
	if($row_stock['reas_final'] == 'No'){
	$stock_round = $row_stock['stock_round'];
	$row_stock['stock_date'];	
	
	$queryr = $database->query("SELECT * FROM tbl_rounds WHERE round_id = '$stock_round'");
	$row_round = $database->fetch_array($queryr);
	$val = $row_stock['stock_round'].','.$row_stock['stock_date'].','.$row_stock['stock_time'].',unmerged';
	if($selected == $val){$selectedyn = 'selected';}
	
	echo '<option value="'.$val.'" '.$selectedyn.'>'.$row_round['round_name'].' - '.$row_stock['stock_date'].' '.$row_stock['stock_time'].'</option>';
	}}
	}
	
function dd_stock_merged_in($selected){
	global $database;
	// $query = $database->query("SELECT * FROM tbl_stock_merge GROUP BY stock_date, stock_round, stock_time");
	$query = $database->query("SELECT * FROM tbl_stock_merge WHERE stock_merged = 'Yes' AND reas_final = 'No' GROUP BY stock_date, stock_round, stock_time");
	while($row_stock = $database->fetch_array($query)){
	$stock_round = $row_stock['stock_round'];
	$row_stock['stock_date'];	
	$queryr = $database->query("SELECT * FROM tbl_rounds WHERE round_id = '$stock_round'");
	$row_round = $database->fetch_array($queryr);
	$val = $row_stock['stock_round'].','.$row_stock['stock_date'].','.$row_stock['stock_time'].',merged';
	if($selected == $val){$selectedyn = 'selected';}
	
	echo '<option value="'.$val.'" '.$selectedyn.'>'.$row_round['round_name'].' - '.$row_stock['stock_date'].' '.$row_stock['stock_time'].'</option>';
	}
	}

function dd_stock_final_in($selected){
	global $database;
	$query = $database->query("SELECT * FROM tbl_rounds");
	while($row_stock = $database->fetch_array($query)){
	$val = $row_stock['round_id'].',,,final';
	if($selected == $val){$selectedyn = 'selected';}
	
	echo '<option value="'.$val.'" '.$selectedyn.'>Final Stock - '.$row_stock['round_name'].'</option>';
	}
	}
?>