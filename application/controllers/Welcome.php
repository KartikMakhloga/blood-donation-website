<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('Donor_model');
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
	}
	public function index()
	{


		$this->load->view('inc/header');
		$this->load->view('dashboard');
		$this->load->view('inc/footer');
	}

	function donor_info()
	{
		$id = $this->session->userdata('sess_user_id');

		$data['donor_details'] = $this->Donor_model->fetch_donor_info($id);

		$this->load->view('inc/header');
		$this->load->view('donor_reciept', $data);
		// $this->load->view('inc/footer');

	}
	function sweet_alert(){
		$this->load->view('sweet_alert');

	}
	public function register()
	{

		$email = $_POST["email"];
		$password = $_POST["password"];
		$temp_email = 0;
		$temp_id = 0;

		if (!empty($email)) $temp_email = $email;

		$check_email = $this->Donor_model->check_dup_email($temp_email, $temp_id);
		if ($check_email == 0) {
			$data = array(
				"name" => $_POST["name"],
				"email" => $_POST["email"],
				"dob" => $_POST["date"],
				"campus" => $_POST["campus"],
				"gender" => $_POST["gender"],
				"phone_number" => $_POST["number"],
				"password" => $_POST["password"],
				"created_at" => date('Y-m-d H:i:s')
			);
			$insert = $this->Donor_model->save_donor($data);

			if ($insert) {
				// echo "insert successfully";
				// Set flash data 
				$this->session->set_flashdata('Success', 'Success! You have registered successfully');
				// After that you need to used redirect function instead of load view such as 
				redirect("http://localhost/new_project/");
			} else {
				echo "failed";
			}

			$session = $this->Donor_model->sess_donor_info($email, $password);
		} else {
			
			echo "<script>
				alert('email id already exist!');
				window.location.href = 'http://localhost/new_project/';
			</script>";
		}
	}

	public function do_login()
	{
		$chkLogin = 0;

		$email = "";
		$pwd = "";
		// $alert_msg = array();

		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
		
		} //echo "staff_name : $staff_name <br>";
		if (!empty($_POST['password'])) {
			$pwd = $_POST['password'];
			
		} //echo " staff_pwd : $staff_pwd <br>";



		$chkLogin = $this->Donor_model->sess_donor_info($email, $pwd);

		if ($chkLogin == 1) {

		

			redirect(MAINSITE);
		} else {
		
			$chkLogin = 0;

			//  $alert_msg['msg']="*Invalid Username OR Password.";
			echo "<script>
				
			alert('Invalid email Or Password');
			window.location.href = 'http://localhost/new_project/';
		</script>";

			
		}
	}

	public function logout()
	{
		//$alert_msg=array();
		$array_items = array('sess_user_id' => '', 'sess_user_name' => '', 'sess_user_email' => '');
		$this->session->unset_userdata($array_items);
		$this->session->userdata('sess_user_id', 0);
		$this->session->userdata('sess_user_name', '');
		$this->session->userdata('sess_user_email', '');
		$this->session->sess_destroy();
		$this->session->set_userdata('sess_user_id', -1);
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		// $alert_msg['msg']="*Successfully Logged Out.";
		redirect(MAINSITE);
	}
	public function addDonor()
	{
		$last_date = $_POST["last_date"];
		$app_date = $_POST["appoint_date"];

		$new_date = date('Y-m-d', strtotime($app_date . ' - 90 days'));
		$check=$this->Donor_model->donate_disable($this->session->userdata('sess_user_id'));
		$user_appointment_date=$check[0]->appointment_date;
		$next_date=date('Y-m-d', strtotime($user_appointment_date . ' + 90 days'));
		

		if($new_date >= $last_date) {
			$data = array(
				"donor_id" => $this->session->userdata('sess_user_id'),
				"blood_group" => $_POST["bloodGroup"],
				"last_donation_date" => $_POST["last_date"],
				"appointment_date" => $_POST["appoint_date"],
				"time" => $_POST["Selecttime"],
				"created_at" => date('Y-m-d H:i:s')
			);

			if($app_date >= $next_date){

				$insert = $this->Donor_model->add_donor_blood($data);
				if ($insert) {
					// echo "insert successfully";
					// Set flash data 
					$this->session->set_flashdata('Success', 'Success! You have registered successfully');
					// After that you need to used redirect function instead of load view such as 
					redirect(MAINSITE . 'donor_information');
				} else {
					echo "failed";
				}
			}else{
				echo "<script>
				
				alert('Sorry!  you already donated blood,please complete your 3 months first ');
				window.location.href = 'http://localhost/new_project/';
			</script>";
			}
			
           
		
		} else {
			echo "<script>
    alert('Sorry!  You cant Donate Blood before 90 Days');
    window.location.href = 'http://localhost/new_project/';
</script>";
		}
	}

	public function i_need_blood()
	{
         
		$data = array(
			"donor_iD" => $this->session->userdata('sess_user_id'),
			"blood_group" => $_POST["bloodGroup"],
			"Campus" => $_POST["campus"],
			"blood_unit" => $_POST["blood_unit"],
			"created_at" => date('Y-m-d H:i:s')
		);
		

		$insert = $this->Donor_model->need_blood($data);

			if ($insert) {
				echo "<script>
				alert('Thanks for reaching us! We will contact you very soon');
				window.location.href = 'http://localhost/new_project/';
			</script>";
					
				// echo "insert successfully";
				// Set flash data 
				// $this->session->set_flashdata('drop', 'Success! You have registered successfully');
				// redirect(MAINSITE . 'sweet_alert');
			} else {
				echo "failed";
			}
	}
	function change_password(){

		$this->load->view('inc/header');
		$this->load->view('change_password');
		$this->load->view('inc/footer');
	}

	function update_password(){

		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");  
        $userId = $this->session->userdata("sess_user_id");
        if(!empty($_POST['oldpassword']) && !empty($_POST['password']) && !empty($_POST['password_confirmation']) && !empty($userId))
        {
            $oldpassword = $_POST['oldpassword'];
            $matchPassword = $this->Donor_model->matchPassword($oldpassword,$userId);
            if($matchPassword == 1){
              if($_POST['password'] == $_POST['password_confirmation']){
                
                $entereddata['password']=$_POST['password'];
                $update = $this->Donor_model->updatePassword($entereddata,$userId);
                if($update){
                
				   echo "<script>
				   alert('Updated Successfully!');
				   window.location.href = 'http://localhost/new_project/change_password';
			   </script>";
                    
                    
                  }else{
					echo "<script>
					alert('Something Went Wrong!');
					window.location.href = 'http://localhost/new_project/change_password';
				</script>";
                  }

              }else{
               
				echo "<script>
				alert('password does not match!');
				window.location.href = 'http://localhost/new_project/change_password';
			</script>";
              }
                

            }else{
            
			  echo "<script>
			  alert('You have entered wrong old password');
			  window.location.href = 'http://localhost/new_project/change_password';
		  </script>";
            }
            
            }else {
           
			echo "<script>
			alert('Something Went Wrong!');
			window.location.href = 'http://localhost/new_project/change_password';
		</script>";            
        }
	}

	function profile(){

		$id = $this->session->userdata('sess_user_id');
        $data['user_details']      =$this->Donor_model->user_profile($id);
        $data['donor_details']     =$this->Donor_model->donor_details($id);
        $data['need_blood_details']=$this->Donor_model->need_blood_details($id);

		$this->load->view('inc/header');
		$this->load->view('profile',$data);
		// $this->load->view('inc/footer');

		

	}
}
