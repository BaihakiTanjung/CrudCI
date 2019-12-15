<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $judul['judul'] = "Page Home";
        $this->load->view('layouts/navbar.php', $judul);
        $this->load->view('home/index');
        $this->load->view('layouts/footer.php');
    }
}
