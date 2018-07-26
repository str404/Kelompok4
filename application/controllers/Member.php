<?php
	 class Member extends CI_Controller {

	 	function __construct(){
		parent::__construct();		
		$this->load->model('member_data');
		// $this->load->model('Category_model');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
        if ($this->session->userdata('id_level')==null) {
            redirect('Welcome');
        }
	}

		public function create(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis kelamin','required');
		$this->form_validation->set_rules('no_telp','Nomor Telepon','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('id_level','id_level','required');

		if ($this->form_validation->run()==false) {
			$this->load->view('template/header_login');
			$this->load->view('member_form');
			$this->load->view('template/footer_login');
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

            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->member_data->register($enc_password);

            // Tampilkan pesan
            $this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

            redirect('User/login');

		// $this->member_data->input_data($data,'member');
		// redirect('Member/index');
		
	}
	}


    public function createadmin(){
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis kelamin','required');
        $this->form_validation->set_rules('no_telp','Nomor Telepon','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('id_level','id_level','required');

        if ($this->form_validation->run()==false) {
            $this->load->view('template/header1');
            $this->load->view('createadmin_form');
            $this->load->view('template/footer1');
        }else{
        // $config['upload_path']          = 'assets/gambar/upload';
  //       $config['allowed_types']        = 'gif|jpg|png';
  //       $this->load->library('upload', $config);

  //        if ( ! $this->upload->do_upload('userfile'))
  //        {
  //                $error = array('error' => $this->upload->display_errors());
  //                print_r($error);
  //        }
  //        else
  //        {
  //                $data = array('upload_data' => $this->upload->data());
            
        // $id = $this->input->post('id');
        // $judul = $this->input->post('judul');
        // $tanggal = $this->input->post('tanggal');
        // $author= $this->input->post('author');
        // $konten = $this->input->post('konten');

            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->member_data->register($enc_password);

            // Tampilkan pesan
            $this->session->set_flashdata('user_registered', 'Member telah dibuat.');

            redirect('Member');

        // $this->member_data->input_data($data,'member');
        // redirect('Member/index');
        
    }
    }

	public function index(){

            $this->load->model('member_data');

            $x['data']=$this->member_data->show_member();

            $this->load->view("template/header1");
            $this->load->view('member_view',$x);
            $this->load->view("template/footer1");

    }


    function edit($id){
    $where = array('id_member' => $id);
    $x['data'] = $this->member_data->edit_data($where,'member')->result();
    $this->load->view("template/header1");
    $this->load->view('member_edit',$x);
    $this->load->view("template/footer1");
	}

	function update(){
    $id = $this->input->post('id_member');
    $nama = $this->input->post('nama');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $no_telp = $this->input->post('no_telp');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $prioritas = $this->input->post('id_level');

    $data = array(
        'nama' => $nama,
        'tgl_lahir' => $tgl_lahir,
        'alamat' => $alamat,
        'jenis_kelamin' => $jenis_kelamin,
        'no_telp' => $no_telp,
        'username' => $username,
        'password' => $password,
        'id_level' => $prioritas
    );

    $where = array(
        'id_member' => $id
    );

    $this->member_data->update_data($where,$data,'member');
    redirect('Member');
	}

	function hapus($id){
        $where = array('id_member' => $id);
        $this->member_data->hapus_data($where,'member');
        redirect('Member');
    }
	}
?>