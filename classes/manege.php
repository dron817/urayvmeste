<?php

class Manege{

	private $data;
	private $registry;

	public function __construct($registry){
		$this->registry = $registry;
		$this->data = $this->secureData(array_merge($_POST, $_GET));
	}
	
	private function secureData($get){
		foreach ($get as $key => $value){
		if (is_array($value)) $this->secureData($value);
		else $data[$key] = htmlspecialchars($value);
		}
	return $data;
	}
	
	public function redirect($link){
		header("Location: $link");
		exit;
	}

    public function login()
    {
        $login = $this->data["login"];
        $password = $this->hashPassword($this->data["password"]);
        $r = $this->registry['adress'] . $this->registry['moder_link'];
        if ($this->registry['users']->checkUser($login, $password)) {
            $_SESSION["login"] = $login;
            $_SESSION["password"] = $password;
            $_SESSION["id"] = $this->registry['users']->getIdOnLogin($login);
            return $r;
        } else
            $_SESSION["error_auth"] = 1;
        return $r;
    }

    public function logout()
    {
        unset($_SESSION["login"]);
        unset($_SESSION["password"]);
        unset($_SESSION["id"]);
        return $this->registry['adress'];
    }

	public function addHelper(){
		$helper['description'] = $this->data["description"];
		$helper['name'] = $this->data["name"];
		$helper['phone'] = $this->data["phone"];
		$helper['email'] = $this->data["email"];
		$helper['city'] = $this->data["city"];
		$result = $this->registry['helpers']->addHelper($helper);
		if ($result){
			return $this->returnPageMessege("SUCCESS_addHelper", $this->registry['adress'].$this->registry['sps_link']);
		}
		else
			return $this->unknownError($this->registry['adress'].$this->registry['helpers_link']);
	}
	public function confHelper(){
	    $result = $this->registry['helpers']->confHelper($this->data["confHelper"]);
		if ($result){
			return $this->returnPageMessege("SUCCESS_confHelper", $this->registry['adress'].$this->registry['moder_link']);
		}
		else
			return $this->unknownError($this->registry['adress'].$this->registry['moder_link']);
	}
	public function hideHelper(){
	    $result = $this->registry['helpers']->hideHelper($this->data["hideHelper"]);
		if ($result){
			return $this->returnPageMessege("SUCCESS_confHelper", $this->registry['adress'].$this->registry['moder_link']);
		}
		else
			return $this->unknownError($this->registry['adress'].$this->registry['moder_link']);
	}

	public function addNeed(){
        $need['description'] = $this->data["description"];
        $need['name'] = $this->data["name"];
        $need['phone'] = $this->data["phone"];
        $need['email'] = $this->data["email"];
        $need['city'] = $this->data["city"];
        $result = $this->registry['needs']->addNeed($need);
        if ($result){
            return $this->returnPageMessege("SUCCESS_addNeed", $this->registry['adress'].$this->registry['sps_link']);
        }
        else
            return $this->unknownError($this->registry['adress'].$this->registry['needs_link']);
	}
	public function confNeed(){
        $result = ($this->registry['needs']->confNeed($this->data["confNeed"]));
        if ($result){
            return $this->returnPageMessege("SUCCESS_addNeed", $this->registry['adress'].$this->registry['moder_link']);
        }
        else
            return $this->unknownError($this->registry['adress'].$this->registry['moder_link']);
	}
	public function hideNeed(){
        $result = ($this->registry['needs']->hideNeed($this->data["hideNeed"]));
        if ($result){
            return $this->returnPageMessege("SUCCESS_addNeed", $this->registry['adress'].$this->registry['moder_link']);
        }
        else
            return $this->unknownError($this->registry['adress'].$this->registry['moder_link']);
	}

	public function addOrganization(){
        $org['description'] = $this->data["description"];
        $org['name'] = $this->data["name"];
        $org['contacts'] = $this->data["contacts"];
        $org['city'] = $this->data["city"];
        $org['logo'] = $_FILES['logo']['name'];
        $uploaddir ='/home/httpd/vhosts/goodspirit.mcdir.ru/httpdocs/img/orgs/'.$_FILES['logo']['name']; //TODO problem with changing
        move_uploaded_file($_FILES['logo']['tmp_name'], $uploaddir);

        $result = $this->registry['organizations']->addOrganization($org);
        if ($result){
            return $this->returnPageMessege("SUCCESS_addOrganization", $this->registry['adress'].$this->registry['sps_link']);
        }
        else
            return $this->unknownError($this->registry['adress'].$this->registry['msg_link']);
	}

	
	private function hashPassword($password){
		return md5($password.$this->registry['pswd_secret']);
	}
	
	private function unknownError($r){
		return $this->returnMessege("UNKNOWN_ERROR", $r);
	}
	
	private function returnMessege($messege, $r){
		$_SESSION["messege"] = $messege;
		return $r;
	}
	
	private function returnPageMessege($messege, $r){
		$_SESSION["page_messege"] = $messege;
		return $r;
	}
}