<?php
class Controller_Helpers extends Controller_Base
{

    function index()
    {

        $values = [];

        $values["title"] = "Югра Вместе - Предлагающие помощь";
        $helpers = $this->registry['helpers']->getAllHelpers();
        $values["helpers-items"] = '';
        foreach ($helpers as $helper) {
            $inner['id'] = $helper['id'];
            $inner['name'] = $helper['name'];
            $inner['desc'] = $helper['description'];
            $inner['city'] = $helper['city'];
            $inner['email'] = $helper['email'];
            $inner['phone'] = $helper['phone'];
            $values["helpers-items"] .= $this->registry['template']->getReplaceTemplate('helper-item', $inner);
        }
        $values['content'] = $this->registry['template']->getReplaceTemplate('helpers', $values);
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}
