<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b18fa1a43b3b54";$this->pass="a5f759ff";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_c19294b999ddcb7";
	}
	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
