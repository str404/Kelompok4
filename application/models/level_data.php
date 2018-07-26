<?php
	class Level_model extends CI_Model{
		function __construct(){
		$this->load->database();
	}
   
  public function get_article_join(){
    $query = $this->db->select('*')
    ->from('users')
    ->join('level', 'users.level_id = level.level_id')
    ->get();

    return $query ;
  }
}
?>