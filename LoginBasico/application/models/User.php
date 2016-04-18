<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id_persona, usuario, password');
   $this -> db -> from('personas');
   $this -> db -> where('usuario', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>