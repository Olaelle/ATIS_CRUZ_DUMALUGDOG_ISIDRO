<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index() {
        // Load the dashboard view
        $this->load->view('dashboard');
    }
}
