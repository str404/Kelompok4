<?php
	 class Barang extends CI_Controller {

	 	function __construct(){
		parent::__construct();		
		$this->load->model('barang_data');
		$this->load->model('kategori_data');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
        $this->load->library('pagination');
        if ($this->session->userdata('id_level')==null) {
            redirect('Welcome');
        }
	}

        // public function home(){
        // $this->load->view('home');
        // }

		public function create(){
            $data['dropdown'] = $this -> kategori_data -> dropdown();
		$this->form_validation->set_rules('nama_barang','Nama_Barang','required');
		$this->form_validation->set_rules('harga','Harga','required');
		$this->form_validation->set_rules('penjelasan','penjelasan','required');
		$this->form_validation->set_rules('penjelasan','Penjelasan','required');
		$this->form_validation->set_rules('ukuran','Ukuran','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('template/header1');
			$this->load->view('barang_form', $data);
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
			'id_kategori' => $this->input->post('kategori'),
			'penjelasan' => $this->input->post('penjelasan'),
			'ukuran' => $this->input->post('ukuran'),
			'gambar' => $this->upload->data('file_name')
			);
		$this->barang_data->input_data($data,'barang');
		redirect('Barang');
		}
	}
	}

	// public function index(){

 //            $this->load->model('barang_data');
           

 //            $x['data']=$this->barang_data->show_barang();
 //            $x['data']=$this->kategori_data->get_article_join();

 //            $this->load->view("template/header1");
 //            $this->load->view('barang_view',$x);
 //            $this->load->view("template/footer1");

 //      }

    public function index(){
        $this->load->model('barang_data');
         $this->load->model('kategori_data');
        $data['page_title'] = 'List Artikel';
        
        // Dapatkan data dari model Blog dengan pagination
        // Jumlah artikel per halaman
        $limit_per_page = 2; 
        // URI segment untuk mendeteksi "halaman ke berapa" dari URL
        $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

        // Dapatkan jumlah data
        $total_records = $this->barang_data->get_total();

        if ($total_records > 0) {
        // Dapatkan data pada halaman yg dituju
        $data['all_barang'] = $this->barang_data->get_all_barang($limit_per_page, 
        $start_index);
        
        // Konfigurasi pagination
        $config['base_url'] = base_url() . 'Barang/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        
        $this->pagination->initialize($config);
            
        // Buat link pagination
        $data["links"] = $this->pagination->create_links();
        // print_r($data['all_categories']);
        // echo $total_records;
        // echo $data['links'];
        // echo $start_index;
        $data['x']=$this->kategori_data->get_article_join();
        $data['x']=$this->barang_data->show_barang();
        $this->load->view("template/header1");
        $this->load->view('barang_view',$data);
        $this->load->view("template/footer1");
        }
       }


    function edit($id){
    $x['dropdown'] = $this -> kategori_data -> dropdown();
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
    $id_kategori = $this->input->post('kategori');
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
        'id_kategori' => $id_kategori,
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