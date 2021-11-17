<?php
class Controller_addOrganization extends Controller_Base
{

    function index()
    {

        $values = [];

        $values["title"] = "Югра Вместе - Добавить организацию";
        $values['content'] = $this->registry['template']->getReplaceTemplate('addOrganization');
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}

