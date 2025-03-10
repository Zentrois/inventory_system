<?php

class Product extends CI_Controller {
    public function index()
    {
        echo "Product Controller";
    }

    public function list_products()
    {
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/list-products",
                "page_scripts" => "include/list_products_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }
}

?>