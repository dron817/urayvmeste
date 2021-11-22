<?php
class Controller_Needs extends Controller_Base
{

    function index()
    {

        $values = [];
        $values["title"] = "Югра Вместе - Кому нужна помощь";
        $values["active_navbar_needs"] = "active";

        if (!empty($_SESSION["login"]))
            $moder=($_SESSION["login"])=="moder"?"-moder":"";
        else $moder="";
        $needs = $this->registry['needs']->getConfNeeds();

        if(count($needs)<>0) {
            $values["needs-items"] = '';
            foreach ($needs as $need) {
                $inner['id'] = $need['id'];
                $inner['name'] = $need['name'];
                $inner['desc'] = $need['description'];
                $inner['city'] = $need['city'];
                $inner['email'] = $need['email'];
                $inner['phone'] = $need['phone'];
                $values["needs-items"] .= $this->registry['template']->getReplaceTemplate('need-item' . $moder, $inner);
            }
        }
        else{
            $values["needs-items"] .= "Пока никто не запрашивал помощь, станьте первым!";
        }

        $values['content'] = $this->registry['template']->getReplaceTemplate('needs', $values);
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}