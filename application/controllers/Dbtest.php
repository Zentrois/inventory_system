<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbtest extends CI_Controller {
    public function index() {
        $this->load->database();
        if ($this->db->conn_id) {
            echo "✅ Database is connected successfully!";
        } else {
            echo "❌ Database connection failed!";
        }
    }
}