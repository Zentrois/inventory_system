<?php

class Ajax extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("app_model");
    }

    public function index()
    {
        // echo "Ajax Controller";
    }

    public function handle_ajax_request(){
        $param = isset($_REQUEST['action']) ? $_REQUEST['action']:"";

        if(!empty($param)){
            if($param == "save_category"){
                $category_name = $this->input->post("category_name");
                $category_status = $this->input->post("category_status");

                $category_data = array(
                    "name" => $category_name,
                    "status" => $category_status
                );

                if($this->app_model->save_resource_data(tbl_categories(), $category_data)){
                    $this->session->set_flashdata("success", "Category added successfully");
                }else{
                    $this->session->set_flashdata("error", "Failed to save category");
                }

                $this->json(1, "Category added successfully");

            }
        }
    }

    public function json($status, $massage, $arr = array()){
        $data = array(
            "status" => $status,
            "massage" => $massage,
            "arr" => $arr 
        );

        print_r(json_encode($data));

        die;
    }
}

?>