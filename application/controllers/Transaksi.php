<?php
	 class Transaksi extends CI_Controller {

	 	function __construct(){
		parent::__construct();		
		$this->load->model('transaksi_data');
        $this->load->model('barang_data');
        $this->load->model('member_data');
		// $this->load->model('Category_model');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
        if ($this->session->userdata('id_level')==null) {
            redirect('Welcome');
        }
	}

		public function create(){
            $data['dropdown1'] = $this -> barang_data -> dropdown();
            $data['dropdown'] = $this -> member_data -> dropdown();
            // $data['join'] = $this -> barang_data -> get_article_join();
		// $this->form_validation->set_rules('id_member','Id Member','required');
		// $this->form_validation->set_rules('id_barang','Id Barang','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('bayar','Bayar','required');
		$this->form_validation->set_rules('tgl_pinjam','Tanggal Pinjam','required');
        $this->form_validation->set_rules('tgl_kembali','Tanggal Kembali','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('template/header1');
			$this->load->view('transaksi_form', $data);
			$this->load->view('template/footer1');
		}else{
		// $config['upload_path']          = 'assets/gambar/upload';
  //       $config['allowed_types']        = 'gif|jpg|png';
  //       $this->load->library('upload', $config);

  //       	if ( ! $this->upload->do_upload('userfile'))
  //       	{
  //       	        $error = array('error' => $this->upload->display_errors());
  //       	        print_r($error);
  //       	}
  //       	else
  //       	{
  //       	        $data = array('upload_data' => $this->upload->data());
        	
		// $id = $this->input->post('id');
		// $judul = $this->input->post('judul');
		// $tanggal = $this->input->post('tanggal');
		// $author= $this->input->post('author');
		// $konten = $this->input->post('konten');
 
		$data = array(
			'id_member' => $this->input->post('member'),
			'id_barang' => $this->input->post('barang'),
			'harga' => $this->input->post('harga'),
			'bayar' => $this->input->post('bayar'),
			'tgl_pinjam' => date('Y-m-d'),
            'tgl_kembali' => $this->input->post('tgl_kembali')
        );
		$this->transaksi_data->input_data($data,'transaksi');
		redirect('Transaksi');
		
	}
    }

	public function index(){

            $x['data']=$this->transaksi_data->show_transaksi();
            // $x['data']=$this->barang_data->get_article_join();
            // $x['data']=$this->member_data->get_article_join();

            $this->load->view("template/header1");
            $this->load->view('transaksi_view',$x);
            $this->load->view("template/footer1");

    }


    function edit($id){
        $x['dropdown'] = $this -> member_data -> dropdown();
        $x['dropdown1'] = $this -> barang_data -> dropdown();
    $where = array('id_transaksi' => $id);
     $id_member = $this->input->post('id_member');
    $x['data'] = $this->transaksi_data->edit_data($where,'transaksi')->result();
    $this->load->view("template/header1");
    $this->load->view('transaksi_edit',$x);
    $this->load->view("template/footer1");
	}

	function update(){
    $id = $this->input->post('id_transaksi');
    $id_member = $this->input->post('member');
    $id_barang = $this->input->post('barang');
    $harga = $this->input->post('harga');
    $bayar = $this->input->post('bayar');
    $tgl_pinjam = $this->input->post('tgl_pinjam');
    $tgl_kembali = $this->input->post('tgl_kembali');

    $data = array(
        'id_member' => $id_member,
        'id_barang' => $id_barang,
        'harga' => $harga,
        'bayar' => $bayar,
        'tgl_pinjam' => $tgl_pinjam,
        'tgl_kembali' => $tgl_kembali
    );

    $where = array(
        'id_transaksi' => $id
    );

    $this->transaksi_data->update_data($where,$data,'transaksi');
    redirect('Transaksi');
	}

	function hapus($id){
        $where = array('id_transaksi' => $id);
        $this->member_data->hapus_data($where,'transaksi');
        redirect('Transaksi');
    }
	}
?>