<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
		if(empty($this->session->admin)){
            redirect('index.php/admin/','refresh');
         }
	    $this->loggedIn=$this->session->admin;
	}
	// Dashboard
	public function dashboard(){
		$data['product']=$this->general_model->getProductCount();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/layouts/admin_footer');
		
	}
	public function view(){
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/demo_view');
		$this->load->view('admin/layouts/admin_footer');
	}
    public function settings(){
	    $data['settings']=$this->general_model->getSettings();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/settings',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	public function settings_update($id){
	    $this->form_validation->set_rules('distance', 'Distance', 'required');
	   
	    
	    
		if ($this->form_validation->run() === FALSE){
		      $this->load->view('admin/layouts/admin_header');
		      $this->load->view('admin/settings',$data);
		      $this->load->view('admin/layouts/admin_footer');
		}
		else{
		   $data=array(
		        'id'               =>$id,
		        'search_distance'  =>$this->input->post('distance'),
		        'customer_care'    =>$this->input->post('customer_care'),
			);
			$this->general_model->setSettings($data);
			$msg="Changes Saved";
			redirect('admin/admin/settings','refresh');
		}
	}
	public function add(){
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/demo_add');
		$this->load->view('admin/layouts/admin_footer');
	}
	// Master Settings
	
	// Category Starts
	// Add Category
	public function addNewCategory(){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    
		if ($this->form_validation->run() === FALSE){
			
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/category/category_add');
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
		        'name'        =>$this->input->post('name'),
		        'status'      =>'1',
		        'description' =>$this->input->post('description'),
			);
            
			$id=$this->category_model->setCategory($data);
		    $configImage['upload_path']          = './uploads/category';
            $configImage['allowed_types']        = 'gif|jpg|png|jpeg';
            $configImage['max_width']            = 450;
            $configImage['max_height']           = 170;
            $configImage['remove_spaces'] = TRUE;
            
            $this->load->library('upload', $configImage);
            $this->upload->initialize($configImage);
            if (!$this->upload->do_upload('icon')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $imageData =  $this->upload->data();
				$photo = 'uploads/category/'.$imageData['file_name'];
				$upload_data = array('id' => $id, 'photo' => $photo);
                $this->category_model->updateCategoryImage($upload_data);
			}
			$msg="Category Added";
			redirect('admin/admin/category_view');
		} 	
           
	}	
	
	// List Category
	public function category_view(){
		$data['category_list']=$this->category_model->getCategories();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/category/category_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}

	// Edit Category
	public function edit_category($id){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['category_list']=$this->category_model->getCategoriesById($id);
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/category/category_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
			    'id'          =>$id,
		        'name'        =>$this->input->post('name'),
		        'status'      =>'1',
		        'description' =>$this->input->post('description'),
			);
			$id=$this->category_model->setCategory($data);
            $msg="Category Updated";
			redirect('admin/admin/category_view');
		} 	
           
	}
	// Delete Category
	public function delete_category($id){
		$result=$this->category_model->deleteCategory($id);
		$msg="Category Deleted";
		redirect('admin/admin/category_view');
	}
	// Change Category Image
	public function change_category_image($id){
		$configImage['upload_path']          = './uploads/category';
		$configImage['allowed_types']        = 'gif|jpg|png|jpeg';
		$configImage['max_width']            = 450;
		$configImage['max_height']           = 170;
		$configImage['remove_spaces'] = TRUE;
		
		$this->load->library('upload', $configImage);
		$this->upload->initialize($configImage);
		if (!$this->upload->do_upload('image')){
			$imageError = array('error' => $this->upload->display_errors());
		}
		else{
			$imageData =  $this->upload->data();
			$photo = 'uploads/category/'.$imageData['file_name'];
			$upload_data = array('id' => $id, 'photo' => $photo);
			$this->category_model->updateCategoryImage($upload_data);
		}
	    $msg="Category Updated";
		redirect('admin/admin/category_view/');
		
	}
    // Category Ends

	public function change_subcategory_image($id){
		 $filePath=base_url().'/uploads/category/'.$id;
		 delete_files($filePath);

		if (isset($_FILES["image"]) && !empty($_FILES['image']['name'])){
		         $uploaddir = './uploads/category/';
                  if (!is_dir($uploaddir) && !mkdir($uploaddir)) {
                         $message="Error creating folder".$uploaddir;
                   }
		           else{
                         $fileInfo = pathinfo($_FILES["image"]["name"]);
                         $img_name = $id . '.' . $fileInfo['extension'];
                         move_uploaded_file($_FILES["image"]["tmp_name"], $uploaddir . $img_name);
				         $upload_data = array('id' => $id, 'photo' => 'uploads/category/'.$img_name);
                         $this->category_model->updateSubCategoryImage($upload_data);
		                 $msg="Sub Category Updated";
			             redirect('admin/admin/edit_subcategory/'.$id);
			      }
		    }
	}
	public function add_subcategory(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    
		if ($this->form_validation->run() === FALSE){
			
           $data['category_list']=$this->category_model->getCategories();
		   $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/subcategory/subcategory_add',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
		        'name'        =>$this->input->post('name'),
		        'category_id' =>$this->input->post('category'),
		        'description' =>$this->input->post('description'),
			    'status'      =>'1',
			);
			$id=$this->category_model->setSubCategory($data);
		    if (isset($_FILES["icon"]) && !empty($_FILES['icon']['name'])){
                $uploaddir = './uploads/category/';
                if (!is_dir($uploaddir) && !mkdir($uploaddir)) {
                    $message="Error creating folder".$uploaddir;
                }
                else{
                    $fileInfo = pathinfo($_FILES["icon"]["name"]);
                    $img_name = $id . '.' . $fileInfo['extension'];
                    move_uploaded_file($_FILES["icon"]["tmp_name"], $uploaddir . $img_name);
                    $upload_data = array('id' => $id, 'photo' => 'uploads/category/'.$img_name);
                    $this->category_model->setSubCategory($upload_data);
                    $msg="Unit Sub Category";
                    redirect('admin/admin/subcategory_view');
                }
		    }
		}
	}
	public function subcategory_view(){
		$data['subcategory_list']=$this->category_model->getSubCategories();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/subcategory/subcategory_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	public function edit_subcategory($id){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    
		if ($this->form_validation->run() === FALSE){
			
           $data['category_list']=$this->category_model->getCategories();
		   $data['subcategory_list']=$this->category_model->getSubCategoriesById($id);
		   $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/subcategory/subcategory_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
			    'id'          =>$id,
		        'name'        =>$this->input->post('name'),
		        'category_id' =>$this->input->post('category'),
		        'description' =>$this->input->post('description'),
			    'status'      =>'1',
			);
			$id=$this->category_model->setSubCategory($data);
			$msg="Updated";
			redirect('admin/admin/subcategory_view');
		}
	}
	public function view_subcategory($id){
		$data['subcategory_list']=$this->category_model->getSubCategoriesById($id);
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/subcategory/view_subcategory',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	public function delete_subcategory($id){
		$result=$this->category_model->deleteSubcategory($id);
	 	$msg="Deleted";
		redirect('admin/admin/subcategory_view');
	}
	public function add_unit(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('symbol', 'Symbol', 'required');
		$this->form_validation->set_rules('base', 'Base', 'required');
	    
		if ($this->form_validation->run() === FALSE){
			
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/unit/unit_add');
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
		        'name'        =>$this->input->post('name'),
		        'status'      =>'1',
		        'symbol'      =>$this->input->post('symbol'),
			    'base'        =>$this->input->post('base'),
			);
			$id=$this->category_model->setUnit($data);
			$msg="Unit Saved";
			redirect('admin/admin/unit_view');
		}
		
	}
	public function edit_unit($id){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('symbol', 'Symbol', 'required');
		$this->form_validation->set_rules('base', 'Base', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['unit_list']=$this->category_model->getUnitsById($id);
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/unit/unit_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
			    'id'          =>$id,
		        'name'        =>$this->input->post('name'),
		        'status'      =>'1',
		        'symbol'      =>$this->input->post('symbol'),
			    'base'        =>$this->input->post('base'),
			);
			$id=$this->category_model->setUnit($data);
			$msg="Unit Updated";
			redirect('admin/admin/unit_view');
		}
		
	}
	public function unit_view(){
		$data['unit_list']=$this->category_model->getUnits();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/unit/unit_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	public function delete_unit($id){
		$result=$this->category_model->deleteUnit($id);
		$msg="Deleted";
		redirect('index.php/admin/admin/unit_view');
	}
	
	// State
	
	public function state_view(){
		$data['state_list']=$this->category_model->getStates();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/state/state_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	
	public function add_state(){
		$this->form_validation->set_rules('name', 'Name', 'required');
	    
		if ($this->form_validation->run() === FALSE){
			
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/state/state_add');
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
		        'name'        =>$this->input->post('name'),
		        'status'      =>'1',
			);
			$id=$this->category_model->setState($data);
			$msg="State Saved";
			redirect('admin/admin/state_view');
		}
		
	}
	public function edit_state($id){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['state_list']=$this->category_model->getStatesById($id);
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/state/state_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
			    'id'          =>$id,
		        'name'        =>$this->input->post('name'),
		        'status'      =>$this->input->post('status'),
			);
			$id=$this->category_model->setState($data);
			$msg="State Updated";
			redirect('admin/admin/state_view');
		}
		
	}
	
	// District 
	
	public function district_view(){
		$data['district_list']=$this->category_model->getDistricts();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/district/district_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	
	public function add_district(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['state_list']=$this->category_model->getStates();	
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/district/district_add',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
		        'name'        =>$this->input->post('name'),
				'state_id'    =>$this->input->post('state'),
		        'status'      =>'1',
			);
			$id=$this->category_model->setDistrict($data);
			$msg="District Saved";
			redirect('admin/admin/district_view');
		}
		
	}
	public function edit_district($id){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['state_list']=$this->category_model->getStates();	
		   $data['district_list']=$this->category_model->getDistrictById($id);
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/district/district_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
			    'id'          =>$id,
		        'name'        =>$this->input->post('name'),
				'state_id'    =>$this->input->post('state'),
		        'status'      =>$this->input->post('status'),
			);
			$id=$this->category_model->setDistrict($data);
			$msg="District Updated";
			redirect('admin/admin/district_view');
		}
		
	}
	
		// Color
	
		public function color_view(){
			$data['color_list']=$this->category_model->getColors();
			$this->load->view('admin/layouts/admin_header');
			$this->load->view('admin/color/color_view',$data);
			$this->load->view('admin/layouts/admin_footer');
		}
		
		public function add_color(){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('code', 'Code', 'required');
			
			if ($this->form_validation->run() === FALSE){
				
			   $this->load->view('admin/layouts/admin_header');
			   $this->load->view('admin/color/color_add');
			   $this->load->view('admin/layouts/admin_footer');
			}
			else{
			   $data=array(
					'name'        =>$this->input->post('name'),
					'code'        =>$this->input->post('code'),
				);
				$id=$this->category_model->setColor($data);
				$msg="Color Saved";
				redirect('admin/admin/color_view');
			}
			
		}
		public function edit_color($id){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('code', 'Code', 'required');
			
			if ($this->form_validation->run() === FALSE){
			   $data['state_list']=$this->category_model->getColorById($id);
			   $this->load->view('admin/layouts/admin_header');
			   $this->load->view('admin/color/color_edit',$data);
			   $this->load->view('admin/layouts/admin_footer');
			}
			else{
			   $data=array(
					'id'          =>$id,
					'name'        =>$this->input->post('name'),
					'code'      =>$this->input->post('code'),
				);
				$id=$this->category_model->setColor($data);
				$msg="Color Updated";
				redirect('admin/admin/color_view');
			}
			
		}
	
	
	
	// Brand Starts
	
	// Add Brand
	public function addNewBrand(){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    
		if ($this->form_validation->run() === FALSE){
			
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/brand/brand_add');
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
		        'name'        =>$this->input->post('name'),
		        'status'      =>'1',
		        'description' =>$this->input->post('description'),
			);
            
			$id=$this->category_model->setBrand($data);
		    $configImage['upload_path']          = './uploads/brand';
            $configImage['allowed_types']        = 'gif|jpg|png|jpeg';
            $configImage['max_width']            = 450;
            $configImage['max_height']           = 170;
            $configImage['remove_spaces'] = TRUE;
            
            $this->load->library('upload', $configImage);
            $this->upload->initialize($configImage);
            if (!$this->upload->do_upload('icon')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $imageData =  $this->upload->data();
				$photo = 'uploads/brand/'.$imageData['file_name'];
				$upload_data = array('id' => $id, 'photo' => $photo);
                $this->category_model->updateBrandImage($upload_data);
			}
			$msg="Brand Added";
			redirect('admin/admin/brand_view');
		} 	
           
	}	
	
	// List Brand
	public function brand_view(){
		$data['brand_list']=$this->category_model->getBrands();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/brand/brand_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}

	// Edit Brand
	public function edit_brand($id){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['brand_list']=$this->category_model->getBrandsById($id);
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/brand/brand_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
			    'id'          =>$id,
		        'name'        =>$this->input->post('name'),
		        'status'      =>'1',
		        'description' =>$this->input->post('description'),
			);
			$id=$this->category_model->setBrand($data);
            $msg="Brand Updated";
			redirect('admin/admin/brand_view');
		} 	
           
	}
	// Delete Brand
	public function delete_brand($id){
		$result=$this->category_model->deleteBrand($id);
		$msg="Brand Deleted";
		redirect('admin/admin/brand_view');
	}
	// Change Brand Image
	public function change_brand_image($id){
		$configImage['upload_path']          = './uploads/brand';
		$configImage['allowed_types']        = 'gif|jpg|png|jpeg';
		$configImage['remove_spaces'] = TRUE;
		
		$this->load->library('upload', $configImage);
		$this->upload->initialize($configImage);
		if (!$this->upload->do_upload('image')){
			$imageError = array('error' => $this->upload->display_errors());
		}
		else{
			$imageData =  $this->upload->data();
			$photo = 'uploads/brand/'.$imageData['file_name'];
			$upload_data = array('id' => $id, 'photo' => $photo);
			$this->category_model->updateBrandImage($upload_data);
		}
	    $msg="Brand Updated";
		redirect('admin/admin/brand_view/');
		
	}
    // Brand Ends
	
	
	// Banner Starts
	
	// Add Banner
	public function addNewBanner(){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
	    
		if ($this->form_validation->run() === FALSE){
			
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/banner/banner_add');
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
		        'name'        =>$this->input->post('name'),
			);
            
			$id=$this->category_model->setBanner($data);
		    $configImage['upload_path']          = './uploads/banner';
            $configImage['allowed_types']        = 'gif|jpg|png|jpeg';
            $configImage['max_width']            = 1920;
            $configImage['max_height']           = 660;
            $configImage['remove_spaces'] = TRUE;
            
            $this->load->library('upload', $configImage);
            $this->upload->initialize($configImage);
            if (!$this->upload->do_upload('icon')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $imageData =  $this->upload->data();
				$photo = 'uploads/banner/'.$imageData['file_name'];
				$upload_data = array('id' => $id, 'image' => $photo);
                $this->category_model->updateBannerImage($upload_data);
			}
			$msg="Banner Added";
			redirect('admin/admin/banner_view');
		} 	
           
	}	
	
	// List Banner
	public function banner_view(){
		$data['banner_list']=$this->category_model->getBanners();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/banner/banner_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}

	// Edit Banner
	public function edit_banner($id){
		
		$this->form_validation->set_rules('name', 'Name', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['banner_list']=$this->category_model->getBannerById($id);
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/banner/banner_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   $data=array(
			    'id'          =>$id,
		        'name'        =>$this->input->post('name'),
			);
			$id=$this->category_model->setBanner($data);
            $msg="Banner Updated";
			redirect('admin/admin/banner_view');
		} 	
           
	}
	// Delete Banner
	public function delete_banner($id){
		$result=$this->category_model->deleteBanner($id);
		$msg="Banner Deleted";
		redirect('admin/admin/banner_view');
	}
	// Change Banner Image
	public function change_banner_image($id){
		$configImage['upload_path']          = './uploads/banner';
		$configImage['allowed_types']        = 'gif|jpg|png|jpeg';
		$configImage['max_width']            = 1920;
        $configImage['max_height']           = 660;
		$configImage['remove_spaces'] = TRUE;
		
		$this->load->library('upload', $configImage);
		$this->upload->initialize($configImage);
		if (!$this->upload->do_upload('image')){
			$imageError = array('error' => $this->upload->display_errors());
		}
		else{
			$imageData =  $this->upload->data();
			$photo = 'uploads/banner/'.$imageData['file_name'];
			$upload_data = array('id' => $id, 'image' => $photo);
			$this->category_model->updateBannerImage($upload_data);
		}
	    $msg="Banner Updated";
		redirect('admin/admin/banner_view/');
		
	}
    // Banner Ends



	//Products
	
	public function products_view(){
		$config = array();
        $config["base_url"] = base_url() . "index.php/admin/admin/products_view";
        $config["total_rows"] = $this->products_model->getProductsCount();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
		
		 $config['full_tag_open'] = "<ul class='pagination'>";
         $config['full_tag_close'] = '</ul>';
         $config['num_tag_open'] = '<li  class="page-item">';
         $config['num_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         
         $config['prev_tag_open'] = '<li>';
         $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
         $config['prev_tag_close'] = '</li>';

         $config['next_tag_open'] = '<li>';
         $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
         $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['category_list']=$this->category_model->getCategories();
		$data['product_list']=$this->products_model->getProducts($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/products/products_view',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	public function add_product(){
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Sub Category', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('code', 'Code', 'required|callback_unique_code');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['category_list']=$this->category_model->getCategories();	
		   $data['unit_list']=$this->category_model->getUnits();	
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/products/products_add',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
			$photo='';
            $image_1='';
			$image_2='';
			$image_3='';
            $configImage['upload_path']          = './uploads/products';
            $configImage['allowed_types']        = 'gif|jpg|png';
            $configImage['max_size']             = 100;
            $configImage['max_width']            = 1024;
            $configImage['max_height']           = 768;
            $configImage['remove_spaces'] = TRUE;
            
            $this->load->library('upload', $configImage);
            $this->upload->initialize($configImage);
            if (!$this->upload->do_upload('image')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $imageData =  $this->upload->data();
                $photo = 'uploads/products/'.$imageData['file_name'];
            }
            if (!$this->upload->do_upload('image_1')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $image1Data =  $this->upload->data();
                $image_1 = 'uploads/products/'.$image1Data['file_name'];
            }
			if (!$this->upload->do_upload('image_2')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $image2Data =  $this->upload->data();
                $image_2 = 'uploads/products/'.$image2Data['file_name'];
            }
			if (!$this->upload->do_upload('image_3')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $image3Data =  $this->upload->data();
                $image_3 = 'uploads/products/'.$image3Data['file_name'];
            }
			$result=$this->products_model->setProduct($photo,$image_1,$image_2,$image_3);
		    if($result === true){
		        $msg="Product Saved";
		        $this->session->set_flashdata('msg',$msg);
			}
			else{
				$msg="Failed To Add Product";
		        $this->session->set_flashdata('msg',$msg);
			}
			redirect('admin/admin/products_view');
		    
		}
	}
	public function getproductsByCategoryId(){
		$id=$this->input->post('id');
		$data = $this->category_model->getproductsByCategoryId($id);
        echo json_encode($data);
		
	}
	public function unique_code($str) {
	            $code=$this->products_model->isCodeUnique($str);
                if ($code!=0) {
                        $this->form_validation->set_message('unique_code', $str.' already exists! ');
                        return FALSE;
                }
                else{
                        return TRUE;
                }
        }
	public function getSubcategoryByCategoryId(){
		$id=$this->input->post('id');
		$data = $this->category_model->getSubcategoryByCategoryId($id);
        echo json_encode($data);
	}
	public function edit_product($id){
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('subcategory', 'Sub Category', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		   $data['category_list']=$this->category_model->getCategories();	
		   $data['unit_list']=$this->category_model->getUnits();
		   $data['product_list']=$this->products_model->getProductById($id);
           $this->load->view('admin/layouts/admin_header');
		   $this->load->view('admin/products/products_edit',$data);
		   $this->load->view('admin/layouts/admin_footer');
        }
        else{
		   
			$id=$this->products_model->updateProduct();
			$msg="Product Updated";
			redirect('admin/admin/products_view');
		
		}
	}
	public function delete_product($id){
		$result=$this->products_model->deleteProduct($id);
		$msg="Deleted";
		redirect('admin/admin/products_view');
	}
	public function view_product($id){
		$data['product_list']=$this->products_model->getProductById($id);
		$this->load->view('admin/layouts/admin_header');
		$this->load->view('admin/products/view_products',$data);
		$this->load->view('admin/layouts/admin_footer');
	}
	public function change_product_image($id){
		 $filePath=base_url().'/uploads/products/'.$id;
		 delete_files($filePath);

		if (isset($_FILES["image"]) && !empty($_FILES['image']['name'])){
		         $uploaddir = './uploads/products/';
                  if (!is_dir($uploaddir) && !mkdir($uploaddir)) {
                         $message="Error creating folder".$uploaddir;
                   }
		           else{
                         $fileInfo = pathinfo($_FILES["image"]["name"]);
                         $img_name = $id . '.' . $fileInfo['extension'];
                         move_uploaded_file($_FILES["image"]["tmp_name"], $uploaddir . $img_name);
				         $upload_data = array('id' => $id, 'photo' => 'uploads/products/'.$img_name);
                         $this->products_model->updateProductImage($upload_data);
		                 $msg="Product Saved";
			             redirect('admin/admin/view_product/'.$id);
			      }
		    }
	}
	public function change_product_image1($id){
            $configImage['upload_path']          = './uploads/products';
            $configImage['allowed_types']        = 'gif|jpg|png';
            $configImage['max_size']             = 100;
            $configImage['max_width']            = 1024;
            $configImage['max_height']           = 768;
            $configImage['remove_spaces'] = TRUE;
            
            $this->load->library('upload', $configImage);
            $this->upload->initialize($configImage);
            if (!$this->upload->do_upload('image_1')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $imageData =  $this->upload->data();
                $photo = 'uploads/products/'.$imageData['file_name'];
				$upload_data = array('id' => $id, 'image_1' => 'uploads/products/'.$photo);
            }
		$this->products_model->updateProductImage($upload_data);	
	}
	public function change_product_image2($id){
            $configImage['upload_path']          = './uploads/products';
            $configImage['allowed_types']        = 'gif|jpg|png';
            $configImage['max_size']             = 100;
            $configImage['max_width']            = 1024;
            $configImage['max_height']           = 768;
            $configImage['remove_spaces'] = TRUE;
            
            $this->load->library('upload', $configImage);
            $this->upload->initialize($configImage);
            if (!$this->upload->do_upload('image_2')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $imageData =  $this->upload->data();
                $photo = 'uploads/products/'.$imageData['file_name'];
				$upload_data = array('id' => $id, 'image_2' => 'uploads/products/'.$photo);
            }
		$this->products_model->updateProductImage($upload_data);	
	}
	public function change_product_image3($id){
            $configImage['upload_path']          = './uploads/products';
            $configImage['allowed_types']        = 'gif|jpg|png';
            $configImage['max_size']             = 100;
            $configImage['max_width']            = 1024;
            $configImage['max_height']           = 768;
            $configImage['remove_spaces'] = TRUE;
            
            $this->load->library('upload', $configImage);
            $this->upload->initialize($configImage);
            if (!$this->upload->do_upload('image_3')){
                $imageError = array('error' => $this->upload->display_errors());
            }
            else{
                $imageData =  $this->upload->data();
                $photo = 'uploads/products/'.$imageData['file_name'];
				$upload_data = array('id' => $id, 'image_3' => 'uploads/products/'.$photo);
            }
		$this->products_model->updateProductImage($upload_data);	
	}
	public function change_product_status(){
		$data = array(
			       'id' => $this->input->post('id'),
				   'status' =>$this->input->post('status') 
		);
        $this->products_model->changeProductStatus($data);
		return $msg="Status Changed";
	    
	}
	public function product_search(){
	    
		$config = array();
        $config["base_url"] = base_url() . "index.php/admin/admin/products_view";
        $config["total_rows"] = $this->products_model->getProductsCount();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
		
		 $config['full_tag_open'] = "<ul class='pagination'>";
         $config['full_tag_close'] = '</ul>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         
         $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
         $config['prev_tag_open'] = '<li>';
         $config['prev_tag_close'] = '</li>';

         $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        
        
		   $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		   $data['product_list']=$this->products_model->getProductByKeyword($config["per_page"], $page);
		   $data["links"] = $this->pagination->create_links();
		   if($data['product_list']!=0){
		        $data['category_list']=$this->category_model->getCategories();
	            $this->load->view('admin/layouts/admin_header');
		        $this->load->view('admin/products/products_view',$data);
		        $this->load->view('admin/layouts/admin_footer'); 
		   }
		   else{
		        $this->session->set_flashdata('msg', 'No Data Found, Displaying all products');
		        redirect('admin/admin/products_view');
		   }

	}
	public function manageProduct(){
	    $keyword=$this->input->post('search');
	    $data['product_list']=$this->products_model->getAllProducts($keyword);
	    $this->load->view('admin/layouts/admin_header');
	    $this->load->view('admin/products/manage_product',$data);
	   	$this->load->view('admin/layouts/admin_footer');
	}


	// Website Settings

	
	public function logout(){
	   $this->session->sess_destroy();
	   redirect('index.php/admin/','refresh');
	}
}