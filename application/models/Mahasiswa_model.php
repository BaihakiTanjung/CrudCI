<?php

class Mahasiswa_model extends CI_Model
{

    public function getAllMahasiswa()
    {
        return $query = $this->db->get('mahasiswa')->result_array();
        // $query->result_array();

    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "namamahasiswa" => $this->input->post('nama', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }
    public function hapusDataMahasiswa($id)
    {
        $this->db->where('idmahasiswa', $id);
        $this->db->delete('mahasiswa');
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['idmahasiswa' => $id])->row_array();
    }
    public function ubahDataMahasiswa()
    {
        $data = [
            "namamahasiswa" => $this->input->post('nama', true)
        ];

        $this->db->where('idmahasiswa', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }
    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);

        $this->db->like('namamahasiswa', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
