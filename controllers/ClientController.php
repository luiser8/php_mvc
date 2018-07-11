<?php

require_once 'models/Client.php';

class ClientController extends Client{
	private $client;

	public function Index(){
		return $this->client=Client::getClient();
	}

	public function Create($first_name, $last_name, $email){
        $data = array('first_name'=>$first_name, 
        				'last_name'=>$last_name,
        				'email'=> $email);
        return $this->client=Client::setClient($data);
    }
}