<?php

class ApiController extends CI_Controller {

    //read all
    public function readall()
	{
		$data['login'] = $this->mydb_model->readall_posts();

        if(empty($data['login'])){
            show_404();
        }

        echo json_encode($data['login']);
    }
    
    //read one
    public function read($id)
	{
		$data['login'] = $this->mydb_model->read_posts($id);

        if(empty($data['login'])){
            show_404();
        }

        echo json_encode($data['login']);
    }
    
    //create
    public function create()
	{
		$data['login'] = $this->mydb_model->create_posts();

        if(empty($data['login'])){
            show_404();
        }

        echo json_encode($data['login']);
    }
    
    //update
    public function update($id)
	{
		$data['login'] = $this->mydb_model->update_posts($id);

        if(empty($data['login'])){
            show_404();
        }
        
        echo json_encode($data['login']);
    }
    
    //delete
    public function delete($id)
	{
		$data['login'] = $this->mydb_model->delete_posts($id);

        if(empty($data['login'])){
            show_404();
        }
        
        echo json_encode($data['login']);
	}
}

?>