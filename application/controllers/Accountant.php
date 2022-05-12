<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant extends CI_Controller {

    
    public function __construct(){
        parent::__construct();
        $this->load->model('college_model');
        // $this->load->library('upload'); 
    }

    public function login(){
        $this->load->view('login');
    }

    public function login_account() {
        $data = array(
                     'username' => $this->input->post('username'),
                     'password' => $this->input->post('pass'));
        $result = $this->college_model->login_accountant($data);
        if($result) { 
            $this->session->set_userdata('accountid', $result['id']);
            $this->session->set_userdata('username', $result['username']);
            $this->session->set_userdata('role', $result['role']);
            $res = array(
                        'success' => true,
                        'msg' => "Successfully Logged");
            echo json_encode($res);
        } else {
            $res = array(
                        'success' => false,
                        'msg' => "Invalid Credentials");
            echo json_encode($res);
        }
    }

    public function profile()
    {
        $accountid = $this->session->userdata('accountid');
        // $regno = $this->session->userdata('regno'); 
        if($accountid)
        {
         
            $data['profile'] = $this->college_model->fetch_account_profile($accountid);
            
                $this->load->back_template('accountant/profile_view',$data);
        }
        else
        {
            $this->login();
        }
    }
    
   
    

}

?>