<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
       
	}
	public function getBanner(){
		$this->db->select('*');
        $this->db->from('banner');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return array();
		}
	}
   public function setCategory($data) {
		
		if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('category', $data);
        }  else {
             $this->db->insert('category', $data);
             return $this->db->insert_id(); 
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
	public function updateCategoryImage($data){
		$this->db->where('id', $data['id']);
        $this->db->update('category', $data);
		return 1;
	}
	public function getCategoriesById($id){
		 
		$this->db->select('*');
        $this->db->from('category');
		$this->db->where('id',$id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function deleteCategory($id){
		$this->db->where('id', $id);
        $this->db->delete('category');
		return 1;
	}
	public function updateSubCategoryImage($data){
		$this->db->where('id', $data['id']);
        $this->db->update('subcategory', $data);
		return 1;
	}	
	public function getSubCategories(){
		$this->db->select('subcategory.id,subcategory.category_id,subcategory.name,subcategory.description,subcategory.photo,subcategory.profit_percentage,subcategory.status,category.name as cat_name');
        $this->db->from('subcategory');
		$this->db->join('category','category.id = subcategory.category_id');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getSubCategoriesById($id){
		$this->db->select('subcategory.id,subcategory.category_id,subcategory.name,subcategory.description,subcategory.photo,subcategory.profit_percentage,subcategory.status,category.name as cat_name');
        $this->db->from('subcategory');
		$this->db->join('category','category.id = subcategory.category_id');
		$this->db->where('subcategory.id',$id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getSubcategoryByCategoryId($id){
		$this->db->select('subcategory.id,subcategory.name,subcategory.description,subcategory.photo,subcategory.profit_percentage,subcategory.status,category.name as cat_name');
        $this->db->from('subcategory');
		$this->db->join('category','category.id = subcategory.category_id');
        $this->db->where('category_id',$id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getproductsByCategoryId($id){
		$this->db->select('*');
        $this->db->from('products');
        $this->db->where('category',$id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function deleteSubcategory($id){
		$this->db->where('id', $id);
        $this->db->delete('subcategory');
		return 1;
	}
	
	public function setUnit($data) {
		
		if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('unit', $data);
        } else {
             $this->db->insert('unit', $data);
             return $this->db->insert_id(); 
        }
	}
	
	public function getUnits(){
		$this->db->select('*');
        $this->db->from('unit');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getUnitsById($id){
		$this->db->select('*');
        $this->db->from('unit');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function deleteUnit($id){
		$this->db->where('id', $id);
        $this->db->delete('unit');
		return 1;
	}
	
	
	// State Master
	public function getStates(){
		$this->db->select('*');
        $this->db->from('state');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function setState($data) {
		
		if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('state', $data);
        } else {
             $this->db->insert('state', $data);
             return $this->db->insert_id(); 
        }
	}	
	public function getStatesById($id){
		$this->db->select('*');
        $this->db->from('state');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getDistricts(){
		$this->db->select('district.*,state.name as state');
        $this->db->from('district');
		$this->db->join('state','state.id = district.state_id');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	
	// State Master
	
	public function setDistrict($data) {
		
		if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('district', $data);
        } else {
             $this->db->insert('district', $data);
             return $this->db->insert_id(); 
        }
	}	
	public function getDistrictById($id){
		$this->db->select('*');
		$this->db->where('id', $id);
        $this->db->from('district');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}


	public function getColors(){
		$this->db->select('*');
        $this->db->from('color');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function setColor($data) {
		
		if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('color', $data);
        } else {
             $this->db->insert('color', $data);
             return $this->db->insert_id(); 
        }
	}	
	public function getColorById($id){
		$this->db->select('*');
        $this->db->from('color');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	// Brand Master
	
	public function setBrand($data) {
		
		if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('brand', $data);
        }  else {
             $this->db->insert('brand', $data);
             return $this->db->insert_id(); 
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
	public function updateBrandImage($data){
		$this->db->where('id', $data['id']);
        $this->db->update('brand', $data);
		return 1;
	}
	public function getBrandsById($id){
		 
		$this->db->select('*');
        $this->db->from('brand');
		$this->db->where('id',$id);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function deleteBrands($id){
		$this->db->where('id', $id);
        $this->db->delete('brand');
		return 1;
	}

		// Banner Master
	
		public function setBanner($data) {
		
			if (isset($data['id'])) {
				$this->db->where('id', $data['id']);
				$this->db->update('banner', $data);
			}  else {
				 $this->db->insert('banner', $data);
				 return $this->db->insert_id(); 
			}
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
		public function updateBannerImage($data){
			$this->db->where('id', $data['id']);
			$this->db->update('banner', $data);
			return 1;
		}
		public function getBannerById($id){
			 
			$this->db->select('*');
			$this->db->from('banner');
			$this->db->where('id',$id);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result_array();
			} 
			else {
				return 0;
			}
		}
		public function deleteBanner($id){
			$this->db->where('id', $id);
			$this->db->delete('banner');
			return 1;
		}
























	// End
	
}