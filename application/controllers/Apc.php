<?php

class Apc extends CI_Controller {

    public function update_apc(){
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/update-apc",
                "page_scripts" => "include/update_apc_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }

    public function publications_details(){
        $input_data = $this->input->post();

        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/detail-apc",
                "page_scripts" => "include/publications_details_scripts",
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
  
    }

}

?>