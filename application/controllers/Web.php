<?php
defined('BASEPATH') or exit('Tidak ada akses script langsung yang diizinkan');

class Web extends CI_Controller {
    public function index() {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function about()
    {
        $data['judul'] = "Halaman About"; // Mengatur judul halaman
        $this->load->view('v_header', $data); // Memuat view v_header.php dengan data judul
        $this->load->view('v_about', $data);  // Memuat view v_about.php dengan data judul
        $this->load->view('v_footer', $data); // Memuat view v_footer.php dengan data judul
    }
    
}