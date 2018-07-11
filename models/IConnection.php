<?php

interface IConnection{
	const HOST = 'localhost';
	const UNAME = 'root';
	const PW = '';
	const DBNAME = 'dbtest';
	
	public function doConnect();
}