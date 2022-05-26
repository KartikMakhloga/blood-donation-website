<?php
   class Donor_model extends CI_Model{
    function save_donor($data){
        
        $this->db->insert("donors", $data);
        return $this->db->insert_id();
       } 

    function need_blood($data){
      
        $this->db->insert("need_blood", $data);
        return $this->db->insert_id();
        

    }
    
    public function matchPassword($pass,$id){
      if (!empty($pass))

  $this->db->where('password', $pass);
  $this->db->where('id', $id);
  $query_chk_login = $this->db->get('donors');
  //echo $this->db->last_query();
  $chkLogin = 0;
  if ($query_chk_login->num_rows() > 0) {
    
    $chkLogin = 1;
  }

  return $chkLogin;
}

public function updatePassword($data,$id){
  if(isset($id) && !empty($id)){
   
   $this->db->where("id",$id);
   if($this->db->update("donors", $data)){
     return $id;
   } else {
     return FALSE;
   }
 }
return FALSE;
}

       function add_donor_blood($data){
        $this->db->insert("don_user", $data);
        return $this->db->insert_id();

       }

       function donate_disable($id){
        $this->db->select('*');
        $this->db->from('don_user');
        $this->db->where('donor_id',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return $query->result();
        }
        else
        {
          return false;
        }
       }

       function fetch_donor_info($id){
            
        $this->db->select('*');
        $this->db->from('donors');
        $this->db->join('don_user','donors.id=don_user.donor_id');
        $this->db->where('donors.id',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return $query->result();
        }
        else
        {
          return false;
        }

       }

       function user_profile($id){
        $this->db->select('*');
        $this->db->from('donors');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return $query->result();
        }
        else
        {
          return false;
        }
       }

       function donor_details($id){
        $this->db->select('*');
        $this->db->from('don_user');
        $this->db->where('donor_id',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return $query->result();
        }
        else
        {
          return false;
        }

       }

       function need_blood_details($id){

        $this->db->select('*');
        $this->db->from('need_blood');
        $this->db->where('donor_iD',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return $query->result();
        }
        else
        {
          return false;
        }

       }
    
       function check_dup_email($email,$id){
        
            $msg= 0;
            $check_user = "select id from donors where email = '$email'";
            if(!empty($id)) 
            $check_user .= "and id <> $id";
            $query=$this->db->query($check_user);
            if ($query->num_rows() > 0)
            $msg = 1;
            return $msg;
   }
            function sess_donor_info($email,$password){

                if (!empty($password))

                $this->db->where('email', $email);
                $this->db->where('password', $password);
                $query_chk_login = $this->db->get('donors');
                //echo $this->db->last_query();
                $chkLogin = 0;
                if ($query_chk_login->num_rows() > 0) {
                    $row_chk_login = $query_chk_login->row();
                    $id = $row_chk_login->id;
                    $name = $row_chk_login->name;
              $email = $row_chk_login->email;
        
                    
                    //
        
                    $this->session->set_userdata('sess_user_id', $id);
                    $this->session->set_userdata('sess_user_name',$name);    
                    $this->session->set_userdata('sess_user_email',$email); 
                    $chkLogin = 1;
		        }

		         return $chkLogin;
 }
        
   
}
  
?>