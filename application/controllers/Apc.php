<?php

class Apc extends CI_Controller {

    public function update_apc(){
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/update-apc"
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
                "page_content" => "pages/detail-apc"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
  
    }

}

?>