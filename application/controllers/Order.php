<?php

class Order extends CI_Controller {
    public function index()
    {
        echo "Order Controller";
    }

    public function list_orders()
    {
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/list-orders",
                "page_scripts" => "include/list_orders_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }
}

?>