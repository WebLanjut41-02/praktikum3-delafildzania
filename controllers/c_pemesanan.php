<?php 

/**
 * 
 */
class c_pemesanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pemesanan');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Pemesanan';
		$this->load->view('template/header', $data);
		$this->load->view('v_pemesanan');
		$this->load->view('template/footer');
	}

	public function daftar_menu()
	{
		$data = $this->m_pemesanan->getAllMenu();
		$this->session->set_userdata('all_data', $data);
		$data['judul'] = 'Daftar Menu';
		$this->load->view('template/header', $data);
		$this->load->view('v_menu');
		$this->load->view('template/footer');
	}

	public function inputPelanggan()
	{
		$id ='';
		$nama = $this->input->post('nama');
		
		$this->m_pemesanan->inputPelanggan($id, $nama);
		redirect('c_pemesanan/daftar_menu');
	}
}

 ?>