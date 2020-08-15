<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['banners']=$this->site_model->getBanners();
		$data['categories']=$this->site_model->getCategories();
		$data['brands']=$this->site_model->getBrands();
		$this->load->view('site/layout/header');
		$this->load->view('site/index',$data);
		$this->load->view('site/layout/footer');
	}
	public function shop()
	{
		$config = array();
        $config["base_url"] = base_url('welcome/shop');
        $config["total_rows"] = $this->site_model->getProductsCount();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
		
		
	    $config['full_tag_open'] = '<div class="pro-pagination-style text-center"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li  class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a class="active" href="#">';
        $config['cur_tag_close'] = '</a></li>';
         
		$config['prev_tag_open'] = '<li><a class="prev" href="#">';
		$config['prev_link'] = '<i class="ion-ios-arrow-left"></i>';
        $config['prev_tag_close'] = '</a></li>';

		$config['next_tag_open'] = '<li><a class="next" href="#">';
        $config['next_link'] = '<i class="ion-ios-arrow-right"></i>';
        $config['next_tag_close'] = '</a></li>';

        $this->pagination->initialize($config);
        
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['products']=$this->site_model->getProducts($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data['categories']=$this->site_model->getCategories();
		$data['brands']=$this->site_model->getBrands();
		$this->load->view('site/layout/header');
		$this->load->view('site/shop',$data);
		$this->load->view('site/layout/footer');
	}
	function about(){
		$this->load->view('site/layout/header');
		$this->load->view('site/about');
		$this->load->view('site/layout/footer');
	}
	function contact(){
		$this->load->view('site/layout/header');
		$this->load->view('site/contact');
		$this->load->view('site/layout/footer');
	}
	function login(){
		$this->load->view('site/layout/header');
		$this->load->view('site/login');
		$this->load->view('site/layout/footer');
	}
}
