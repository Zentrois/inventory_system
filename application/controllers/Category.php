<?php

class Category extends CI_Controller {
    public function index()
    {
        echo "Category Controller";
    }

    public function list_categories()
    {
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/list-categories"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }
}

?>