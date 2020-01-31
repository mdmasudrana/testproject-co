<?php

class User extends CI_controller{

    function index(){
        $this->load->model('User_model');
        $user = $this->User_model->all();
        $data = array();
        $data['miu'] = $user;
        $this->load->view('list', $data);

    }

    function create(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            //save entry
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['address'] = $this->input->post('address');
            $formArray['password'] = $this->input->post('password');
            // $formArray['created_at'] = date('Y-m-d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success', 'Record add sucessfully!');
            redirect(base_url().'index.php/user/index');



        }
       
    }
    function edit($id)
   {
       $this->load->model('User_model');
       $user = $this->User_model->getUser($id);
       $data = array();
       $data['user'] = $user;

       $this->form_validation->set_rules('name','Name','required');
       $this->form_validation->set_rules('email','Email','required|valid_email');
       $this->form_validation->set_rules('phone','Phone','required');
       $this->form_validation->set_rules('address','Address','required');
       $this->form_validation->set_rules('password','Password','required');
      
       if ($this->form_validation->run() == false) {
             $this->load->view('edit',$data);
       } else {
           //update user record
           $formArray = array();
           $formArray['name'] = $this->input->post('name');
           $formArray['email'] = $this->input->post('email');
           $formArray['phone'] = $this->input->post('phone');
           $formArray['address'] = $this->input->post('address');
           $formArray['password'] = $this->input->post('password');

           $this->User_model->updateUser($id,$formArray);
           $this->session->set_flashdata('success','Record updated');
           redirect(base_url().'index.php/user/index');
       }
       
   } 
        //delete function 
        function delete($userId)
        {
            
            
            $this->load->model('User_model');
            $miu = $this->User_model->getUser($userId);
            if (empty($miu)){
                $this->session->set_flashdata('failure','Record not found in database');
                redirect(base_url().'index.php/user/index');
            }
            $this->User_model->deleteUser($userId);
            $this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/user/index');
        }

}

?>