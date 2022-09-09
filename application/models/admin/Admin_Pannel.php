<?php 
class Admin_Pannel extends CI_Model
{
    function login($data){
        return $this->db->where($data)->get('admin')->row();
        //print_r($admin);
    }
    function add_category($category_data){
        // echo '<pre>';
        // print_r($category_data);exit;
        $this->db->insert('product_category',$category_data);
        redirect('admin/Admin/product_category');
    }
    function get_category(){
        return $this->db->get('product_category')->result();
    }
    function deleteCat($id){
        $this->db->where('id',$id)->delete('product_category');
        redirect('admin/Admin/product_category');
    }
    function editCat($id){
        $data =  $this->db->where('id',$id)->get('product_category');
        return $data->row();
    }
    function update_category($data,$id){
        $this->db->where('id',$id)->update('product_category', $data);
        redirect('admin/Admin/product_category');
    }
}















?>