<?php 
class DataBarang extends Controller {
    public function index($nama = 'Ivan', $pekerjaan = 'Programmer', $umur = 40){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('dataBarang/index', $data);
        $this->view('templates/footer');
    }
}



?>