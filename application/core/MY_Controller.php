<?php 

class MY_Controller extends CI_Controller
{
	public $title = 'Puding';

	public function __construct()
	{
		parent::__construct();
	}

	public function template($data)
	{
		if (!isset($data['css']))
			$data['css'] = [];
		return $this->load->view('template/template', $data);
	}

	public function POST($name)
	{
		return $this->input->post($name);
	}


	public function flashmsg($msg, $type = 'success')
	{
		return $this->session->set_flashdata('msg', '<div class="alert alert-'.$type.'">'.$msg.'</div>');
	}

	public function dump($var)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */