<?php

class Shoes extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code

        $math = rand(0, 10);
    }

	public function index()
	{
		echo 'I\'m very crazy about shoes and my shoe size is now ' . $math; 
	}

	public function brand($brand = null)
	{
		$brand = remove_invisible_characters('Java\\0script');
		echo $brand;
	}
	
} 