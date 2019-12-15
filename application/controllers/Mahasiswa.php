<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view('layouts/navbar.php');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer.php');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('layouts/navbar.php');
            $this->load->view('mahasiswa/tambah');
            $this->load->view('layouts/footer.php');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            echo $this->session->flashdata('flash');
            redirect('Mahasiswa');
        }
    }
    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('layouts/navbar.php');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer.php');
    }
    public function ubah($id)
    {

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('layouts/navbar.php');
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('layouts/footer.php');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            echo $this->session->flashdata('flash');
            redirect('Mahasiswa');
        }
    }
}
