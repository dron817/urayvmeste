<?php

class Controller_Index extends Controller_Base
{

    function index()
    {

        $values = [];

        $values["title"] = "Югра Вместе - От людей для людей";
        $values["active_navbar_index"] = "active";


        $organizations = $this->registry['organizations']->getOrganizationsToMain();
        $values["org-items"] = '';
        foreach ($organizations as $organization) {
            $inner['id'] = $organization['id'];
            $inner['name'] = $organization['name'];
            $inner['desc'] = $organization['description'];
            $inner['city'] = $organization['city'];
            $inner['logo'] = $organization['logo'];
            $inner['cont'] = $organization['contacts'];
            $values["org-items"] .= $this->registry['template']->getReplaceTemplate('org-item', $inner);
        }
        $values['content'] = $this->registry['template']->getReplaceTemplate('index', $values);
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}

?>