<?php

require_once ('global.php');

class Helpers extends GlobalClass{

    public function __construct($registry){
        parent::__construct("helpers", $registry);
    }

    public function getCountHelpers(){	//checked
        return count($this->getAll("id", false));
    }


    public function getAllHelpers(){	//checked
        return $this->getAll("id", false);
    }

    public function getPageHelpers($page){	//checked
        return $this->getPage($page, "id", false);
    }

    public function deleteHelper($id){	//checked
        return $this->delete($id);
    }

    public function addHelper($helper){	//checked
        //if (!$this->checkValid($login, $password, $regdate)) return false;
        return $this->add($helper);
    }

    public function editHelper($id, $array){	//checked
        // if (!$this->checkValid($array['login'], $array['password'], $array['date'])) return false;
        return $this->edit($id, $array);
    }

    public function getHelperOnId($id){
        return $this->get($id);
    }
}