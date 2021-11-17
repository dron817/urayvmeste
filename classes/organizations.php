<?php

require_once ('global.php');

class Organizations extends GlobalClass{

    public function __construct($registry){
        parent::__construct("organizations", $registry);
    }

    public function getCountOrganizations(){	//checked
        return count($this->getAll("id", false));
    }

    public function getAllOrganizations(){	//checked
        return $this->getAll("id", false);
    }

    public function getLastId(){	//checked
        $orgs = $this->getAll("id", false);
        return $orgs[0]['id'];
    }

    public function getPageOrganizations($page){	//checked
        return $this->getPage($page, "id", false);
    }

    public function getOrganizationsToMain(){	//checked
        return $this->getPage(1, "id", false);
    }


    public function deleteOrganization($id){	//checked
        return $this->delete($id);
    }

    public function addOrganization($org){	//checked
        //if (!$this->checkValid($login, $password, $regdate)) return false;
        return $this->add($org);
    }

    public function editOrganization($id, $array){	//checked
        // if (!$this->checkValid($array['login'], $array['password'], $array['date'])) return false;
        return $this->edit($id, $array);
    }

    public function getOrganizationOnId($id){
        return $this->get($id);
    }
}