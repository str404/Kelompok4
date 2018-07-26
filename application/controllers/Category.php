<?php
    
    class Category extends CI_Controller {
        function __construct(){
        parent::__construct();      
        $this->load->helper('url','form');
         $this->load->model('kategori_data');
         if ($this->session->userdata('id_level')==null) {
            redirect('Welcome');
        }
    }

   //  public function index()
   // {
   //   $this->load->helper('url','form');
   //  $this->load->model('kategori_data');

   //      // Judul Halaman
   //      $data['page_title'] = 'List Kategori';

   //      // Dapatkan semua kategori
   //      $data['categories'] = $this->kategori_data->get_all_categories();

   //      $this->load->view('category_view', $data);
   //  }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('kategori_data');
        // Judul Halaman
       $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'nama_kategori',
            'Nama Kategori',
            'required|is_unique[kategori.nama_kategori]',
            array(
                'required' => ' Nama kategori Harus diisi.',
                'is_unique' => 'nama_kategori ' . $this->input->post('nama_kategori') . ' sudah ada.'
            )
        );

        // $this->form_validation->set_rules(
        //     'deskripsi',
        //     'deskripsi kategori',
        //     'required|is_unique[categories.deskripsi]',
        //     array(
        //         'required' => ' deskripsi Harus diisi.',
        //         'is_unique' => 'deskripsi ' . $this->input->post('deskripsi') . ' sudah ada.'
        //     )
        // );

        if($this->form_validation->run() == false){
            $this->load->view('template/header1');
            $this->load->view('category_create', $data);
            $this->load->view('template/footer1');
        } else {
            $this->kategori_data->create_category();
            redirect('Category');
        }
    }

     public function index(){

            $this->load->model('kategori_data');

            $x['data']=$this->kategori_data->show_barang();
            // $x['data']=$this->kategori_data->get_article_join();

            $this->load->view('template/header1');
            $this->load->view('category_view',$x);
            $this->load->view('template/footer1');



        // $data['page_title'] = 'List Artikel';
        
    //     // Dapatkan data dari model Blog dengan pagination
    //     // Jumlah artikel per halaman
    //     $limit_per_page = 6; 
    //     // URI segment untuk mendeteksi "halaman ke berapa" dari URL
    //     $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

    //     // Dapatkan jumlah data
    //     $total_records = $this->kategori_data->get_total();

    //     if ($total_records > 0) {
    // // Dapatkan data pada halaman yg dituju
    // $data["all_categories"] = $this->kategori_data->get_all_categories($limit_per_page, 
    // $start_index);
    
    // // Konfigurasi pagination
    // $config['base_url'] = base_url() . 'Category/index';
    // $config['total_rows'] = $total_records;
    // $config['per_page'] = $limit_per_page;
    // $config["uri_segment"] = 3;
    
    // $this->pagination->initialize($config);
        
    // // Buat link pagination
    // $data["links"] = $this->pagination->create_links();

        
      }

    function edit($id_kategori){
    $where = array('id_kategori' => $id_kategori);
    $x['data'] = $this->kategori_data->edit_data($where,'kategori')->result();
    $this->load->view('template/header1');
    $this->load->view('category_edit',$x);
    $this->load->view('template/footer1');
}

function update(){
    $id_kategori = $this->input->post('id_kategori');
    $nama = $this->input->post('nama_kategori');
    // $deskripsi = $this->input->post('deskripsi');

    $data = array(
        'nama_kategori' => $nama
        // 'deskripsi' => $deskripsi
    );

    $where = array(
        'id_kategori' => $id_kategori
    );

    $this->kategori_data->update_data($where,$data,'kategori');
    redirect('Category');
}

function hapus($id_kategori){
        $where = array('id_kategori' => $id_kategori);
        $this->kategori_data->hapus_data($where,'kategori');
        redirect('Category');
    }
}


?>

