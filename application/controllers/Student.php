<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    
	public function index() {
        if($this->session->userdata('studentid')) {
            $this->all_classes();
        } else {
            $this->login();
        }        
    }
    
    public function login() {
		$this->load->view('student/login');
	}
    
    public function student_login() {
        $data = array(
                     'username' => $this->input->post('username'),
                     'password' => $this->input->post('pass'));
        $result = $this->college_model->student_login($data);
        if($result) {
            $this->session->set_userdata('studentid', $result['id']);
            $this->session->set_userdata('studentname', $result['firstname']." ".$result['lastname']);
            $this->session->set_userdata('regNo', $result['regNo']);
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
    
    public function all_classes() {
        if($this->session->userdata('studentid')) {
            $data['class_sidebar'] = true;
            $regNo = $this->session->userdata('regNo');
            $studentCourseDetails = $this->college_model->getStudentCourseDetails($regNo);
            $data['classes'] = $this->college_model->getStudentClasses($studentCourseDetails);
            //print_r($classes);
            $this->load->view('student/all_courses', $data);
        } else {
            $this->login();
        }
    }   
    
    public function instructions() {
        $this->load->view('student/instruction');
    }
    
    
    
    
    public function all_notes() {
        if($this->session->userdata('studentid')) {
            $regNo = $this->session->userdata('regNo');
            $studentCourseDetails = $this->college_model->getStudentCourseDetails($regNo);
            $data['student_notes'] = $this->college_model->fetch_student_notes($studentCourseDetails['course'], $studentCourseDetails['batch'], $studentCourseDetails['section']);
            $this->load->view('student/all_notes', $data);
        } else {
            $this->login();
        }
    }
    
    public function logout() {
        $this->session->unset_userdata('studentid');
        $this->index();
    }  
}