<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TrKeluarga extends MY_Controller {

    //variable
    var $view = 'konversi/konversi_tr_keluarga';     // file view
    var $redirect = 'konversi/TrKeluarga';     // redirect to here
    var $modul = 'Konversi TR KELUARGA';        // this modul or class name

    public function __construct() {
        parent::__construct();
        $this->load->model(array('m_konversi','ref_pekerjaan', 'm_pegawai_keluarga','ref_status_tunjangan','ref_status_keluarga','ref_pekerjaan'));
    }

    public function index() {
        $data['konversi'] = '';
        $this->loadView($this->view, $data);
    }

    public function detail($id) {
        $data['result'] = $this->m_konversi->get_row($id);
        $this->loadView($this->view, $data);
    }

    private function set_data() {
        $data['kolom'] = $this->input->post('post_name');
        return $data;
    }

    public function add() {
        //extrac post here    
        $this->load->library('PHPExcel');
        $this->load->model('m_konversi');
        $this->load->model('m_pegawai');
        $file_data = $_FILES['userfile'];
        $file_path = $file_data['tmp_name'];
        $inputFileName = $file_path;
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

        $row = 0;
        $summary = '';

        foreach ($allDataInSheet as $value) {
            $error = '';
            $success = '';
            if ($row > 0) {
                if (!empty($value['A'])) {
                    $data['pegawaikeluarga_pegawai_nip'] = $value['A'];
                    $data['pegawaikeluarga_status_keluarga_id'] = $value['B'];
                    $data['pegawaikeluarga_status_keluarga_nama'] = $this->ref_status_keluarga->get_data('statuskeluarga_id',$value['B'],'statuskeluarga_nama');
                    $data['pegawaikeluarga_nama'] = $value['C'];
                    $data['pegawaikeluarga_tempat_lahir'] = $value['D'];
                    $data['pegawaikeluarga_tanggal_lahir'] = tanggal_mysql($value['E'], '/');
                    $data['pegawaikeluarga_tanggal_menikah'] = tanggal_mysql($value['F'], '/');
                    $data['pegawaikeluarga_jenkel_id'] = $value['G'];
                    $data['pegawaikeluarga_pendidikan_nama'] = $value['H'];
                    $data['pegawaikeluarga_status_perkawinan_id'] = $value['I'];                    
                    $data['pegawaikeluarga_pekerjaan_id'] = $value['J'];
                    $data['pegawaikeluarga_pekerjaan'] = $this->ref_pekerjaan->get_data('pekerjaan_id',$value['J'],'pekerjaan_nama');
                    $data['pegawaikeluarga_alamat'] = $value['K'];
                    if($value['L'] == 'D'){
                        $data['pegawaikeluarga_status_tunjangan_id'] = 1; 
                    }else{
                        $data['pegawaikeluarga_status_tunjangan_id'] = 2; 
                    }
                    $data['pegawaikeluarga_status_tunjangan'] = $this->ref_status_tunjangan->get_row($data['pegawaikeluarga_status_tunjangan_id'])->status_tunjangan_nama;  
                    $data['pegawaikeluarga_nip_nrp'] = $value['M'];
                    

                    $insert = $this->m_pegawai_keluarga->insert_ignore($data);
                    if ($insert) {
                        $summary .= "NIP. " . $data['pegawaikeluarga_pegawai_nip'] . " Konversi Data KELUARGA Berhasil" . "<br/>";
                    } else {
                        $summary .= "NIP. " . $data['pegawaikeluarga_pegawai_nip'] . " Konversi Data KELUARGA GAGAL" . "<br/>";
                    }
                }
            }
            $row++;
        }
        $hasil['konversi'] = $summary;
//        $this->session->set_flashdata('konversi', $summary);
        $this->loadView($this->view, $hasil);
    }

    public function update() {
        //extrac post here and post primary key is id
        $id = $this->input->post('id');
        $data = $this->set_data();

        $update = $this->m_konversi->update($data, $id);
        if ($update) {
            $this->session->set_flashdata('message', alert_show(array('success', "Edit " . $this->modul . " Berhasil")));
        } else {
            $this->session->set_flashdata('message', alert_show(array('danger', "Edit " . $this->modul . " Gagal")));
        }
        redirect($this->redirect);
    }

    public function delete($id) {
        $delete = $this->m_konversi->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', alert_show(array('success', "Delete " . $this->modul . " Berhasil")));
        } else {
            $this->session->set_flashdata('message', alert_show(array('danger', "Delete " . $this->modul . " Gagal")));
        }
        redirect($this->redirect);
    }

    public function excel() {
        $data['result'] = $this->m_konversi->get_all();
        $data['nama_file'] = date('Ymdhis') . '_' . $this->modul;
        $this->load->view('export/excel', $data);
    }

}
