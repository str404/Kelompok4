<?php
	 class Barang extends CI_Controller {

	 	function __construct(){
		parent::__construct();		
		$this->load->model('barang_data');
		// $this->load->model('Category_model');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		}

        public function home(){
        $this->load->view('home');
        }

		public function create(){
		$this->form_validation->set_rules('nama_barang','Nama_Barang','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('tipe','Tipe','required');
		$this->form_validation->set_rules('penjelasan','Penjelasan','required');
		$this->form_validation->set_rules('ukuran','Ukuran','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('template/header1');
			$this->load->view('barang_form');
			$this->load->view('template/footer1');
		}else{
		$config['upload_path']          = 'assets/gambar/upload';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

        	if ( ! $this->upload->do_upload('userfile'))
        	{
        	        $error = array('error' => $this->upload->display_errors());
        	        print_r($error);
        	}
        	else
        	{
        	        $data = array('upload_data' => $this->upload->data());
        	
		// $id = $this->input->post('id');
		// $judul = $this->input->post('judul');
		// $tanggal = $this->input->post('tanggal');
		// $author= $this->input->post('author');
		// $konten = $this->input->post('konten');
 
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'harga' => $this->input->post('harga'),
			'tipe' => $this->input->post('tipe'),
			'penjelasan' => $this->input->post('penjelasan'),
			'ukuran' => $this->input->post('ukuran'),
			'gambar' => $this->upload->data('file_name')
			);
		$this->barang_data->input_data($data,'barang');
		redirect('Barang/index');
		}
	}
	}

	public function index(){

            $this->load->model('barang_data');

            $x['data']=$this->barang_data->show_barang();

            $this->load->view("template/header1");
            $this->load->view('barang_view',$x);
            $this->load->view("template/footer1");

      }


    function edit($id){
    $where = array('id_barang' => $id);
    $x['data'] = $this->barang_data->edit_data($where,'barang')->result();
    $this->load->view("template/header1");
    $this->load->view('barang_edit',$x);
    $this->load->view("template/footer1");
	}

	function update(){
    $id = $this->input->post('id_barang');
    $nama_barang = $this->input->post('nama_barang');
    $harga = $this->input->post('harga');
    $tipe = $this->input->post('tipe');
    $penjelasan = $this->input->post('penjelasan');
    $ukuran = $this->input->post('ukuran');

    $config['upload_path']          = 'assets/gambar/upload';
    $config['allowed_types']        = 'gif|jpg|png';
    $this->load->library('upload', $config);

    if (file_exists('./assets/gambar/upload/'.$this->input->post('gambar'))) {
        unlink('./assets/gambar/upload/'.$this->input->post('gambar'));
    }

     if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

    $data = array(
        'nama_barang' => $nama_barang,
        'harga' => $harga,
        'tipe' => $tipe,
        'penjelasan' => $penjelasan,
        'ukuran' => $ukuran,
        'gambar' => $this->upload->data('file_name')
    );

    $where = array(
        'id_barang' => $id
    );

    $this->barang_data->update_data($where,$data,'barang');
    redirect('Barang');
    }
	}

	function hapus($id){
        $where = array('id_barang' => $id);
        $this->barang_data->hapus_data($where,'barang');
        redirect('Barang');
    }
	}
?>