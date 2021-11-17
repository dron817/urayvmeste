<?php

class Controller_AddHelper extends Controller_Base
{

    function index()
    {

        $values = [];

        $values["title"] = "Югра Вместе - Предложить помощь";
        $values['content'] = $this->registry['template']->getReplaceTemplate('addHelper');
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}

?>