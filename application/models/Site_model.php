<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site_model extends CI_Model {

    public function __construct() {
        parent::__construct();
       
	}
	public function getBanners(){
			 
		$this->db->select('*');
		$this->db->from('banner');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} 
		else {
			return 0;
		}
	}
	public function getCategories(){
		 
		$this->db->select('*');
        $this->db->from('category');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getBrands(){
		 
		$this->db->select('*');
        $this->db->from('brand');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getProductsCount($category=NULL,$subcategory=NULL){
		return $this->db->count_all("products");	
    }
	public function getProducts($limit, $start){
		$this->db->select('products.*,category.name as cat_name,subcategory.name as subcat_name');
		$this->db->limit($limit, $start);
        $this->db->from('products');
		$this->db->join('category','category.id = products.category');
		$this->db->join('subcategory','subcategory.id = products.subcategory');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
}