<?php
class Controller_Moder extends Controller_Base
{

    function index()
    {

        $values = [];
        $values["title"] = "Югра Вместе - Модерация";
        if(isset($_SESSION["login"])){
            if (($_SESSION["login"])=="moder") {

                $values['needs']="";
                $need=$this->registry['needs']->getUnConfNeeds();
                if (is_countable($need)) {
                    $f = count($need);
                    if ($f <> 0)
                        foreach ($need as $item) {
                            $values['need_id'] = $item['id'];
                            $values['need_name'] = $item['name'];
                            $values['need_text'] = $item['description'];
                            $values['need_phone'] = $item['phone'];
                            $values['need_email'] = $item['email'];
                            $values['needs'] .= $this->registry['template']->getReplaceTemplate('need-item-hidden', $values);
                            $f--;
                            if ($f <> 0) $values['needs'] .= "<hr>";
                        }
                }

                $values['helpers']="";
                $helper=$this->registry['helpers']->getUnConfHelpers();
                if (is_countable($helper)) {
                    $f=count($helper);
                    if ($f <> 0)
                        foreach ($helper as $item) {
                            $values['helper_id'] = $item['id'];
                            $values['helper_name'] = $item['name'];
                            $values['helper_text'] = $item['description'];
                            $values['helper_phone'] = $item['phone'];
                            $values['helper_email'] = $item['email'];
                            $values['helpers'] .= $this->registry['template']->getReplaceTemplate('helper-item-hidden', $values);
                            $f--;
                            if ($f <> 0) $values['helpers'] .= "<hr>";
                        }
                }
                $values['content'] = $this->registry['template']->getReplaceTemplate('moder', $values);
            }
        }
        else{
            $values["form-name"] = 'модераторов';
            $values['content'] = $this->registry['template']->getReplaceTemplate('auth', $values);
        }
        $content = $this->registry['template']->getReplaceTemplate('main', $values);
        echo $content;
    }
}
