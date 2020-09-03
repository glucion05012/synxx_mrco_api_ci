<?php
class Mydb_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    //read all
    public function readall_posts(){
        $query = $this->db->get('login');
        return $query->result_array();
    }
    //read one
    public function read_posts($id){
        $query = $this->db->get_where('login', array('id'=>$id));
        return $query->result_array();
    }
    //create
    public function create_posts(){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        $this->db->insert('login', $data);
        return $data;
        
    }
    //update
    public function update_posts($id){
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        // $this->db->where('id', $id);
        $this->db->update('login', $data, array('id'=>$id));

        return  $data;
        
    }

     //delete
    public function delete_posts($id){
        // $this->db->where('id', $id);
        $this->db->delete('login', array('id'=>$id));

        return  'delete success';
        
    }
}
?>