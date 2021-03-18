<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Menu_dental','DT');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('View_login');
	}
	public function index2()
	{
		$this->load->view('index');
	}
	public function book()
	{
		$this->load->view('Book');
	}
	public function Register()
	{
		$this->load->view('Regis');
	}

	public function showbook()
	{
		$idUser =  $this->session->userdata('idUser');
		$result['DT'] = $this->DT->get_book($idUser);
		$this->load->view('Bookdetail',$result);
		
	}

	public function showdoc()
	{
		$name =  $this->session->userdata('name');
		$result['DT'] = $this->DT->get_doc($name);
		$this->load->view('Doctor',$result);
		
	}

	public function showhistory()
	{
		$idUser =  $this->session->userdata('idUser');
		$result['DT'] = $this->DT->get_his($idUser);
		$this->load->view('Bookhis',$result);
		
	}
	public function showadmin()
	{
		
		$result['DT'] = $this->DT->get_admin();
		$this->load->view('Admin',$result);
	}

	public function profile()
	{
		$idUser =  $this->session->userdata('idUser');
		$result['DT'] = $this->DT->get_profile($idUser);
		$this->load->view('Profile',$result);
		
	}

	public function edit()
	{
		$idUser =  $this->session->userdata('idUser');
		$result['DT'] = $this->DT->get_profile($idUser);
		$this->load->view('Editprofile',$result);
	}

	public function edit_profile()
	{
		$data = array(
			'name' => $this->input->post("name"),
			'lname' => $this->input->post("lname"),
			'phone'=> $this->input->post("phone"),
			'gender'=> $this->input->post("gender"),
			'congenitaldisease'=> $this->input->post("congenitaldisease"),
			'allergic'=> $this->input->post("allergic"),
			'blood'=> $this->input->post("blood"),
			'email'=> $this->input->post("email"),
			'emergencycontract'=> $this->input->post("emergencycontract"),
			'emergencyphone'=> $this->input->post("emergencyphone"),
		);
		$this->DT->update_profile($data);
			
		$idUser =  $this->session->userdata('idUser');
		$result['DT'] = $this->DT->get_profile($idUser);
		$this->load->view('Profile',$result);
			echo '<script>alert("แก้ไขโปรไฟล์เสร็จเรียบร้อย")</script>'; 
	}
	public function reg_menu(){
		$data = array(
			'name' => $this->input->post("name"),
			'lname' => $this->input->post("lname"),
			'gender' => $this->input->post("gender"),
			'phone'=> $this->input->post("phone"),
			'email'=> $this->input->post("email"),
			'password'=> $this->input->post("password"),
			'level'=> ("2"),
			
		);

		
		

		if($this->input->post("name")!= "" && $this->input->post("lname")!== ""){
			$this->DT->insert_user($data);
			
			$this->load->view('View_login');
			echo '<script>alert("สมัครสมาชิกเรียบร้อย")</script>'; 
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}

	}

	public function booking(){
		$data = array(
			'dentalname' => $this->input->post("dentalname"),
			'date' => $this->input->post("date"),
			'time' => $this->input->post("time"),
			'idUser' => $this->input->post("idUser"),
			'status' => ("รอเจ้าหน้าที่ตรวจสอบ"),
			'idDoctor' => ("รอเจ้าหน้าที่ระบุ"),
		);

		

		if($this->input->post("dentalname")!= "" && $this->input->post("date")!== ""){
			$this->DT->insert_dentalitems($data);
			
			$this->load->view('index');
			echo '<script>alert("จองคิวเรียบร้อย")</script>'; 
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้ค่ะ !";
		}

	}

	public function update()
	{
	$idDental=$this->input->get('idDental');
	$result['data']=$this->DT->get_update($idDental);
	$this->load->view('Update',$result);
	
		if($this->input->post('update'))
		{
		$idDoctor=$this->input->post('idDoctor');
		$status=$this->input->post('status');
		$iddental=$this->input->post('idDental');
		$this->DT->update_records($idDoctor,$status,$idDental);
		echo "อัพเดทเสร็จเรียบร้อย !";
		}
	}


	function auth(){
		$email    = $this->input->post('email',TRUE);
		$password = ($this->input->post('password',TRUE));
		$validate = $this->DT->validate($email,$password);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$name  = $data['name'];
			$email = $data['email'];
			$level = $data['level'];
			$idUser = $data['idUser'];
			$sesdata = array(
				'idUser' => $idUser,
				'name'  => $name,
				'email'     => $email,
				'level'     => $level,
				'logged_in' => TRUE
			);
			
			$this->session->set_userdata($sesdata);
			// access login for admin
			if($level === '1'){
				$this->showadmin();
				echo '<script>alert("เข้าสู่ระบบสำเร็จ")</script>'; 
			// access login for staff
			}elseif($level === '2'){
				$this->load->view('index');
				echo '<script>alert("เข้าสู่ระบบสำเร็จ")</script>'; 
			// access login for author
			}else{
				$this->showdoc();
				echo '<script>alert("เข้าสู่ระบบสำเร็จ")</script>'; 
			}
		}else{
			echo $this->session->set_flashdata('msg','Username or Password is Wrong');
			$this->load->view('View_login');
			echo '<script>alert("อีเมลหรือรหัสผ่านผิด")</script>'; 
		}
	  }
	 
	  function logout(){
		  $this->session->sess_destroy();
		  $this->load->view('View_login');
	  }
	 

	 
	}
 
	

	

	
