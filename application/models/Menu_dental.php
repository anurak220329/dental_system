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
                $this->db->where('nameDoctor', $name);
               
                $this->db->join('user', 'user.idUser = dentalitems.idUser', 'left');
               
               
                $query = $this->db->get();
                return $query->result();
                }

            function get_his($idUser){
                $this->db->select('*');
                $this->db->from('backup');
               
                $this->db->where('idUser', $idUser);
                $this->db->where('status', "ชำระเงินแล้ว");
                
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

                function get_profile($idUser){
                    $this->db->select('*');
                    $this->db->from('user');
                   
                    $this->db->where('idUser', $idUser);
                    
                    $query = $this->db->get();
                    return $query->result();
                    }

                function get_update($idDental)
                {
                $query=$this->db->query("select * from dentalitems  where idDental='".$idDental."'");
                return $query->result();
                }

                function get_finish($idDental)
                {
                $query=$this->db->query("select * from dentalitems  where idDental='".$idDental."'");
                return $query->result();
                }

                function update_records($nameDoctor,$status,$idDental)
	{
	$query=$this->db->query("update dentalitems SET nameDoctor='$nameDoctor',status='$status' where idDental='$idDental'");
	}


    function insert_records($idDental,$idUser,$date,$time,$dentalname,$nameDoctor,$status)
	{
	$query=$this->db->query("INSERT INTO backup (idDental, idUser, date, time, dentalname, nameDoctor, status )
    VALUES ('$idDental', '$idUser', '$date', '$time', '$dentalname', '$nameDoctor', '$status')");
    $query1=$this->db->query("delete from dentalitems where idDental='$idDental'");
	}
     
    function insert_backup($data,$idDental){
        $this->db->insert('backup',$data);
        $query=$this->db->query("delete from dentalitems where idDental='$idDental'");
    }

                function Update_profile($data)
                {
                 $idUser =  $this->session->userdata('idUser');
                 $this->db->where('idUser', $idUser);
                  $this->db->update('user', $data);
                 }


    function validate($email,$password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $result = $this->db->get('user',1);
        return $result;
      }

      function checkdate($date,$time){
        $this->db->where('date',$date);
        $this->db->where('time',$time);
        $result = $this->db->get('dentalitems',1);
        return $result;
      }

      function check_book($date){
        
        $this->db->select('*');
        $this->db->from('dentalitems');
        $this->db->where('date',$date);
        $query = $this->db->get();
        return $query->result();
        }
      
     



       
}