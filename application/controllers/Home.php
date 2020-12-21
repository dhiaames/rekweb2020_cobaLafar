<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index'); //saya ingin mengambil(load) file yang namanya Home.php yang ada di folder view
        $this->load->view('templates/footer');
    }
}
