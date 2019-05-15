<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = 'SI-RENTCAR | Dashboard';
		$this->db->where('mobil_status', 1);
		$data['mobil'] = $this->Model_CRUD->getNum('mobil');
		$data['pelanggan'] = $this->Model_CRUD->getNum('kostumer');
		$data['transaksi'] = $this->Model_CRUD->getNum('transaksi',['transaksi_status' => 2]);
		$data['transaksi_selesai'] = $this->Model_CRUD->getNum('transaksi',['transaksi_status' => 1]);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/footer');
	}
	public function mobil()
	{
		$data['judul'] = 'SI-RENTCAR | Data Mobil';
		$data['mobil'] = $this->Model_CRUD->getAll('mobil');
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('mobil/data_mobil',$data);
		$this->load->view('template/footer');
	}
	public function mobil_tambah()
	{
		$this->form_validation->set_rules('merk', 'Merk', 'trim|required');
		$this->form_validation->set_rules('plat', 'No. Polisi', 'trim|required');
		$this->form_validation->set_rules('warna', 'Warna', 'trim|required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'SI-RENTCAR | Tambah Mobil';
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('mobil/mobil_tambah');
			$this->load->view('template/footer');
		} else {
			$data = [
				'mobil_merk' => $this->input->post('merk'),
				'mobil_plat' => $this->input->post('plat'),
				'mobil_warna' => $this->input->post('warna'),
				'mobil_tahun' => $this->input->post('tahun'),
				'mobil_status' => 1
			];
			$this->Model_CRUD->insertData('mobil',$data);
			echo "<script>
				alert('Tambah data mobil sukses !!');
				window.location.href='".base_url('mobil/mobil')."';
				</script>";
		}
	}
	public function mobil_ubah($id = null)
	{
		$this->form_validation->set_rules('merk', 'Merk', 'trim|required');
		$this->form_validation->set_rules('plat', 'No. Polisi', 'trim|required');
		$this->form_validation->set_rules('warna', 'Warna', 'trim|required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'SI-RENTCAR | Ubah Mobil';
			$data['mobil'] = $this->Model_CRUD->get('mobil',['mobil_id' => $id]);
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('mobil/mobil_ubah',$data);
			$this->load->view('template/footer');
		} else {
			$where = ['mobil_id' => $this->input->post('id')];
			$data = [
				'mobil_merk' => $this->input->post('merk'),
				'mobil_plat' => $this->input->post('plat'),
				'mobil_warna' => $this->input->post('warna'),
				'mobil_tahun' => $this->input->post('tahun'),
			];
			$this->Model_CRUD->updateData('mobil',$data,$where);
			echo "<script>
				alert('Ubah data mobil sukses !!');
				window.location.href='".base_url('admin/mobil')."';
				</script>";
		}
			
	}
	public function mobil_hapus($id)
	{
		$where = ['mobil_id' => $id];
		$this->Model_CRUD->deleteData('mobil',$where);
		echo "<script>
				alert('Hapus data mobil sukses !!');
				window.location.href='".base_url('admin/mobil')."';
				</script>";
	}
	public function pelanggan()
	{
		$data['judul'] = 'SI-RENTCAR | Data Pelanggan';
		$data['pelanggan'] = $this->Model_CRUD->getAll('kostumer');
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('pelanggan/data_pelanggan',$data);
		$this->load->view('template/footer');
	}
	public function pelanggan_tambah()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('hp', 'hp', 'trim|required');
		$this->form_validation->set_rules('ktp', 'ktp', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'SI-RENTCAR | Tambah Pelanggan';
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('pelanggan/pelanggan_tambah');
			$this->load->view('template/footer');
		} else {
			$data = [
				'kostumer_nama' 	=> $this->input->post('nama'),
				'kostumer_alamat' 	=> $this->input->post('alamat'),
				'kostumer_jk' 		=> $this->input->post('jk'),
				'kostumer_hp' 		=> $this->input->post('hp'),
				'kostumer_ktp' 		=> $this->input->post('ktp')
			];
			$this->Model_CRUD->insertData('kostumer',$data);
			echo "<script>
				alert('Tambah data pelanggan sukses !!');
				window.location.href='".base_url('admin/pelanggan')."';
				</script>";
		}
	}
	public function pelanggan_ubah($id = null)
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('hp', 'hp', 'trim|required');
		$this->form_validation->set_rules('ktp', 'ktp', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'SI-RENTCAR | Ubah Pelanggan';
			$data['pelanggan'] = $this->Model_CRUD->get('kostumer',['kostumer_id' => $id]);
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('pelanggan/pelanggan_ubah',$data);
			$this->load->view('template/footer');
		} else {
			$where = ['kostumer_id' => $this->input->post('id')];
			$data = [
				'kostumer_nama' 	=> $this->input->post('nama'),
				'kostumer_alamat' 	=> $this->input->post('alamat'),
				'kostumer_jk' 		=> $this->input->post('jk'),
				'kostumer_hp' 		=> $this->input->post('hp'),
				'kostumer_ktp' 		=> $this->input->post('ktp')
			];
			$this->Model_CRUD->updateData('kostumer',$data,$where);
			echo "<script>
				alert('Ubah data pelanggan sukses !!');
				window.location.href='".base_url('admin/pelanggan')."';
				</script>";
		}
			
	}
	public function pelanggan_hapus($id)
	{
		$where = ['kostumer_id' => $id];
		$this->Model_CRUD->deleteData('kostumer',$where);
		echo "<script>
				alert('Hapus data pelanggan sukses !!');
				window.location.href='".base_url('admin/pelanggan')."';
				</script>";
	}
	public function transaksi()
	{
		$data['judul'] = 'SI-RENTCAR | Data Transaksi';
		$data['transaksi'] = $this->db->query("select * from transaksi,mobil,kostumer where transaksi_mobil=mobil_id and transaksi_kostumer=kostumer_id")->result_array();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('transaksi/data_transaksi',$data);
		$this->load->view('template/footer');
	}
	public function transaksi_tambah()
	{
		$this->form_validation->set_rules('kostumer','Kostumer','required');		
		$this->form_validation->set_rules('mobil','Mobil','required');		
		$this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','required');		
		$this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','required');		
		$this->form_validation->set_rules('harga','Harga','required');		
		$this->form_validation->set_rules('denda','Denda','required');	

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'SI-RENTCAR | Tambah Transaksi';
			$this->db->where('mobil_status', 1);
			$data['mobil'] = $this->db->get('mobil')->result_array();
			$data['pelanggan'] = $this->db->get('kostumer')->result_array();
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('transaksi/transaksi_tambah',$data);
			$this->load->view('template/footer');
		} else {
			$data = array(
				'transaksi_karyawan' 	=> $this->session->userdata('username'),
				'transaksi_kostumer' 	=> $this->input->post('kostumer'),
				'transaksi_mobil' 		=> $this->input->post('mobil'),
				'transaksi_tgl_pinjam' 	=> $this->input->post('tgl_pinjam'),			
				'transaksi_tgl_kembali' => $this->input->post('tgl_kembali'),			
				'transaksi_harga' 		=> $this->input->post('harga'),			
				'transaksi_denda' 		=> $this->input->post('denda'),			
				'transaksi_tgl' 		=> date('Y-m-d')
			);
			$this->Model_CRUD->insertData('transaksi',$data);

			// update status mobil yg di pinjam			
			$d = array(
				'mobil_status' => '2'
			);
			$w = array(
				'mobil_id' => $this->input->post('mobil')
			);
			$this->Model_CRUD->updateData('mobil',$d,$w);
			echo "<script>
				alert('Tambah transaksi baru sukses !!');
				window.location.href='".base_url('admin/transaksi')."';
				</script>";
		}
		
	}
	public function transaksi_selesai($id = null){			
		$data['judul'] = 'SI-RENTCAR | Transaksi Selesai';
		$data['mobil'] = $this->Model_CRUD->getAll('mobil');
		$data['pelanggan'] = $this->Model_CRUD->getAll('kostumer');			
		$data['transaksi'] = $this->db->query("select * from transaksi,mobil,kostumer where transaksi_mobil=mobil_id and transaksi_kostumer=kostumer_id and transaksi_id='$id'")->result_array();		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('transaksi/transaksi_selesai',$data);
		$this->load->view('template/footer');
	}
	public function transaksi_selesai_act(){			
		$id = $this->input->post('id');
		$tgl_dikembalikan = $this->input->post('tgl_dikembalikan');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$mobil = $this->input->post('mobil');
		$denda = $this->input->post('denda');		
		
		$this->form_validation->set_rules('tgl_dikembalikan','Tanggal Di Kembalikan','required');		

		if($this->form_validation->run() != false){		
			// menghitung selisih hari
			$batas_kembali = strtotime($tgl_kembali);
			$dikembalikan = strtotime($tgl_dikembalikan);
			$selisih = abs(($batas_kembali - $dikembalikan)/(60*60*24));			
			$total_denda = $denda*$selisih;
			
			// update status transaksi
			$data = array(
				'transaksi_tgldikembalikan' => $tgl_dikembalikan,
				'transaksi_status' => '1',	
				'transaksi_totaldenda' => $total_denda
			);
			$w = array(
				'transaksi_id' => $id
			);
			
			$this->Model_CRUD->updateData('transaksi',$data,$w);

			// update status mobil
			$data2 = array(
				'mobil_status' => '1'
			);
			$w2 = array(
				'mobil_id' => $mobil
			);
			
			$this->Model_CRUD->updateData('mobil',$data2,$w2);			
			echo "<script>
				alert('Transaksi selesai');
				window.location.href='".base_url('admin/transaksi')."';
				</script>";
		}else{
			$data['judul'] = 'SI-RENTCAR | Transaksi Selesai';
			$data['mobil'] = $this->Model_CRUD->getAll('mobil');
			$data['pelanggan'] = $this->Model_CRUD->getAll('kostumer');			
			$data['transaksi'] = $this->db->query("select * from transaksi,mobil,kostumer where transaksi_mobil=mobil_id and transaksi_kostumer=kostumer_id and transaksi_id='$id'")->result_array();		
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar');
			$this->load->view('transaksi/transaksi_selesai',$data);
			$this->load->view('template/footer');
		}
	}
	public function transaksi_hapus($id){				
		$w = array(
			'transaksi_id' => $id		
		);
		$data = $this->Model_CRUD->get('transaksi',$w);

		$ww = array(
			'mobil_id' => $data['transaksi_mobil']
		);
		$data2 = array(
			'mobil_status' => '1'
		);
		$this->Model_CRUD->updateData('mobil',$data2,$ww);

		$this->Model_CRUD->deleteData('transaksi',$w);		
		echo "<script>
				alert('Tambah transaksi baru sukses !!');
				window.location.href='".base_url('admin/transaksi')."';
				</script>";
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */