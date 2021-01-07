<?php
ini_set('mysql.connect_timeout', 15000);
ini_set('default_socket_timeout', 15000);
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        // $this->db2 = $this->load->database('datamasyarakat', TRUE);
    }

    function cek_nik($nik)
    {
        $this->db2->select('*');
        $this->db2->where('NIK_EKTP', $nik);
        return $this->db2->get('dat_masyarakat')->row();
    }

    function add_pasien($data)
    {
        return $this->db->insert('ref_pasien', $data);
    }

    function update_pasien($id, $data)
    {
        $this->db->where('pasien_id', $id);
        return $this->db->update('ref_pasien', $data);
    }

    function list_pasien_operator($id)
    {
        $this->db->select('*');
        $this->db->where('pasien_lokasi_id', $id);
        $this->db->order_by('pasien_id', 'desc');
        return $this->db->get('ref_pasien')->result();
    }

    function list_pasien_superadmin()
    {
        $this->db->select('*')
            ->join('ref_lokasi', 'lokasi_id=pasien_lokasi_id')
            ->order_by('pasien_id', 'desc');
        return $this->db->get('ref_pasien')->result();
    }
    function list_lokasi()
    {
        $this->db->select('*');
        return $this->db->get('ref_lokasi')->result();
    }

    function delete_pasien($id)
    {
        $this->db->where('pasien_id', $id);
        return $this->db->delete('ref_pasien');
    }

    function selesai_pasien($id, $data)
    {
        $this->db->where("pasien_id", $id);
        return $this->db->update('ref_pasien', $data);
    }

    function pindah_pasien($id, $data)
    {
        $this->db->where("pasien_id", $id);
        return $this->db->update('ref_pasien', $data);
    }

    function cek_pasien($nik)
    {
        return $this->db->select('*')->join('ref_lokasi', 'ref_lokasi.lokasi_id = ref_pasien.pasien_lokasi_id','left')->where('pasien_nik', $nik)->order_by('pasien_id','desc')->limit(1)->get('ref_pasien')->row();
    }

    function detail_pasien($id)
    {
        $this->db->select('*');
        $this->db->where('pasien_id', $id);
        return $this->db->get('ref_pasien')->row();
    }
}
