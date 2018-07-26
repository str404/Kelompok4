<?php 
class user_data extends CI_Model{

// Proses login user
   public function login($username, $password){
       // Validasi
       $this->db->where('username', $username);
       $this->db->where('password', $password);

       $result = $this->db->get('member');


       if($result->num_rows() == 1){
           return $result->row(0)->id_member;
       } else {
           return false;
       }
   }

   public function get_user_level($id_member) {
       // Dapatkan data level
       $this->db->where('id_member', $id_member);

       $result = $this->db->get('member');
       
       if ($result->num_rows() == 1) {
           return $result->row(0)->id_level;
       } else {
           return false;
       }
   }

   public function get_user_details( $username )
   {

       $this->db->where('username', $username);

       $result = $this->db->get('member');
       
       if ($result->num_rows() == 1) {
           return $result->row();
       } else {
           return false;
       }
   }

 }

?>