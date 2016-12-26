<?php 

class Login extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['title'] 	= 'Login | ' . $this->title;
		$this->data['css']		= ['301'];	// assets/ui/css/style-301.css = login ui-301.html
		$this->data['content']	= 'login/login';
		$this->template($this->data);
	}

	public function template_doc()
	{
		$this->load->view('documentation/doc');
	}

	public function template_components()
	{
		redirect(base_url('assets/html/index.html'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */