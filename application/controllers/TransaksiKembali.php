<?php
	 class TransaksiKembali extends CI_Controller {

	 	function __construct(){
		parent::__construct();		
		$this->load->model('Pengembalian');
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
		$this->form_validation->set_rules('TglKembali','Tanggal Pinjam','required');
        $this->form_validation->set_rules('tglskrg','Tanggal Kembali','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('template/header1');
			$this->load->view('TransKembali', $data);
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
			'TglKembali' => $this->input->post('TglKembali'),
            'tglskrg' => $this->input->post('tglskrg'),
            'denda' => $this->input->post('denda')
        );
		$this->Pengembalian->input_data($data,'pengembalian');
		redirect('transaksikembali');
		
	}
    }

	public function index(){

            // $x['data']=$this->Pengembalian->show_transaksi();
            $x['data']=$this->barang_data->get_article_join1();
            // $x['data']=$this->member_data->get_article_join1();

            $this->load->view("template/header1");
            $this->load->view('TransKembali_view',$x);
            $this->load->view("template/footer1");

    }


    function edit($id){
        $x['dropdown'] = $this -> member_data -> dropdown();
        $x['dropdown1'] = $this -> barang_data -> dropdown();
    $where = array('id_kembali' => $id);
     $id_member = $this->input->post('id_member');
    $x['data'] = $this->Pengembalian->edit_data($where,'pengembalian')->result();
    $this->load->view("template/header1");
    $this->load->view('TransKembali_edit',$x);
    $this->load->view("template/footer1");
	}

	function update(){
    $id = $this->input->post('id_kembali');
    $id_member = $this->input->post('member');
    $id_barang = $this->input->post('barang');
    $TglKembali = $this->input->post('TglKembali');
    $tglskrg = $this->input->post('tglskrg');
    $denda = $this->input->post('denda');

    $data = array(
        'id_member' => $id_member,
        'id_barang' => $id_barang,
        'Tglkembali' => $TglKembali,
        'tglskrg' => $tglskrg,
        'denda' => $denda
    );

    $where = array(
        'id_kembali' => $id
    );

    $this->Pengembalian->update_data($where,$data,'pengembalian');
    redirect('TransaksiKembali');
	}

	function hapus($id){
        $where = array('id_kembali' => $id);
        $this->member_data->hapus_data($where,'pengembalian');
        redirect('TransaksiKembali');
    }
	}
?>