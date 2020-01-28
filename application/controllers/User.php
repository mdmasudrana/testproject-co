<?php

class User extends CI_controller{


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
}



?>