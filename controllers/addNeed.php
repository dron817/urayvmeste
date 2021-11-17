<?php
class Controller_addNeed extends Controller_Base
{

    function index()
    {

        $values = [];

        $values["title"] = "Югра Вместе - Мне нужна помощь";
        $values['content'] = $this->registry['template']->getReplaceTemplate('addNeed');
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}

