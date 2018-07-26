<?php 
class barang_data extends CI_Model{

	function __construct(){
		$this->load->database();
 
	}
	function get_data(){
		return $this->db->get('barang');
	}
	function get_data_by_id($id = 0){
		return $this->db->get_where('barang', array('id_barang' => $id));
	}

	function show_barang(){

            $hasil=$this->db->query("SELECT * FROM barang");

            return $hasil;

      }

	function input_data($data,$table){
		$this->db->insert($table,$data);
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
    ->from('transaksi')
    ->join('barang', 'transaksi.id_barang = barang.id_barang')
    // ->order_by('date_created', 'desc')
    ->get();

    return $query ;
  }

  public function get_article_join1(){
     $this->db->select("*");
            if($this->session->userdata('id_level') != 1){
              $this->db->where('id_member',$this->session->userdata('id_member'));  
            }
            
            return $this->db->get('pengembalian');
  }


  public function dropdown(){
    $data = $this->db->select('id_barang, nama_barang')->from('barang')->get();
    $data_select[''] = "Pilih Barang " ;
    foreach ($data -> result() as $row) {
      $data_select[$row->id_barang] = $row->nama_barang;
    }
    return $data_select;
  }

	public function get_all_barang($limit = FALSE, $offset = FALSE)
   {  
       if ( $limit ) {
           $this->db->limit($limit, $offset);
       }
       // Urutkan berdasar abjad
       $this->db->order_by('nama_barang');

       $query = $this->db->get('barang');
       return $query->result();
   }

  public function get_all_barang1()
   {  
       
       $this->db->order_by('nama_barang');

       $query = $this->db->get('barang');
       return $query->result();
   }

   public function get_total()
   {
       // Dapatkan jumlah total artikel
       return $this->db->count_all("barang");
   }  



}