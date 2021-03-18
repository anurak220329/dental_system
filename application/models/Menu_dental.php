<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_dental extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        function insert_user($data){
			$this->db->insert('user',$data);
        }
        function insert_dentalitems($data){
			$this->db->insert('dentalitems',$data);
        }
        
        function get_book($idUser){
            $this->db->select('*');
            $this->db->from('dentalitems');
           
            $this->db->where('idUser', $idUser);
            $this->db->where('status', "รอเจ้าหน้าที่ตรวจสอบ");
            
            $query = $this->db->get();
            return $query->result();
            }

            function get_doc($name){
                $this->db->select('*');
                $this->db->from('dentalitems');
                $this->db->where('idDoctor', $name);
               
                $this->db->join('user', 'user.idUser = dentalitems.idUser', 'left');
               
               
                $query = $this->db->get();
                return $query->result();
                }

            function get_his($idUser){
                $this->db->select('*');
                $this->db->from('dentalitems');
               
                $this->db->where('idUser', $idUser);
                $this->db->where('status', "สำเร็จ");
                
                $query = $this->db->get();
                return $query->result();
                }

                function get_admin(){
                    
                    $this->db->select('*');
                $this->db->from('dentalitems');
                $this->db->join('user', 'user.idUser = dentalitems.idUser', 'left');
                $query = $this->db->get();
                return $query->result();
                }

                function get_update($idDental)
                {
                $query=$this->db->query("select * from dentalitems where idDental='".$idDental."'");
                return $query->result();
                }

                function update_records($idDoctor,$status,$idDental)
	{
	$query=$this->db->query("update dentalitems SET idDoctor='$idDoctor',status='$status' where idDental='$idDental'");
	}

    function validate($email,$password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $result = $this->db->get('user',1);
        return $result;
      }


     



       
}