<?php

require_once ('global.php');

class Needs extends GlobalClass{

    public function __construct($registry){
        parent::__construct("needs", $registry);
    }

    public function getCountNeeds(){	//checked
        return count($this->getAll("id", false));
    }

    public function getAllNeeds(){	//checked
        return $this->getAll("id", false);
    }

    public function getConfNeeds(){	//checked
        return $this->getAllOnfield("conformed", 1, "id", "ASC");
    }
    public function getUnConfNeeds(){	//checked
        return $this->getAllOnfield("conformed", 0, "id", "ASC");
    }

    public function confNeed($id){
        $array['conformed']=1;
        $this->editNeed($id, $array);
    }
    public function hideNeed($id){
        $array['conformed']=0;
        $this->editNeed($id, $array);
    }

    public function getPageNeeds($page){	//checked
        return $this->getPage($page, "id", false);
    }

    public function deleteNeeds($id){	//checked
        return $this->delete($id);
    }

    public function addNeed($needs){	//checked
        //if (!$this->checkValid($login, $password, $regdate)) return false;
        return $this->add($needs);
    }

    public function editNeed($id, $array){	//checked
        // if (!$this->checkValid($array['login'], $array['password'], $array['date'])) return false;
        return $this->edit($id, $array);
    }

    public function getNeedOnId($id){
        return $this->get($id);
    }
}