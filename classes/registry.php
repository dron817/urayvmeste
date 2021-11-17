<?php

Class Registry Implements ArrayAccess {
    private $vars = array();
	
	public function __construct() {
		$this->vars['db_host'] = "localhost";
		$this->vars['db_username'] = "root";
		$this->vars['db_pswd'] = "12341234";
		$this->vars['db_name'] = "a237567_urayvmes";
		//for srv
        $this->vars['db_username'] = "a237567_urayvmes";
        $this->vars['db_pswd'] = "f4ed43a3";

		$this->vars['pswd_secret'] = "_gs";
		$this->vars['table_secret'] = "gs_";
		$this->vars['adress'] = "/"; //TODO
		$this->vars['msg_link'] = "index.php?route=msg";
		$this->vars['helpers_link'] = "index.php?route=helpers";
		$this->vars['needs_link'] = "index.php?route=needs";
		$this->vars['organizations_link'] = "index.php?route=organizations";
		$this->vars['items_on_page'] = 4;
	}
	
	function offsetExists($offset) {
			return isset($this->vars[$offset]);
	}

	function offsetGet($offset) {
			return $this->get($offset);
	}

	function offsetSet($offset, $value) {
			$this->set($offset, $value);
	}

	function offsetUnset($offset) {
			unset($this->vars[$offset]);
	}

	function set($key, $var) {
			if (isset($this->vars[$key]) == true) {
					throw new Exception('Unable to set var `' . $key . '`. Already set.');
			}
			$this->vars[$key] = $var;
			return true;
	}

	function get($key) {
			if (isset($this->vars[$key]) == false) {
					return null;
			}
			return $this->vars[$key];
	}

	function remove($key) {
			unset($this->vars[$key]);
	}
}


?>