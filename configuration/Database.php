<?php

/*
##########
Konfigurasi database msyql dengan php versi 5.6	
nama database db_aptech
anotero.id
##########
*/

	define('db_host', 'localhost');
	define('db_user', 'root');
	define('db_pass','');
	define('db_name','db_aptech');
	
	//define untuk konstanta karena nilainya tetap
	
class Database{
	function __construct(){ 
		//__construct untuk fungsi magic modified, supaya function nya jadi global
		$con = mysql_connect(db_host,db_user,db_pass);
		$db  = mysql_select_db(db_name, $con);	
		}
	}

?>