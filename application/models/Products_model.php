<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->date = date('Y-m-d h:i:s');
    }
	public function setProduct($photo=null,$image_1=null,$image_2=null,$image_3=null){
		$data=array(
		        'category'    => $this->input->post('category'),   
		        'subcategory' => $this->input->post('subcategory'),
		        'name'        => $this->input->post('name'),
				'code'        => $this->input->post('code'),
				'description' => $this->input->post('description'),
				'unit'        => $this->input->post('unit'),
		        'qty'         => $this->input->post('qty'),
				'mrp'         => $this->input->post('mrp'),
		        'offer_price' => $this->input->post('offer_price'),
		        'status'      => '1',
			    'photo'       => $photo,
                'image_1'     => $image_1,
                'image_2'     => $image_2,
                'image_3'     => $image_3,
                'created_at'  => $this->date,
				'updated_at'  => $this->date
			);	 
		 	
		$this->db->insert('products',$data);
        $id = $this->db->insert_id();	

		if($id > 0){
            return true;
		}
		else{
			return false;
		}
        	   
        	   
              
        
	}
	public function updateProduct(){
		$id = $this->input->post('product_id');
		$data=array(
		        'category'    => $this->input->post('category'),   
		        'subcategory' => $this->input->post('subcategory'),
		        'name'        => $this->input->post('name'),
				'code'        => $this->input->post('code'),
				'description' => $this->input->post('description'),
				'unit'        => $this->input->post('unit'),
		        'qty'         => $this->input->post('qty'),
				'mrp'         => $this->input->post('mrp'),
		        'offer_price' => $this->input->post('offer_price'),
				'updated_at'  => $this->date
			);	 
		$this->db->where('id',$id); 	
		$this->db->update('products',$data);
		return 1;
        
        
	}
	public function isCodeUnique($str){
	    $this->db->select('code');
		$this->db->where('code', $str);
        $this->db->from('products');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return 1;
	    } 
		else {
			return 0;
		}
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
	public function getProductByKeyword($limit,$start){
	    $keyword=$this->input->post('search');
		$category=$this->input->post('category');
		$subcategory=$this->input->post('subcategory');
	    if($category!=''){
	        $this->db->where('category',$category);
			$this->db->where('subcategory',$subcategory);
	    }
	    elseif($keyword!=''){
	        $this->db->where("products.name LIKE '$keyword%' OR products.code LIKE '$keyword%'");
	    }
		$this->db->select('products.*,category.name as cat_name,subcategory.name as subcat_name');
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
	public function getProductsCount($category=NULL,$subcategory=NULL){
	     return $this->db->count_all("products");	
	}
	public function getProductById($id){
		$this->db->select('products.*,category.name as cat_name,subcategory.name as subcat_name');
		$this->db->where('products.id', $id);
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
	public function deleteProduct($id){
		$this->db->where('id', $id);
        $this->db->delete('products');
		return 1;
	}
	public function updateProductImage($data){
		$this->db->where('id', $data['id']);
        $this->db->update('products', $data);
		return 1;
	}
	public function changeProductStatus($data){
		$this->db->where('id', $data['id']);
        $this->db->update('products', $data);
		return 1;
	}
	public function getAllProducts($keyword=NULL){
		$this->db->select('*');
        
        if($keyword!=''){
            $this->db->where("(name LIKE '%".$keyword."%' OR code LIKE '%".$keyword."%')", NULL, FALSE);
        }
        $this->db->from('products');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getvendorProducts($vendorid){
		$query=$this->db->query("SELECT products.* FROM `products` JOIN vendor_products ON products.id=vendor_products.productid WHERE vendor_products.vendorid=$vendorid");
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function updateProductRow($id,$field,$value){
        $data=array($field => $value);
        $this->db->where('id',$id);
        $this->db->update('products',$data);
    }
	
}