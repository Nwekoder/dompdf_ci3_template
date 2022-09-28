<?php

class Report extends CI_Controller {
    public function index() {
        $this->load->library('pdfgen');
        $this->load->model('M_user', 'model');

        $data['title'] = 'Laporan Data Akun Aplikasi';
        $data['users'] = $this->model->get_all_data();

        $filename = 'laporan_data_akun_demaipare';

        $html = $this->load->view('report', $data, TRUE);

        $this->pdfgen->generate($html, $filename, 'A4', 'potrait', TRUE);
    }
}