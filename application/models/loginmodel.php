<?php
class loginmodel extends CI_Model
{
   public function isvalidate($username,$password)
   {
    $q=$this->db->where(['username'=>$username,'password'=>$password])
              ->get('user');
              if($q->num_rows()){
              	return $q->row()->id;
              }else{

              	return false;
              }

   }
   public function articleList()
   {

   	$id=$this->session->userdata('id');
     $q=$this->db->select('*')
              ->from('article')
              ->where(['id'=>$id])
              ->get();
              return $q->result();


   }


}


?>