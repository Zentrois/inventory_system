<?php

class Settings extends CI_Controller {
    public function index()
    {
        echo "Settings Controller";
    }

    public function profile_settings(){
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/profile-settings",
                "page_scripts" => "include/settings_scripts/profile_settings_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }

    public function currency_settings(){
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/currency-settings",
                "page_scripts" => "include/settings_scripts/currency_settings_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }

    public function product_image_settings(){
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/product-image-settings",
                "page_scripts" => "include/settings_scripts/product_image_settings_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }

    public function footer_settings(){
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/footer-settings",
                "page_scripts" => "include/settings_scripts/footer_settings_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }
}

?>