<?php
class Controller_Needs extends Controller_Base
{

    function index()
    {

        $values = [];

        $values["title"] = "Югра Вместе - Кому нужна помощь";
        $needs = $this->registry['needs']->getAllNeeds();
        $values["needs-items"] = '';
        foreach ($needs as $need) {
            $inner['id'] = $need['id'];
            $inner['name'] = $need['name'];
            $inner['desc'] = $need['description'];
            $inner['city'] = $need['city'];
            $inner['email'] = $need['email'];
            $inner['phone'] = $need['phone'];
            $values["needs-items"] .= $this->registry['template']->getReplaceTemplate('need-item', $inner);
        }
        $values['content'] = $this->registry['template']->getReplaceTemplate('needs', $values);
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}