<?php

class Plugin_fetch extends Plugin
{

	public function index()
	{
		$type = strtoupper($this->fetchParam(array('type', 'method'), 'get'));
		$key = $this->fetchParam('key', false, null, null, false);
		$arr = ($type == 'GET') ? $_GET : $_POST;

		if (isset($arr[$key])) {
			return $arr[$key];
		} else {
			return false;
		}
	}

}
