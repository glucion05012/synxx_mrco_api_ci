<?php

class ApiController extends CI_Controller {

    //read all
    public function readall()
	{
		$data['customers'] = $this->mydb_model->readall_posts();

        if(empty($data['customers'])){
            show_404();
        }

        echo json_encode($data['customers']);
    }
    
    //read one
    public function read($id)
	{
		$data['customers'] = $this->mydb_model->read_posts($id);

        if(empty($data['customers'])){
            show_404();
        }

        echo json_encode($data['customers']);
    }
    
    //create
    public function create()
	{
		$data['customers'] = $this->mydb_model->create_posts();

        if(empty($data['customers'])){
            show_404();
        }

        echo json_encode($data['customers']);
    }
    
    //update
    public function update($id)
	{
		$data['customers'] = $this->mydb_model->update_posts($id);

        if(empty($data['customers'])){
            show_404();
        }
        
        echo json_encode($data['customers']);
    }
    
    //delete
    public function delete($id)
	{
		$data['customers'] = $this->mydb_model->delete_posts($id);

        if(empty($data['customers'])){
            show_404();
        }
        
        echo json_encode($data['customers']);
	}
}

?>