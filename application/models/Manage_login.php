<?php
class Manage_login extends CI_Model{
    public function login($data) {
        $password = md5($data['password']);
        
        $this->db->select('*');
        $this->db->from('clinic_user');
        $this->db->where('username' , $data['username']);
        $this->db->where('password' , $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row){
                $data = array(  
                    'user_id' => $row->user_id ,                  
                );
            }
            $this->session->set_userdata($data);
            return true;
        } else {
            return false;
        }
    }
    
   
}