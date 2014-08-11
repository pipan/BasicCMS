<?php
class Category extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('category_model');
		$this->load->view('templates/HeaderMenuItem');
	}

	public function index(){
		$data['category'] = $this->category_model->get_categories();
		$data['title'] = "Category";
		$data['menu_item_clicked'] = 2;
		
		$this->load->view('templates/header', $data);
		$this->load->view('category/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit($id){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('ID', 'fatal error', 'required');
		if ($this->form_validation->run() === FALSE){
			$data['category'] = $this->category_model->get_categories($id);
			$data['title'] = "Category [".$id."]";
			$data['menu_item_clicked'] = 2;
			
			$this->load->view('templates/header', $data);
			$this->load->view('category/edit', $data);
			$this->load->view('templates/footer', $data);
		}
		else{
			$this->category_model->save();
			redirect("category/");
		}
	}
	
	public function new_category(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('ID', 'fatal error', 'required');
		
		//ak sa to nepodarilo odoslat alebo to bolo zle odoslane
		if ($this->form_validation->run() === FALSE){
			$data['title'] = "new Category";
			$data['menu_item_clicked'] = 2;
			
			$this->load->view('templates/header', $data);
			$this->load->view('category/new_category', $data);
			$this->load->view('templates/footer', $data);
		}
		else{
			$this->category_model->save();
			redirect("category");
		}
		
	}
}