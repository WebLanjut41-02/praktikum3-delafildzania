<?php 

class m_pemesanan extends CI_model
{
	
	public function getAllMenu()
	{
		$this->db->select('*');
		$this->db->from('menu');
		$query = $this->db->get();
		return $query->result();
	}

	public function inputPelanggan($id, $nama)
	{
		$data = array(
			'nama_pelanggan' => $this->input->post('nama')
			 );
		$this->db->insert('transaksi', $data);
	}
}


 ?>