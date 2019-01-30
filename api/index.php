<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function db(){
	if(!isset($_GLOBALS['db'])){
		$user = 'skatelist_nl_skatelist';
		$pass = 'xQN3zWRU9azk';
		$_GLOBALS['db'] = new PDO("mysql:host=localhost;dbname=skatelist_nl_skatelist", $user, $pass);
	}
	
	return $_GLOBALS['db'];
}

function dbget($table, $where = null, $single = false){
	if(!is_array($where) && strlen($where)) {
		$where = ['id' => $where];
	}
	
	$db = db();
	
	$q = "SELECT * FROM " . $table;
	
	if(count($where) > 0) {
		$q .= ' WHERE';
		
		foreach($where as $key => $val) {
			$q .= ' ' . $key . '=:' . $key;
		}
	}
	
	if($single == true) {
		$q .= ' LIMIT 1';
	}
	
	$sth = $db->prepare($q);
	if($where != null) {
		foreach($where as $key => $val) {
			$sth->bindParam(':'.$key, $val);
		}
	}
	$sth->execute();
	if($single == false) {
		$result = $sth->fetchAll();
	} else {
		$result = $sth->fetch();
	}
	
	return $result;
}

$methods = [
'get_list_id' => 'GET /list/',
'get_list' => 'GET /list',
'delete_list_id' => 'DELETE /list/',
'post_list_id' => 'POST /list/',
'get_info' => 'GET /info',
'get_categories' => 'GET /categories'
];

function get_list(){
	$parks = dbget('skatepark');
	return json_encode($parks);
}

function get_list_id($id){
	$parks = dbget('skatepark', $id, true);
	return json_encode($parks);
}

function get_categories($id){
	$parks = dbget('categories');
	return json_encode($parks);
}

$compare = $_SERVER['REQUEST_METHOD'] . ' /' . $_GET['path'];

foreach($methods as $function => $compare2){
	if(strpos($compare, $compare2) !== false) {
		$info = str_replace($compare2, '', $compare);
		
		$result = $function($info);
		echo $result;
		exit;
	}
}

