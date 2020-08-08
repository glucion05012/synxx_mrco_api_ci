<?php
class Mydb_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    //read all
    public function readall_posts(){
        $query = $this->db->get('customers');
        return $query->result_array();
    }
    //read one
    public function read_posts($id){
        $query = $this->db->get_where('customers', array('id'=>$id));
        return $query->result_array();
    }
    //create
    public function create_posts(){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'country' => $this->input->post('country'),
            'rating' => $this->input->post('rating'),
        );

        $this->db->insert('customers', $data);
        return $data;
        
    }
    //update
    public function update_posts($id){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'country' => $this->input->post('country'),
            'rating' => $this->input->post('rating'),
        );

        // $this->db->where('id', $id);
        $this->db->update('customers', $data, array('id'=>$id));

        return  $data;
        
    }

     //delete
    public function delete_posts($id){
        // $this->db->where('id', $id);
        $this->db->delete('customers', array('id'=>$id));

        return  'delete success';
        
    }
}
?>