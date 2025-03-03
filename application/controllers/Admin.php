<?php

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("app_model");
    }

    public function index()
    {
       $this->load->view("pages/login");
    }

    public function validate_login_details()
    {
        $login_details = $this->input->post();

        $email = isset($login_details['txt_email']) ? $login_details['txt_email'] : '';
        $password = isset($login_details['txt_password']) ? $login_details['txt_password'] : '';
 
        if ($this->app_model->is_admin_exist($email, $password)) {
            echo "Login Successful";                
        }
        else {
            $thid->session->set_flashdata("error", "Invalid Email or Password");
        }

        return redirect(base_url());


    }
}

?>