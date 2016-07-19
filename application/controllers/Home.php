<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends Ci_controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{		
		$var['title'] = 'Home';		
		$var['load_view'] = 'pages/home';
		$this->load->view('main_template',$var);
	}
	
	public function about()
	{		
		$var['title'] = 'About Us';
		$var['load_view'] = 'pages/about';
		$this->load->view('main_template',$var);
	}
	
	public function services()
	{		
		$var['title'] = 'Services';
		$var['load_view'] = 'pages/services';
		$this->load->view('main_template',$var);
	}
	public function portfolio()
	{		
		$var['title'] = 'Portfolio';
		$var['load_view'] = 'pages/portfolio';
		$this->load->view('main_template',$var);
	}
	public function blog1()
	{		
		$var['title'] = 'Blog Item';
		$var['load_view'] = 'pages/blog1';
		$this->load->view('main_template',$var);
	}
	public function pricing()
	{		
		$var['title'] = 'Pricing';
		$var['load_view'] = 'pages/pricing';
		$this->load->view('main_template',$var);
	}
	public function shortcodes()
	{		
		$var['title'] = 'Shortcodes';
		$var['load_view'] = 'pages/shortcodes';
		$this->load->view('main_template',$var);
	}
	public function blog()
	{		
		$var['title'] = 'Blog';
		$var['load_view'] = 'pages/blog';
		$this->load->view('main_template',$var);
	}
	public function contact()
	{		
		$var['title'] = 'Contact';
		$var['load_view'] = 'pages/contact';
		$this->load->view('main_template',$var);
	}
	
	
}
