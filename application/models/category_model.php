<?php
class Category_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get_categories($id = false){
		if ($id === false){
			$query = $this->db->get('category');
			return $query->result_array();
		}
		$query = $this->db->get_where('category', array('id' => $id));
		return $query->row_array();
	}
	
	public function save(){
		$data = array(
			'id' => $this->input->post('ID'),
			'category_name' => $this->input->post('name'),
		);
		if ($this->input->post('ID') == "new"){
			$this->db->insert('category', $data);
		}
		else{
			$this->db->where('id', $this->input->post('ID'));
			$this->db->update('category', $data);
		}
	}
}