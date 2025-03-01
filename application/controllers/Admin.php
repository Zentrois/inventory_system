<?php

class Admin extends CI_Controller {
    public function index()
    {
       $this->load->view("pages/login");
    }

    public function validate_login_details()
    {
        $login_details = $this->input->post();

        $email = isset($login_details['txt_email']) ? $login_details['txt_email'] : '';
        $password = isset($login_details['txt_password']) ? $login_details['txt_password'] : '';
 
        if ($email == "online@gmail.com" && $password =="123456") {
            echo "Login Successful";                
        }
        else {
            echo "Login Failed";
        }

    }
}

?>