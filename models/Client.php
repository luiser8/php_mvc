<?php

require_once 'UniversalConnect.php';

class Client{
	private $db;
	private $client;
	
	public function __construct(){
		$this->db=UniversalConnect::doConnect();
		$this->client=array();
	}

	public function getClient(){
        $sql = $this->db->query("SELECT * FROM client");
        while($rows = $sql->fetch_assoc()){
            $this->client[] = $rows;
        }
        return $this->client;
    }

    public function setClient($data){
        $sql = "INSERT INTO client(id_client, first_name, last_name, email)VALUES(
            NULL, '{$data['first_name']}', '{$data['last_name']}', '{$data['email']}')";
        return $this->db->query($sql);   
    }
}