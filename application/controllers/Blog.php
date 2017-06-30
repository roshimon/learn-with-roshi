<?php

class Blog extends CI_Controller {

	// public function _remap($method, $params = [])
	// {
	// 	if (method_exists($this, $method)) {

	// 		return call_user_func_array([$this, $method], $params);
	// 	}

	// 	show_404();

	// }

	public function _output($output)
	{
		echo $output;
	}
	
	public function index()
	{
		//var_dump($config['base_url']);

		//echo "nnn".base_url(); exit;

		// var_dump(base_url());
		// die;
		$data = [
	        'title' => 'Learn With Roshi',
	        'heading' => 'Learn real time with me as I do live coding',
	        'message' => 'It\'s going to be fun and together we can learn hell of a lot',
	        'todo_list' => ['Clean House', 'Call Mom', 'Run Errands']
		];

		$this->load->view('blogs/blog_view', $data);
	}

	public function comments($positive = null)
	{
		if (! is_null($positive)) {
			echo ($positive === 'positive') ? 'Thanks for your positive comments ' : 'Very bad habit ';
		}
		//die($positive);
		echo  "Don't post hurting comments";
	}

	public function save()
	{
		$this->load->database('default');
		$this->load->model('blog_model');
		//var_dump($_POST['title']);
	}
} 