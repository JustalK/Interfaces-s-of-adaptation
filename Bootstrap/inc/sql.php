<?php
function setup() {
	/** ######################################################################################### **/
	/** CONNECTION TO THE MYSQL's SERVER **/
	/** ######################################################################################### **/
	$link = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('S**t ! A wild error about connection appeared : ' . mysql_error());

	/** ######################################################################################### **/
	/** CREATING AND SELECTING THE DATABASE **/
	/** ######################################################################################### **/
	$query = "CREATE DATABASE IF NOT EXISTS ".DATABASE_NAME.";";
	mysql_query($query) or die('F**K ! A wild error appeared : ' . mysql_error());
	mysql_select_db(DATABASE_NAME);

	/** ######################################################################################### **/
	/** CREATING THE TABLE **/
	/** ######################################################################################### **/
	$query = "CREATE TABLE IF NOT EXISTS MOVIES(ID int(11) NOT NULL AUTO_INCREMENT,TITLE varchar(50) DEFAULT NULL,CODE varchar(50) DEFAULT NULL,STUDIO varchar(50) DEFAULT NULL,SINGER varchar(50) DEFAULT NULL,DURATION varchar(50) DEFAULT NULL,GENRE varchar(50) DEFAULT NULL,PUBLICATION varchar(50) DEFAULT NULL,IMG text DEFAULT NULL,LYRIC text DEFAULT NULL,primary key (ID));";
	mysql_query($query) or die('F**K ! A wild error appeared : ' . mysql_error());

	$query = "CREATE TABLE IF NOT EXISTS PUBS(ID int(11) NOT NULL AUTO_INCREMENT,LINK1 varchar(50) DEFAULT NULL,LINK2 varchar(50) DEFAULT NULL,LINK3 varchar(50) DEFAULT NULL,LINK4 varchar(50) DEFAULT NULL,TITLE1 text DEFAULT NULL,TITLE2 text DEFAULT NULL,TITLE3 text DEFAULT NULL,TITLE4 text DEFAULT NULL,primary key (ID));";
	mysql_query($query) or die('F**K ! A wild error appeared : ' . mysql_error());

	// One To Many For ARTICLE and PARAGRAPH
	$query = "CREATE TABLE IF NOT EXISTS MAPS_MOVIES_PUBS(ID_ARTICLE int(11) NOT NULL,ID_PARAGRAPH int(11) NOT NULL);";
	mysql_query($query) or die('F**K ! A wild error appeared : ' . mysql_error());


	/** ######################################################################################### **/
	/** CLOSING THE CONNECTION **/
	/** ######################################################################################### **/
	mysql_close($link);
}

function insert($table,$array) {
	/** ######################################################################################### **/
	/** CONNECTION TO THE MYSQL's SERVER **/
	/** ######################################################################################### **/
	$link = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('S**t ! A wild error about connection appeared : ' . mysql_error());
	mysql_select_db(DATABASE_NAME);

	/** ######################################################################################### **/
	/** GETTING THE COLUMNS WITH THE ARRAY AND INSERTING THE VALUES IN THE TABLE **/
	/** ######################################################################################### **/
	$columns= "";
	$values="";
	foreach ($array as $key => $value){
		$columns .= $key.",";
		$values .= "'".$value."',";
	}

	$query = "INSERT INTO ".$table." (".rtrim($columns,",").") VALUES (".rtrim($values,",").");";
	mysql_query($query) or die('F**K ! A wild error appeared : ' . mysql_error());

	$id = mysql_insert_id();

	/** ######################################################################################### **/
	/** CLOSING THE CONNECTION **/
	/** ######################################################################################### **/
	mysql_close($link);

	return $id;
}

function select($table,$array = "*",$where = NULL) {
	/** ######################################################################################### **/
	/** CONNECTION TO THE MYSQL's SERVER **/
	/** ######################################################################################### **/
	$link = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('S**t ! A wild error about connection appeared : ' . mysql_error());
	mysql_select_db(DATABASE_NAME);

	/** ######################################################################################### **/
	/** CREATING THE TABLE OF THE RESULT **/
	/** ######################################################################################### **/
	if(isset($where)) {
		$query = "SELECT ".$array." FROM ".$table." WHERE ".$where.";";
	} else {
		$query = "SELECT ".$array." FROM ".$table.";";
	}

	$rsl = mysql_query($query) or die('F**K ! A wild error appeared : ' . mysql_error());

	$result = array();

	while(($row =  mysql_fetch_assoc($rsl))) {
		$result[] = $row;
	}

	/** ######################################################################################### **/
	/** FREE THE VARIABLE **/
	/** ######################################################################################### **/
	mysql_free_result($rsl);

	/** ######################################################################################### **/
	/** CLOSING THE CONNECTION **/
	/** ######################################################################################### **/
	mysql_close($link);

	return $result;
}

function update($table,$array,$where) {
	/** ######################################################################################### **/
	/** CONNECTION TO THE MYSQL's SERVER **/
	/** ######################################################################################### **/
	$link = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('S**t ! A wild error about connection appeared : ' . mysql_error());
	mysql_select_db(DATABASE_NAME);

	/** ######################################################################################### **/
	/** CREATING THE SET OF VALUE **/
	/** ######################################################################################### **/
	$tmp = "";
	foreach ($array as $key => $value){
		$tmp .= $key."='".$value."',";
	}

	$query = "UPDATE ".$table." SET ".rtrim($tmp,",")." WHERE ".$where.";";
	$rsl = mysql_query($query) or die('F**K ! A wild error appeared : ' . mysql_error());

	/** ######################################################################################### **/
	/** CLOSING THE CONNECTION **/
	/** ######################################################################################### **/
	mysql_close($link);
}
?>