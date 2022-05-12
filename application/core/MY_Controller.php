<?php
class MY_Controller extends CI_Controller
{
	function __construct() {

		parent::__construct();
		if(is_admin_logged_in() == IS_ACTIVE_NO) {
			redirect(BACKOFFICE.'login');
		}
		if(is_admin_locked() == IS_ACTIVE_YES)
		{
			$ignoreName = $this->uri->segment(2);
			$ignoreListAr = array('logout');
			if(!in_array($ignoreName, $ignoreListAr))
			{
				redirect(BACKOFFICE.'lock');
			}
		}

		/*if(!($this->session->userdata('role') == SUPER_ADMIN))
		{
			$className = $this->router->fetch_class();
			$methodName = $this->router->fetch_method();
			$permission = checkPermission($className,$methodName);
			if(!$permission)
			{
				redirect('denied');
			}
		}*/
	}
}