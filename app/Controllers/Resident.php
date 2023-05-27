<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resident extends CI_Controller {
    public function index() {
        // Load the resident view
        $this->load->view('resident');
    }
}
