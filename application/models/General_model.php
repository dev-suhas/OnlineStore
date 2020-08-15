<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class General_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->date=date('Y-m-d');
    }
	public function checkLogin($data){
		$this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		     return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getEnquiryCount(){
		$query = $this->db->query("SELECT COUNT(id) as enquiry_count FROM `enquiry` WHERE DATE(date)=CURDATE()");
	    if ($query->num_rows() > 0) {
		    return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getCustomerCount(){
		$query = $this->db->query("SELECT COUNT(id) as customer_count FROM `customer`");
	    if ($query->num_rows() > 0) {
		    return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getProductCount(){
		$query = $this->db->query("SELECT COUNT(id) as product_count FROM `products`");
	    if ($query->num_rows() > 0) {
		    return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getOrderCount(){
		$query = $this->db->query("SELECT COUNT(id) as order_count FROM `order_summary`");
	    if ($query->num_rows() > 0) {
		    return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getOrderCountPending(){
		$query = $this->db->query("SELECT COUNT(id) as order_count_pending FROM `order_summary` WHERE order_status=0");
	    if ($query->num_rows() > 0) {
		    return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getOrderCountDelivered(){
		$query = $this->db->query("SELECT COUNT(id) as order_count_delivered FROM `order_summary` WHERE order_status=1");
	    if ($query->num_rows() > 0) {
		    return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getRating(){
		$query = $this->db->query("SELECT COUNT(id) as order_count_delivered FROM `order_summary` WHERE order_status=1");
	    if ($query->num_rows() > 0) {
		    return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function getNotifications(){
	    $date=date('Y-m-d');
	    $query = $this->db->query("SELECT orderno FROM `order_summary` WHERE order_status=0 AND is_read=0 ORDER BY order_date desc");
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function getEnquiries(){
	    $date=date('Y-m-d');
	    $query = $this->db->query("SELECT id,subject FROM `enquiry`  WHERE DATE(date)=CURDATE() ORDER BY date desc");
	    if ($query->num_rows() > 0) {
		    return $query->result_array();
	    } 
		else {
			return 0;
		}
	}
	public function markAsReadEnq($id){
	    $this->db->set('is_read',1);
	    $this->db->where('id',$id);
	    $this->db->update('enquiry');
	    return 1;
	}
	public function markAsRead($id){
	    $this->db->set('is_read',1);
	    $this->db->where('orderno',$id);
	    $this->db->update('order_summary');
	    return 1;
	}
	public function getSettings(){
	    $this->db->select('*');
        $this->db->from('app_settings');
		$query = $this->db->get();
	    if ($query->num_rows() > 0) {
		     return $query->row_array();
	    } 
		else {
			return 0;
		}
	}
	public function setSettings($data){
	    $this->db->where('id',$data['id']);
	    $this->db->update('app_settings',$data);
	    return 1;
	}
	public function getEnquiry(){
	    $query = $this->db->query("SELECT enquiry.*,customer.name,customer.phone FROM `enquiry` JOIN customer ON enquiry.user_id = customer.id  ORDER BY date desc");
	    if ($query->num_rows() > 0) {
		     return $query->result_array();
	    } 
		else {
			 return array();
		}
	}
	
}