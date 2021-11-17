<?php
Class Controller_info Extends Controller_Base {
	
        function index($text='rules') {
            $values[]='';
				$content = $this->registry['template']->getReplaceTemplate('main', $values);
            echo $content;
        }
		function rules() {
			$this->index('rules');
		}
		function taboo() {
			$this->index('taboo');
		}
		function packing() {
			$this->index('packing');
		}
		function express() {
			$this->index('express');
		}
		function assembled() {
			$this->index('assembled');
		}
		function about() {
			$this->index('about');
		}
		function contact() {
			$this->index('contact');
		}
}
?>