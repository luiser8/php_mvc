<?php

require_once 'IConnection.php';

class UniversalConnect implements IConnection{
	private static $server = IConnection::HOST;
	private static $currentDB = IConnection::DBNAME;
	private static $user = IConnection::UNAME;
	private static $pass = IConnection::PW;
	private static $hookup;

	public function doConnect(){
		self::$hookup=mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
		if(self::$hookup){
			//echo 'Connection ok';
		}elseif(mysqli_connect_error(self::$hookup)){
			//cho 'Connection failed!';	
		}
		return self::$hookup;
	}
}