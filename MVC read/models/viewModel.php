<?php
class viewModel{

	public function _constract(){

	}

	public function getView($pagename = '', $data = array()){

		include $pagename;
	}

}
?>