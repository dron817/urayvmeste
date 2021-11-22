<?php
class Controller_Helpers extends Controller_Base
{

    function index()
    {

        $values = [];
        $values["title"] = "Югра Вместе - Предлагающие помощь";
        $values["active_navbar_helpers"] = "active";

        if (!empty($_SESSION["login"]))
            $moder=($_SESSION["login"])=="moder"?"-moder":"";
        else $moder="";
        $helpers = $this->registry['helpers']->getConfHelpers();

        if(count($helpers)<>0) {
            $values["helpers-items"] = '';
            foreach ($helpers as $helper) {
                $inner['id'] = $helper['id'];
                $inner['name'] = $helper['name'];
                $inner['desc'] = $helper['description'];
                $inner['city'] = $helper['city'];
                $inner['email'] = $helper['email'];
                $inner['phone'] = $helper['phone'];
                $values["helpers-items"] .= $this->registry['template']->getReplaceTemplate('helper-item'.$moder, $inner);
            }
        }
        else{
            $values["helpers-items"]="Пока никто не предлагал помощь, станьте первым!";
        }
        $values['content'] = $this->registry['template']->getReplaceTemplate('helpers', $values);
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}
