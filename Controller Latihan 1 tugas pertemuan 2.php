<?php
class latihan1 extends CI_controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat Belajara Web Programming";
        //$this->load->view('view-latihan1');

    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan');
        $data['nilai1'] = $n1;
        $data['niali2'] = $n2;
        $data['Hasil'] = $this->Model-latihan->jumlah($n1, $n2);

        $this->load->view('View- latihan1', $data);
    }
}