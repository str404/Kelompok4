<?php
	class kategori_data extends CI_Model{
		function __construct(){
		$this->load->database();
	}
   public function create_category()
   {
       $data = array(
           'nama_kategori'          => $this->input->post('nama_kategori')
           // 'deskripsi'   => $this->input->post('deskripsi')
       );

       return $this->db->insert('kategori', $data);
   }

      public function get_all_categories()
   {
       // Urutkan berdasar abjad
       $this->db->order_by('nama_kategori');

       $query = $this->db->get('kategori');
       return $query->result();
   }

   function show_barang(){

            $hasil=$this->db->query("SELECT * FROM kategori");

            return $hasil;

      }

  function edit_data($where,$table){    
  return $this->db->get_where($table,$where);
  }
  
  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function hapus_data($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
  }

  public function get_article_join(){
    $query = $this->db->select('*')
    ->from('barang')
    ->join('kategori', 'barang.id_kategori = kategori.id_kategori')
    // ->order_by('date_created', 'desc')
    ->get();

    return $query ;
  }

  public function dropdown(){
    $data = $this->db->select('id_kategori, nama_kategori')->from('kategori')->get();
    $data_select[''] = "Pilih Kategori " ;
    foreach ($data -> result() as $row) {
      $data_select[$row->id_kategori] = $row->nama_kategori;
    }
    return $data_select;
  }

  // public function get_all_categories( $limit = FALSE, $offset = FALSE )
  //  {
  //      // Jika variable $limit ada pada parameter maka kita limit query-nya
  //      if ( $limit ) {
  //          $this->db->limit($limit, $offset);
  //      }
  //      // Urutkan berdasar tanggal
  //      $this->db->order_by('categories.date_created', 'DESC');

  //      // Inner Join dengan table Categories
  //       $this->db->join('categories', 'categories.cat_id = blogs.fk_cat_id');
      
  //      $query = $this->db->get('categories');

  //      // Return dalam bentuk object
  //      return $query->result();
  //  }

   // public function get_total()
   // {
   //     // Dapatkan jumlah total artikel
   //     return $this->db->count_all("categories");
   // }



  }
?>