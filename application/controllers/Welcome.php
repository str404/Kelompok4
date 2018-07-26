<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('user_data');
    }

	public function index()
	{
		$this->load->model('barang_data');
        $this->load->model('kategori_data');
        // $data['page_title'] = 'List Artikel';
        
        // Dapatkan data dari model Blog dengan pagination
        // Jumlah artikel per halaman
        // $limit_per_page = 2; 
        // // URI segment untuk mendeteksi "halaman ke berapa" dari URL
        // $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

        // // Dapatkan jumlah data
        // $total_records = $this->barang_data->get_total();

        // if ($total_records > 0) {
        // // Dapatkan data pada halaman yg dituju
        $data['all_barang'] = $this->barang_data->get_all_barang1();
        // // Konfigurasi pagination
        // $config['base_url'] = base_url() . 'Barang/index';
        // $config['total_rows'] = $total_records;
        // $config['per_page'] = $limit_per_page;
        
        // $this->pagination->initialize($config);
            
        // // Buat link pagination
        // $data["links"] = $this->pagination->create_links();
        // print_r($data['all_categories']);
        // echo $total_records;
        // echo $data['links'];
        // echo $start_index;
        $data['x']=$this->kategori_data->get_article_join();
        $data['x']=$this->barang_data->show_barang();
        
		$this->load->view('template/header_login');
		$this->load->view('welcome_message', $data);
		$this->load->view('template/footer_login');
	}
}
