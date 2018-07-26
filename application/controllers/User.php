  <?php
     class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('user_data');
        $this->load->model('member_data');
    }

    // public function index()
    // {
    //     $this->load->model('barang_data');
    //     $this->load->model('kategori_data');
    //     // $data['page_title'] = 'List Artikel';
        
    //     // Dapatkan data dari model Blog dengan pagination
    //     // Jumlah artikel per halaman
    //     // $limit_per_page = 2; 
    //     // // URI segment untuk mendeteksi "halaman ke berapa" dari URL
    //     // $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

    //     // // Dapatkan jumlah data
    //     // $total_records = $this->barang_data->get_total();

    //     // if ($total_records > 0) {
    //     // // Dapatkan data pada halaman yg dituju
    //     $data['all_barang'] = $this->barang_data->get_all_barang1();
    //     // // Konfigurasi pagination
    //     // $config['base_url'] = base_url() . 'Barang/index';
    //     // $config['total_rows'] = $total_records;
    //     // $config['per_page'] = $limit_per_page;
        
    //     // $this->pagination->initialize($config);
            
    //     // // Buat link pagination
    //     // $data["links"] = $this->pagination->create_links();
    //     // print_r($data['all_categories']);
    //     // echo $total_records;
    //     // echo $data['links'];
    //     // echo $start_index;
    //     $data['x']=$this->kategori_data->get_article_join();
    //     $data['x']=$this->barang_data->show_barang();
        
    //     $this->load->view('template/header_login');
    //     $this->load->view('welcome_message', $data);
    //     $this->load->view('template/footer_login');
    // }


    // Log in user
    public function login(){
        $data['page_title'] = 'Log In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('template/header_login');
            $this->load->view('login', $data);
            $this->load->view('template/footer_login');
        } else {

// Get username
    $username = $this->input->post('username');
    // Get & encrypt password
    $password = md5($this->input->post('password'));

    // Login user
    $id_member = $this->user_data->login($username, $password);

    if($id_member){
        // Buat session
        $data = array(
            'id_member' => $id_member,
            'username' => $username,
            'logged_in' => true,
            'id_level' => $this->user_data->get_user_level($id_member)
        );


        $this->session->set_userdata($data);

        // Set message
        $this->session->set_flashdata('user_loggedin', 'You are now logged in');

        // echo $this->session->userdata('id_level');
        // echo $this->session->userdata('id_member');
        redirect('user/Dashboard');
    } else {
        // Set message
        $this->session->set_flashdata('login_failed', 'Login is invalid');

        redirect('User/login');
    }       
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
            $this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

            redirect('User/login');

        // $this->member_data->input_data($data,'member');
        // redirect('Member/index');
        
    }
    }

    // Log user out
    public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_member');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_level');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('Welcome');
    }

    public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('user/login');
        }

        $username = $this->session->userdata('username');
        $id_level = $this->session->userdata('id_level');

        // Dapatkan detail user
        $data['user'] = $this->user_data->get_user_details( $username );
        $data['level'] = $this->user_data->get_user_level( $id_level );

        // Load dashboard
        $this->load->view('template/header1');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer1');
    }



}

 ?>