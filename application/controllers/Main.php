<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
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
	public function test()
	{
		$this->load->view('test');
	}
	public function book()
	{
		$result['DT'] = $this->DT->get_d();
		$this->load->view('Book', $result);
	}
	public function books()
	{
		$this->load->view('checkbook');
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
	public function showbooks()
	{
		$idUser =  $this->session->userdata('idUser');
		$result['DT'] = $this->DT->get_bookss($idUser);
		$this->load->view('Bookdetails',$result);
		
	}
	public function showbookchoose()
	{
		$idUser =  $this->session->userdata('idUser');
		$result['DT'] = $this->DT->get_books($idUser);
		$this->load->view('bookchoose',$result);
		
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
		$date    = $this->input->post('date',TRUE);
		$time    = $this->input->post('time',TRUE);
		$checkdate = $this->DT->checkdate($date,$time);
		
		$data1  = $checkdate->row_array();
		$date1  = $data1['date'];
		$time1  = $data1['time'];
		$nameDoctor1 = $data1['nameDoctor'];
		$day = date("20y-m-d");
	
		$data = array(
			'dentalname' => $this->input->post("dentalname"),
			'date' => $this->input->post("date"),
			'time' => $this->input->post("time"),
			'idUser' => $this->input->post("idUser"),
			'status' => ("จองสำเร็จ"),
			'nameDoctor' => $this->input->post("nameDoctor"),
		);

		if($this->input->post("date") < $day){
			$this->book();
			echo '<script>alert("ไม่สามารถจองย้อนหลังได้ค่ะ")</script>'; 
		}
		else if($this->input->post("date") == $date1 && $this->input->post("time") == $time1 && $this->input->post("nameDoctor") == $nameDoctor1){
			$this->book();
			echo '<script>alert("คิวหมอไม่ว่างค่ะ")</script>'; 
		}
		else if($this->input->post("date")!= $date1 && $this->input->post("time")!== $time1){
			$this->DT->insert_dentalitems($data);
			
			$this->showbook();
			echo '<script>alert("จองคิวสำเร็จค่ะ")</script>'; 
		}else {
			echo '<script>alert("วันและเวลานี้มีคนจองแล้วค่ะ !")</script>'; 
			echo '<script>alert("กรุณาลองเปลี่ยนเวลาการจองค่ะ")</script>'; 
			$this->book();
		}

	}

	public function bookingss(){
		$date    = $this->input->post('date',TRUE);
		$time    = $this->input->post('time',TRUE);
		$checkdate = $this->DT->checkdate($date,$time);
		
		$data1  = $checkdate->row_array();
		$date1  = $data1['date'];
		$time1  = $data1['time'];
		
		$day = date("20y-m-d");
	
		$data = array(
			
			'date' => $this->input->post("date"),
			'time' => $this->input->post("time"),
			'idUser' => $this->input->post("idUser"),
			'status' => ("กำลังจอง"),
			
		);

		if($this->input->post("date") < $day){
			$this->book();
			echo '<script>alert("ไม่สามารถจองย้อนหลังได้ค่ะ")</script>'; 
		}
		
		else if($this->input->post("date")!= $date1 && $this->input->post("time")!== $time1){
			$this->DT->insert_dentalitems($data);
			
			$this->showbooks();
			
		}else {
			echo '<script>alert("วันและเวลานี้มีคนจองแล้วค่ะ !")</script>'; 
			echo '<script>alert("กรุณาลองเปลี่ยนเวลาการจองค่ะ")</script>'; 
			$this->book();
		}

	}

	public function bookings()
	{
	$idDental=$this->input->get('idDental');
	$result['data']=$this->DT->get_choose($idDental);
	$this->load->view('booking',$result);
	
	
	}
	public function choose()
	{
	$idDental=$this->input->post('idDental');
	$date= $this->input->post('date',TRUE);
	$time= $this->input->post('time',TRUE);
	$result['data']=$this->DT->get_choosedoc($idDental, $date, $time);
	$this->load->view('bookdoc',$result);
	
	
	}

	public function checkbooking(){
		$idDental    = $this->input->post('idDental',TRUE);
		$result['DT'] = $this->DT->check_book($idDental);
		$this->load->view('checkbook',$result);
		

	}

	public function update()
	{
	$idDental=$this->input->get('idDental');
	$result['data']=$this->DT->get_update($idDental);
	$this->load->view('Update',$result);
	
		if($this->input->post('update'))
		{
		$nameDoctor=$this->input->post('nameDoctor');
		$status=$this->input->post('status');
		$iddental=$this->input->post('idDental');
		$this->DT->update_records($nameDoctor,$status,$idDental);
		echo "อัพเดทเสร็จเรียบร้อย !";
		}
	}

	

	public function finish()
	{
	$idDental=$this->input->get('idDental');
	$result['data']=$this->DT->get_finish($idDental);
	$this->load->view('Finish',$result);
	
		
	}

	public function finishcheck()
	{
	$idDental=$this->input->get('idDental');
	$result['data']=$this->DT->get_finishcheck($idDental);
	$this->load->view('Finishcheck',$result);
	
		
	}

	public function finishs()
	{
	$idDental=$this->input->get('idDental');
	$result['data']=$this->DT->get_finishs($idDental);
	$this->load->view('Finishs',$result);
	
	if($this->input->post('updat'))
		{
		$nameDoctor=$this->input->post('nameDoctor');
		$status=("จองแล้ว");
		$namelist=$this->input->post('namelist');
		$this->DT->update_record($nameDoctor,$status,$namelist,$idDental);
		echo "อัพเดทเสร็จเรียบร้อย !";
		}
		
	}
	
	public function tests(){
		$date    = $this->input->post('dates',TRUE);
		$result['DTS'] = $this->DT->testdate($date);
		$this->load->view('Book',$result);
		

	}

	public function testss(){
		$date    = $this->input->post('dates',TRUE);
		$result['DTS'] = $this->DT->testdate($date);
		$this->load->view('Book1',$result);
		

	}
	public function testt(){
		$idDental=$this->input->get('idDental');
		$dentalname    = $this->input->post('dentalname',TRUE);
		$result['data'] = $this->DT->testdates($dentalname);
		$this->load->view('Finishs',$result);
		
		if($this->input->post('updat'))
		{
		$nameDoctor=$this->input->post('nameDoctor');
		$status=("จองสำเร็จ");
		$namelist=$this->input->post('namelist');
		$idDental=$this->input->post('idDental');
		$this->DT->update_record($nameDoctor,$status,$namelist,$idDental);
		$this->showbook();
		echo '<script>alert("จองคิวสำเร็จค่ะ")</script>'; 
		}

	}

	public function testtt(){
	$nameDoctor=$this->input->post('nameDoctor');
		$status=("จองสำเร็จ");
		$namelist=$this->input->post('namelist');
		$idDental=$this->input->post('idDental');
		$this->DT->update_record($nameDoctor,$status,$namelist,$idDental);
		$this->showbook();
		echo '<script>alert("จองคิวสำเร็จค่ะ")</script>'; 
	}



	public function backup(){
		$idDental=$this->input->post('idDental');
		$data = array(
		'idDental'=> $this->input->post('idDental'),
		'idUser'=> $this->input->post('idUser'),
		'date'=> $this->input->post('date'),
		'time'=> $this->input->post('time'),
		'dentalname'=> $this->input->post('dentalname'),
		'nameDoctor'=> $this->input->post('nameDoctor'),
		'status'=> $this->input->post('status'),
		);

			$this->DT->insert_backup($data,$idDental);
			
			$this->showadmin();
			echo '<script>alert("อัพเดทเสร็จเรียบร้อย !")</script>'; 

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
 
	

	

	
