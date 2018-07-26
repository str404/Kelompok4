<?php 
class member_data extends CI_Model{

	function __construct(){
		$this->load->database();
 
	}
	function get_data(){
		return $this->db->get('member');
	}
	function get_data_by_id($id = 0){
		return $this->db->get_where('member', array('id_member' => $id));
	}

	function show_member(){

            $hasil=$this->db->query("SELECT * FROM member");

            return $hasil;

      }

	// function input_data($data,$table){
	// 	$this->db->insert($table,$data);
	// }

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
    ->join('member', 'transaksi.id_member = member.id_member')
    // ->order_by('date_created', 'desc')
    ->get();

    return $query ;
  }

  public function get_article_join1(){
    $query = $this->db->select('*')
    ->from('pengembalian')
    ->join('member', 'pengembalian.id_member = member.id_member')
    // ->order_by('date_created', 'desc')
    ->get();

    return $query ;
  }

  public function dropdown(){
    $data = $this->db->select('id_member, nama')->from('member')->get();
    $data_select[''] = "Pilih Customer " ;
    foreach ($data -> result() as $row) {
      $data_select[$row->id_member] = $row->nama;
    }
    return $data_select;
  }

     public function register($enc_password){
       // Array data user
       $data = array(
      'nama' => $this->input->post('nama'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'alamat' => $this->input->post('alamat'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'no_telp' => $this->input->post('no_telp'),
      'username' => $this->input->post('username'),
      'password' => $enc_password,
      'id_level' => $this->input->post('id_level')
      );

       // Insert user
       return $this->db->insert('member', $data);
   }


}