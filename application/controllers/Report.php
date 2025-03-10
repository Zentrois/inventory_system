<?php

class Report extends CI_Controller {
    public function index()
    {
        echo "Report Controller";
    }

    public function report_dashboard()
    {
        if ($this->session->userdata("is_active") == 1) {
            $data = array(
                "page_content" => "pages/report-dashboard",
                "page_scripts" => "include/report_dashboard_scripts"
            );

            $this->load->view("layout/main_layout", $data);
        }else{
            $this->load->view("pages/login");
        }
    }
}

?>