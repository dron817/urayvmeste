<?php
Class Controller_info Extends Controller_Base {
	
        function index($text='rules') {
            $values['title'] = "Югра вместе";
            $values['content']=$this->registry['template']->getReplaceTemplate('sps');
				$content = $this->registry['template']->getReplaceTemplate('main', $values);
            echo $content;
        }
		function sps() {
			$this->index('sps');
		}
}
?>