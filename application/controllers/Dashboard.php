<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Dashboard_model', 'model');
        $this->load->helper(array('url', 'file'));

        if ($this->authentication->is_loggedin() === false) redirect('logout');
    }

    public function index()
    {
        if ($this->session->userdata('user_prev') == 1) {
            $data['title'] = 'Dashboard	Super Admin';
            $data['content'] = 'backend/dashboard_super_admin';
            $data['tempat'] = $this->model->list_lokasi();
            $this->load->view('layouts/master', $data);
        } else {
            $data['title'] = 'Dashboard	Operator';
            $data['content'] = 'backend/dashboard_operator';

            if ($this->session->userdata('user_lokasi_id') == 1) {
                $data['tempat'] = 'Suly Resort and Spa';
            } else if ($this->session->userdata('user_lokasi_id') == 2) {
                $data['tempat'] = 'Maxone Hotel';
            } else {
                $data['tempat'] = 'Desa Pramana Swan Villa';
            }

            $this->load->view('layouts/master', $data);
        }
    }

    public function list_pasien_operator()
    {
        echo json_encode($this->model->list_pasien_operator($this->session->userdata('user_lokasi_id')));
    }
    public function list_pasien_superadmin()
    {
        echo json_encode($this->model->list_pasien_superadmin());
    }

    public function cek_nik()
    {
        echo json_encode($this->model->cek_nik($this->input->post('nik')));
    }

    public function delete_pasien()
    {
        echo json_encode($this->model->delete_pasien($this->input->post('pasien_id')));
    }

    public function detail_pasien()
    {
        echo json_encode($this->model->detail_pasien($this->input->post('pasien_id')));
    }

    public function selesai_pasien()
    {
        $data = [
            'pasien_status' => 0,
            'pasien_keluar' => $this->input->post('pasien_keluar')
        ];
        echo json_encode($this->model->selesai_pasien($this->input->post('pasien_id'), $data));
    }

    public function pindah_pasien()
    {
        $data = [
            'pasien_status' => 1,
            'pasien_lokasi_id' => $this->input->post('pasien_lokasi_id')
        ];
        echo json_encode($this->model->pindah_pasien($this->input->post('pasien_id'), $data));
    }

    public function add_pasien()
    {
        $cek = $this->model->cek_pasien($this->input->post('pasien_nik'));
        if ($cek) {
            if($cek->pasien_status == 1){
                echo json_encode(array(
                    'status' => false,
                    'flag'      => 1,
                    'msg'   => 'Pasien sedang dirawat di '.$cek->lokasi_nama
                ));
            }else{
                echo json_encode(array(
                    'status' => false,
                    'flag'      => 2,
                    'msg'   => 'Pasien akan dirawat kembali, apakah akan dilanjutkan?'
                ));
            }
        } else {
            $data = [
                'pasien_nik' => $this->input->post('pasien_nik'),
                'pasien_nama' => $this->input->post('pasien_nama'),
                'pasien_jk' => $this->input->post('pasien_jk'),
                'pasien_tempat_lahir' => $this->input->post('pasien_tempat_lahir'),
                'pasien_tgl_lahir' => $this->input->post('pasien_tgl_lahir'),
                'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
                'pasien_alamat' => $this->input->post('pasien_alamat'),
                'pasien_umur' => $this->input->post('pasien_umur'),
                'pasien_hp' => $this->input->post('pasien_hp'),
                'pasien_goldar' => $this->input->post('pasien_goldar'),
                'pasien_pmi' => $this->input->post('pasien_pmi'),
                'pasien_jk' => $this->input->post('pasien_jk'),
                'pasien_negara_bekerja' => $this->input->post('pasien_negara_bekerja'),
                'pasien_penerbangan' => $this->input->post('pasien_penerbangan'),
                'pasien_keluhan_demam' => $this->input->post('pasien_keluhan_demam'),
                'pasien_keluhan_batuk' => $this->input->post('pasien_keluhan_batuk'),
                'pasien_keluhan_sesak' => $this->input->post('pasien_keluhan_sesak'),
                'pasien_keluhan_lain' => $this->input->post('pasien_keluhan_lain'),
                'pasien_pemeriksaan_covid' => $this->input->post('pasien_pemeriksaan_covid'),
                'pasien_pemeriksaan_rapid' => $this->input->post('pasien_pemeriksaan_rapid'),
                'pasien_riwayat_sakit' => $this->input->post('pasien_riwayat_sakit'),
                'pasien_riwayat_minum_obat' => $this->input->post('pasien_riwayat_minum_obat'),
                'pasien_hp_keluarga' => $this->input->post('pasien_hp_keluarga'),
                'pasien_nama_rs' => $this->input->post('pasien_nama_rs'),
                'pasien_nomor_kendaraan' => $this->input->post('pasien_nomor_kendaraan'),
                'pasien_nama_petugas1' => $this->input->post('pasien_nama_petugas1'),
                'pasien_nama_petugas2' => $this->input->post('pasien_nama_petugas2'),
                'pasien_hp_petugas1' => $this->input->post('pasien_hp_petugas1'),
                'pasien_hp_petugas2' => $this->input->post('pasien_hp_petugas2'),
                'pasien_masuk' => $this->input->post('pasien_masuk'),
                'pasien_created_at' => date('Y-m-d'),
                'pasien_lokasi_id' => $this->session->userdata('user_lokasi_id')
            ];

            if ($this->model->add_pasien($data)) {
                echo json_encode(array(
                    'status' => true,
                    'msg'   => 'Data berhasil disimpan'
                ));
            } else {
                echo json_encode(array(
                    'status' => false,
                    'flag'      => 0,
                    'msg'   => 'Gagal menyimpan data'
                ));
            }
        }
    }

    public function add_pasien2(){
        $data = [
            'pasien_nik' => $this->input->post('pasien_nik'),
            'pasien_nama' => $this->input->post('pasien_nama'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_tempat_lahir' => $this->input->post('pasien_tempat_lahir'),
            'pasien_tgl_lahir' => $this->input->post('pasien_tgl_lahir'),
            'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
            'pasien_alamat' => $this->input->post('pasien_alamat'),
            'pasien_umur' => $this->input->post('pasien_umur'),
            'pasien_hp' => $this->input->post('pasien_hp'),
            'pasien_goldar' => $this->input->post('pasien_goldar'),
            'pasien_pmi' => $this->input->post('pasien_pmi'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_negara_bekerja' => $this->input->post('pasien_negara_bekerja'),
            'pasien_penerbangan' => $this->input->post('pasien_penerbangan'),
            'pasien_keluhan_demam' => $this->input->post('pasien_keluhan_demam'),
            'pasien_keluhan_batuk' => $this->input->post('pasien_keluhan_batuk'),
            'pasien_keluhan_sesak' => $this->input->post('pasien_keluhan_sesak'),
            'pasien_keluhan_lain' => $this->input->post('pasien_keluhan_lain'),
            'pasien_pemeriksaan_covid' => $this->input->post('pasien_pemeriksaan_covid'),
            'pasien_pemeriksaan_rapid' => $this->input->post('pasien_pemeriksaan_rapid'),
            'pasien_riwayat_sakit' => $this->input->post('pasien_riwayat_sakit'),
            'pasien_riwayat_minum_obat' => $this->input->post('pasien_riwayat_minum_obat'),
            'pasien_hp_keluarga' => $this->input->post('pasien_hp_keluarga'),
            'pasien_nama_rs' => $this->input->post('pasien_nama_rs'),
            'pasien_nomor_kendaraan' => $this->input->post('pasien_nomor_kendaraan'),
            'pasien_nama_petugas1' => $this->input->post('pasien_nama_petugas1'),
            'pasien_nama_petugas2' => $this->input->post('pasien_nama_petugas2'),
            'pasien_hp_petugas1' => $this->input->post('pasien_hp_petugas1'),
            'pasien_hp_petugas2' => $this->input->post('pasien_hp_petugas2'),
            'pasien_masuk' => $this->input->post('pasien_masuk'),
            'pasien_created_at' => date('Y-m-d'),
            'pasien_lokasi_id' => $this->session->userdata('user_lokasi_id')
        ];

        if ($this->model->add_pasien($data)) {
            echo json_encode(array(
                'status' => true,
                'msg'   => 'Data berhasil disimpan'
            ));
        } else {
            echo json_encode(array(
                'status' => false,
                'flag'      => 0,
                'msg'   => 'Gagal menyimpan data'
            ));
        }
    }

    public function update_pasien()
    {
        $data = [
            'pasien_nik' => $this->input->post('pasien_nik'),
            'pasien_nama' => $this->input->post('pasien_nama'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_tempat_lahir' => $this->input->post('pasien_tempat_lahir'),
            'pasien_tgl_lahir' => $this->input->post('pasien_tgl_lahir'),
            'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
            'pasien_alamat' => $this->input->post('pasien_alamat'),
            'pasien_umur' => $this->input->post('pasien_umur'),
            'pasien_hp' => $this->input->post('pasien_hp'),
            'pasien_goldar' => $this->input->post('pasien_goldar'),
            'pasien_pmi' => $this->input->post('pasien_pmi'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_negara_bekerja' => $this->input->post('pasien_negara_bekerja'),
            'pasien_penerbangan' => $this->input->post('pasien_penerbangan'),
            'pasien_keluhan_demam' => $this->input->post('pasien_keluhan_demam'),
            'pasien_keluhan_batuk' => $this->input->post('pasien_keluhan_batuk'),
            'pasien_keluhan_sesak' => $this->input->post('pasien_keluhan_sesak'),
            'pasien_keluhan_lain' => $this->input->post('pasien_keluhan_lain'),
            'pasien_pemeriksaan_covid' => $this->input->post('pasien_pemeriksaan_covid'),
            'pasien_pemeriksaan_rapid' => $this->input->post('pasien_pemeriksaan_rapid'),
            'pasien_riwayat_sakit' => $this->input->post('pasien_riwayat_sakit'),
            'pasien_riwayat_minum_obat' => $this->input->post('pasien_riwayat_minum_obat'),
            'pasien_hp_keluarga' => $this->input->post('pasien_hp_keluarga'),
            'pasien_nama_rs' => $this->input->post('pasien_nama_rs'),
            'pasien_nomor_kendaraan' => $this->input->post('pasien_nomor_kendaraan'),
            'pasien_nama_petugas1' => $this->input->post('pasien_nama_petugas1'),
            'pasien_nama_petugas2' => $this->input->post('pasien_nama_petugas2'),
            'pasien_hp_petugas1' => $this->input->post('pasien_hp_petugas1'),
            'pasien_hp_petugas2' => $this->input->post('pasien_hp_petugas2'),
            'pasien_masuk' => $this->input->post('pasien_masuk'),
            'pasien_lokasi_id' => $this->session->userdata('user_lokasi_id')
        ];

        if ($this->model->update_pasien($this->input->post('pasien_id'), $data)) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

    public function add_pasien_super()
    {
        $cek = $this->model->cek_pasien($this->input->post('pasien_nik'));
        if ($cek) {
            if($cek->pasien_status == 1){
                echo json_encode(array(
                    'status' => false,
                    'flag'      => 1,
                    'msg'   => 'Pasien sedang dirawat di '.$cek->lokasi_nama
                ));
            }else{
                echo json_encode(array(
                    'status' => false,
                    'flag'      => 2,
                    'msg'   => 'Pasien akan dirawat kembali, apakah akan dilanjutkan?'
                ));
            }
        } else {
            $data = [
                'pasien_nik' => $this->input->post('pasien_nik'),
                'pasien_nama' => $this->input->post('pasien_nama'),
                'pasien_jk' => $this->input->post('pasien_jk'),
                'pasien_tempat_lahir' => $this->input->post('pasien_tempat_lahir'),
                'pasien_tgl_lahir' => $this->input->post('pasien_tgl_lahir'),
                'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
                'pasien_alamat' => $this->input->post('pasien_alamat'),
                'pasien_umur' => $this->input->post('pasien_umur'),
                'pasien_hp' => $this->input->post('pasien_hp'),
                'pasien_goldar' => $this->input->post('pasien_goldar'),
                'pasien_pmi' => $this->input->post('pasien_pmi'),
                'pasien_jk' => $this->input->post('pasien_jk'),
                'pasien_negara_bekerja' => $this->input->post('pasien_negara_bekerja'),
                'pasien_penerbangan' => $this->input->post('pasien_penerbangan'),
                'pasien_keluhan_demam' => $this->input->post('pasien_keluhan_demam'),
                'pasien_keluhan_batuk' => $this->input->post('pasien_keluhan_batuk'),
                'pasien_keluhan_sesak' => $this->input->post('pasien_keluhan_sesak'),
                'pasien_keluhan_lain' => $this->input->post('pasien_keluhan_lain'),
                'pasien_pemeriksaan_covid' => $this->input->post('pasien_pemeriksaan_covid'),
                'pasien_pemeriksaan_rapid' => $this->input->post('pasien_pemeriksaan_rapid'),
                'pasien_riwayat_sakit' => $this->input->post('pasien_riwayat_sakit'),
                'pasien_riwayat_minum_obat' => $this->input->post('pasien_riwayat_minum_obat'),
                'pasien_hp_keluarga' => $this->input->post('pasien_hp_keluarga'),
                'pasien_nama_rs' => $this->input->post('pasien_nama_rs'),
                'pasien_nomor_kendaraan' => $this->input->post('pasien_nomor_kendaraan'),
                'pasien_nama_petugas1' => $this->input->post('pasien_nama_petugas1'),
                'pasien_nama_petugas2' => $this->input->post('pasien_nama_petugas2'),
                'pasien_hp_petugas1' => $this->input->post('pasien_hp_petugas1'),
                'pasien_hp_petugas2' => $this->input->post('pasien_hp_petugas2'),
                'pasien_masuk' => $this->input->post('pasien_masuk'),
                'pasien_created_at' => date('Y-m-d'),
                'pasien_lokasi_id' => $this->input->post('pasien_lokasi_id')
            ];

            if ($this->model->add_pasien($data)) {
                echo json_encode(array(
                    'status' => true,
                    'msg'   => 'Data berhasil disimpan'
                ));
            } else {
                echo json_encode(array(
                    'status' => false,
                    'flag'      => 0,
                    'msg'   => 'Gagal menyimpan data'
                ));
            }
        }
    }

    public function add_pasien2_super(){
        $data = [
            'pasien_nik' => $this->input->post('pasien_nik'),
            'pasien_nama' => $this->input->post('pasien_nama'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_tempat_lahir' => $this->input->post('pasien_tempat_lahir'),
            'pasien_tgl_lahir' => $this->input->post('pasien_tgl_lahir'),
            'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
            'pasien_alamat' => $this->input->post('pasien_alamat'),
            'pasien_umur' => $this->input->post('pasien_umur'),
            'pasien_hp' => $this->input->post('pasien_hp'),
            'pasien_goldar' => $this->input->post('pasien_goldar'),
            'pasien_pmi' => $this->input->post('pasien_pmi'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_negara_bekerja' => $this->input->post('pasien_negara_bekerja'),
            'pasien_penerbangan' => $this->input->post('pasien_penerbangan'),
            'pasien_keluhan_demam' => $this->input->post('pasien_keluhan_demam'),
            'pasien_keluhan_batuk' => $this->input->post('pasien_keluhan_batuk'),
            'pasien_keluhan_sesak' => $this->input->post('pasien_keluhan_sesak'),
            'pasien_keluhan_lain' => $this->input->post('pasien_keluhan_lain'),
            'pasien_pemeriksaan_covid' => $this->input->post('pasien_pemeriksaan_covid'),
            'pasien_pemeriksaan_rapid' => $this->input->post('pasien_pemeriksaan_rapid'),
            'pasien_riwayat_sakit' => $this->input->post('pasien_riwayat_sakit'),
            'pasien_riwayat_minum_obat' => $this->input->post('pasien_riwayat_minum_obat'),
            'pasien_hp_keluarga' => $this->input->post('pasien_hp_keluarga'),
            'pasien_nama_rs' => $this->input->post('pasien_nama_rs'),
            'pasien_nomor_kendaraan' => $this->input->post('pasien_nomor_kendaraan'),
            'pasien_nama_petugas1' => $this->input->post('pasien_nama_petugas1'),
            'pasien_nama_petugas2' => $this->input->post('pasien_nama_petugas2'),
            'pasien_hp_petugas1' => $this->input->post('pasien_hp_petugas1'),
            'pasien_hp_petugas2' => $this->input->post('pasien_hp_petugas2'),
            'pasien_masuk' => $this->input->post('pasien_masuk'),
            'pasien_created_at' => date('Y-m-d'),
            'pasien_lokasi_id' => $this->input->post('pasien_lokasi_id')
        ];

        if ($this->model->add_pasien($data)) {
            echo json_encode(array(
                'status' => true,
                'msg'   => 'Data berhasil disimpan'
            ));
        } else {
            echo json_encode(array(
                'status' => false,
                'flag'      => 0,
                'msg'   => 'Gagal menyimpan data'
            ));
        }
    }

    public function update_pasien_super()
    {
        $data = [
            'pasien_nik' => $this->input->post('pasien_nik'),
            'pasien_nama' => $this->input->post('pasien_nama'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_tempat_lahir' => $this->input->post('pasien_tempat_lahir'),
            'pasien_tgl_lahir' => $this->input->post('pasien_tgl_lahir'),
            'pasien_pekerjaan' => $this->input->post('pasien_pekerjaan'),
            'pasien_alamat' => $this->input->post('pasien_alamat'),
            'pasien_umur' => $this->input->post('pasien_umur'),
            'pasien_hp' => $this->input->post('pasien_hp'),
            'pasien_goldar' => $this->input->post('pasien_goldar'),
            'pasien_pmi' => $this->input->post('pasien_pmi'),
            'pasien_jk' => $this->input->post('pasien_jk'),
            'pasien_negara_bekerja' => $this->input->post('pasien_negara_bekerja'),
            'pasien_penerbangan' => $this->input->post('pasien_penerbangan'),
            'pasien_keluhan_demam' => $this->input->post('pasien_keluhan_demam'),
            'pasien_keluhan_batuk' => $this->input->post('pasien_keluhan_batuk'),
            'pasien_keluhan_sesak' => $this->input->post('pasien_keluhan_sesak'),
            'pasien_keluhan_lain' => $this->input->post('pasien_keluhan_lain'),
            'pasien_pemeriksaan_covid' => $this->input->post('pasien_pemeriksaan_covid'),
            'pasien_pemeriksaan_rapid' => $this->input->post('pasien_pemeriksaan_rapid'),
            'pasien_riwayat_sakit' => $this->input->post('pasien_riwayat_sakit'),
            'pasien_riwayat_minum_obat' => $this->input->post('pasien_riwayat_minum_obat'),
            'pasien_hp_keluarga' => $this->input->post('pasien_hp_keluarga'),
            'pasien_nama_rs' => $this->input->post('pasien_nama_rs'),
            'pasien_nomor_kendaraan' => $this->input->post('pasien_nomor_kendaraan'),
            'pasien_nama_petugas1' => $this->input->post('pasien_nama_petugas1'),
            'pasien_nama_petugas2' => $this->input->post('pasien_nama_petugas2'),
            'pasien_hp_petugas1' => $this->input->post('pasien_hp_petugas1'),
            'pasien_hp_petugas2' => $this->input->post('pasien_hp_petugas2'),
            'pasien_masuk' => $this->input->post('pasien_masuk'),
            'pasien_lokasi_id' => $this->input->post('pasien_lokasi_id')
        ];

        if ($this->model->update_pasien($this->input->post('pasien_id'), $data)) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
