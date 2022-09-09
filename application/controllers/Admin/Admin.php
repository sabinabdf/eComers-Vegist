<?php 
class Admin extends CI_Controller 
{
    function index(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            $this->load->view('admin/dashboard');
        }else{
            $this->load->view('admin/index');
        }
        
        
    }
    function dashboard(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            
        $this->load->view('admin/dashboard');
        }else{
            redirect(base_url('index.php/admin/Admin')); 
        }
    }
    function adminLogin(){
        $data = $this->input->post();
        $this->load->model('admin/Admin_Pannel');
        $info = $this->Admin_Pannel->login($data);
       if(empty($info)){
           $this->session->set_flashdata('error','please enter a valid id');
        redirect(base_url('index.php/admin/Admin'));

       }else{
           $this->session->set_userdata(array('userID'=>$info->id,'name'=>$info->name));
        redirect(base_url('index.php/admin/Admin/dashboard')); 
       }
    }
    function logOut(){
        $userID = $this->session->userdata('userID');
        if(isset($userID)){
            $this->session->sess_destroy();
            redirect(base_url('index.php/admin/Admin'));
        }
    }

    // products category
    

    function product_category(){

        $this->load->model('admin/Admin_Pannel');
        $get_data['category_data'] = $this->Admin_Pannel->get_category();

       $this->load->view('admin/product_category', $get_data);
       $this->load->view('admin/product', $get_data);

       
        
    }
    function add_product_category(){
        $category = $this->input->post();

       
		$config['upload_path']          = './product/category/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000000;
		$config['max_width']            = 102400;
		$config['max_height']           = 7680000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('photo'))
		{
				$error = array('error' => $this->upload->display_errors());

				
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());
           
			$file = $data['upload_data']['file_name'];
            
		
		}
        if($category!='' && $file!=''){
            $category_data = array(
                'name'=>$category['name'],
                'photo'=>$file
            );
            $this->load->model('admin/Admin_Pannel');
           $this->Admin_Pannel->add_category($category_data);
        }else{
            redirect('admin/Admin/product_category');
        }
        
        
          
       
    }

    function deleteCategory($id){
        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->deleteCat($id);
    }
    function editCategory($id){
        $this->load->model('admin/Admin_Pannel');
        $this->Admin_Pannel->editCat($id);

        $update['category_list'] = $this->Admin_Pannel->editCat($id);
	  $this->load->view('admin/cat_edit',$update);

    }
    function update_product_category(){
        $update_cat = $this->input->post();
        $config['upload_path']          = './product/category/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000000;
		$config['max_width']            = 102400;
		$config['max_height']           = 7680000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('photo'))
		{
				$error = array('error' => $this->upload->display_errors());

				
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());
           
			$file = $data['upload_data']['file_name'];
            
		
		}
        $category_data = array(
            
            'name'=>$update_cat['name'],
            'photo'=>$file
        );
        $this->load->model('admin/Admin_Pannel');
       $this->Admin_Pannel->update_category($category_data,$update_cat['id']);
    }
   

    // products


    function addProduct(){
        
        $this->load->model('admin/Admin_Pannel');
        $get_data['category_data'] = $this->Admin_Pannel->get_category();

      
        $this->load->view('admin/product', $get_data);
    }
    
}



?>