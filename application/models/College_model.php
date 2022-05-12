<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function loginuser($data)
    {
       
        $this->db->select('*');
        $this->db->from('admin'); 
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        $this->db->where('is_deleted', "0"); 
        $query = $this->db->get();
        // echo $this->db->last_query();
        if($query->num_rows() > 0)
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }
    }
    
    public function fetch_students()
    {
        $this->db->select('student.id as id, student.regNo as regNo, student.firstname as firstname, student.lastname as lastname, student.batch as batch, student.section as section, student.active as active, course.course_name as course_name');
        $this->db->from('student');
        $this->db->join('course', 'student.course = course.id');
        $this->db->where('student.status', "1");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    public function check_active($id)
    {
        $this->db->select('active');
        $this->db->from('student');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->row_array();
        }
    }
    
    public function change_active($id, $active)
    {
        $this->db->where('id', $id);
        $this->db->set('active', $active);
        $this->db->update('student');
        return true;
    }
    
    public function fetch_professor()
    {
        $this->db->select('*');
        $this->db->from('staff_user');
        // $this->db->where('status', "1");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return true;
        }
    }
    
    public function add_prof($data)
    {
        $this->db->insert('staff_user', $data);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
    public function fetch_professor_byId($id)
    {
        $this->db->select('*');
        $this->db->from('staff_user');
        $this->db->where('id', $id);
        $this->db->where('status', "1");
        $query = $this->db->get();
        if($query->num_rows() >= 1)
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }
    }
    
    public function update_prof($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('staff_user', $data);
        return true;
    }
    
    public function change_status($id,$status)
    {
        $this->db->where('id', $id);
        $this->db->set('status', $status);
        $this->db->update('staff_user');
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
    public function fetch_staff()
    {
        $this->db->select('*');
        $this->db->from('staff_user');
        $this->db->where('status', "1");
        $query = $this->db->get();
        return $query->result();
    }
    
    
    //Staff//
    
    public function staff_login($data)
    {
       
        $this->db->select('*');
        $this->db->from('staff_user'); 
        $this->db->where('regno',$data['username']); 
        $this->db->where('password',$data['password']);
        $this->db->where('status', 1); 
        $query = $this->db->get();
        if($query->num_rows())
        {
            return $query->row_array();
        }
        else
        {
            return array();
        }
    }
    
    public function insert_files($files)
    {
        $this->db->insert('files', $files);
        if($this->db->affected_rows() > 0)
        {
            return $this->db->insert_id(); 
        }
        else
        {
            return false;
        }
        
    }
    
    public function add_notes($data)
    {
        $this->db->insert('notes', $data);
        if($this->db->affected_rows() > 0)
        {
            return $this->db->insert_id();
        }
    }
    
    public function update_files($update_value)
    {
        $this->db->where('id', $update_value['id']);
        $this->db->update('files', $update_value);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
    public function fetch_courses()
    {
        $this->db->select('*');
        $this->db->from('course');
        $this->db->where('status', "1");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function fetch_staff_notes($userid) 
    {
        $this->db->select('a.id as id, a.batch as batch, a.section as section,a.title as title, b.firstname as firstname, c.course_name as course_name');
        $this->db->from('notes a');
        $this->db->join('staff_user b', 'a.staff_id = b.id');
        $this->db->join('course c', 'a.course = c.id');
        $this->db->where('a.status', "1");
        $this->db->where('a.staff_id',$userid);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
    }
    
    public function fetch_staff_files($id)
    {
        $this->db->select('*');
        $this->db->from('files');
        $this->db->where('notes_id', $id);
        $this->db->where('status', "1");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function fetch_notes($notes_id)
    {
        $this->db->select('*');
        $this->db->from('notes');
        $this->db->where('id', $notes_id);
        $this->db->where('status', "1");
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function remove_notes_files($id)
    {
        $this->db->where('notes_id', $id);
        $this->db->set('status', "0");
        $this->db->update('files');
        return true;
    }
    
    public function update_notes($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('notes', $data);
        return true;
    }
    
    public function remove_notes($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', "0");
        $this->db->update('notes');
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
    public function removepayroll($id){
        $response = false;
        if(!empty($id)){
            $this->db->where('id',$id);
            $this->db->set('is_deleted',1);
            $this->db->update('payrolls');
            if($this->db->affected_rows() > 0){
                $response = true;
            }
        }
        return $response;
    }
    
    
     public function fetch_profile($userid)  
    {
        
        $this->db->select('*');
        $this->db->from('staff_user');
        $this->db->where('id',$userid); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return true;
        }
    }

    
     public function fetch_leaves($regno)  
    {
        
        $this->db->select('*');
        $this->db->from('leave_applications'); 
        $this->db->where('employee_id',$regno); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return true;
        }
    }
    
    
    
     public function insert_staff_qulification_info($data)
    {
        $this->db->insert('staff_qulification_info', $data);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
     public function insert_staff_professional_qulification_info($data) 
    {
        $this->db->insert('staff_professional_qulification', $data);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
    
     public function insert_staff_council_info($data) 
    {
        $this->db->insert('professional_councils', $data);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
     public function insert_staff_leave($data) 
    {
        $this->db->insert('leave_applications', $data);
        if($this->db->affected_rows() > 0)
        {
            return $this->db->insert_id();
        }
    }
    
    public function addNotice($data) {
        $this->db->insert('notices', $data);
        return true;
    }
    
    public function fetchNotices($data) {
        $this->db->select('*');
        $this->db->from('notices');
        $this->db->where('status', '1');
        $this->db->where('type', $data);
        $this->db->order_by('id', 'DESC'); 
        $query = $this->db->get();
        return $query->result();
    }
    
    public function fetchNoticesSpecific($type, $courseDetails)
    {
        $this->db->select('*');
        $this->db->from('notices');
        $this->db->where('status', '1');
        $this->db->where('type', $type);
        $this->db->where('section', $courseDetails['section']);
        $this->db->where('batch', $courseDetails['batch']);
        $this->db->order_by('created_at', 'DESC'); 
        $query = $this->db->get();
        return $query->result();
    }
    
    public function remove_notice($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', "0");
        $this->db->update('notices');
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
    public function fetchAllpayroll() {
        $this->db->select('*');
        $this->db->from('payrolls');
        // $this->db->where('employee_id',$regno);
       // $this->db->where('type', $data);
        $this->db->order_by('id', 'DESC'); 
        $query = $this->db->get();
        return $query->result();
    } 
    
     public function fetchstaffpayroll($regno) {
        $this->db->select('*');
        $this->db->from('payrolls');
        $this->db->where('employee_id',$regno);
       // $this->db->where('type', $data);
        $this->db->order_by('id', 'DESC'); 
        $query = $this->db->get();
        return $query->result();
    } 

    
    
     public function fetch_emp_payroll()
    {
        $this->db->select('*');
        $this->db->from('payrolls');
       $this->db->where('is_deleted', "0");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return true;
        }
    }

    public function fetch_staff_leaves()  
    {
        
        $this->db->select('*');
        $this->db->from('leave_applications'); 
       // $this->db->where('employee_id',$regno); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return true;
        }
    }



    // start new method

    public function login_management($data){
          
        $this->db->select('*');
        $this->db->from('admin'); 
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        $this->db->where('is_deleted', "0"); 
        $this->db->where('role', "management"); 
        $query = $this->db->get();
        if($query->num_rows() >= 0)
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }
    }

    public function getadmindata($id){
        $response = array();
        if(!empty($id)){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('id',$id);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                $response = $query->row();
            }
        }
        return $response;
    }
   
    
    public function approve_emp_leaves($id)
    {
        $this->db->where('id', $id);
        $this->db->set('application_status', 'Approved');
        $this->db->update('leave_applications');
        return true;
    }
    
    public function reject_emp_leaves($id)
    {
        $this->db->where('id', $id);
        $this->db->set('application_status', 'Rejected');
        $this->db->update('leave_applications');
        return true;
    }

    public function getAllStaff(){
        $response = array();
        $this->db->select('*');
        $this->db->from('staff_user');
        $this->db->where('status',1);
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            $response = $query->result();
        }
        return $response;

    }

    public function removeNotice($id)
    {
        $response = false;
        if(!empty($id)){
            $this->db->set('status',0);
            $this->db->where('type','general');
            $this->db->where('id',$id);
            $this->db->update('notices');
            if($this->db->affected_rows() > 0){
                $response = true;
            }
        }
        return $response;
    }

    public function fetch_emp()
    {
        $this->db->select('*');
        $this->db->from('staff_user');
       // $this->db->where('status', "1");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            // return $query->row()->firstname; 
            return $query->result();
        }
        else
        {
            return true;
        }
    }

    public function insert_emp_payroll($data)
    {
        $this->db->insert('payrolls', $data);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
      public function import_payrolls_xls($dataa)
    {
        // print_r($dataa);
        if(!empty($dataa)){
            $this->db->insert_batch('payrolls', $dataa);
            if($this->db->affected_rows() > 0)
            {
                return true;
            }else{
                return false;
            }
        }
        
    }
    
    public function updateProfile($id,$data,$role){
        $response = false;
        if(!empty($id) && !empty($data)){
            $this->db->where('id',$id);
            $this->db->where('role',$role);
            $this->db->update('admin',$data);
            echo $this->db->last_query();
            if($this->db->affected_rows()> 0){
                $response = true;
            }
        }
        return $response;
    }

    // i started

    function fetchLeaveType(){
        $response = array();
        $this->db->select('*');
        $this->db->from('leave_count');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $response = $query->result();
        }
        return $response;
    }

    function fetchLeaveTypeByRegNo($regno){
        $response = array();
        if(!empty($regno)){
           $this->db->select('*');
           $this->db->from('staff_leaves');
           $this->db->where('employee_id',$regno);
           $this->db->order_by('id','desc');
           $this->db->limit(1);
           $query = $this->db->get();
           if($query->num_rows() > 0){
               $response = $query->result();
            }
        }
        
        return $response;
    }
    

    function addstaffleavedetails($data){
        $response = false;
        if(!empty($data)){
            $this->db->insert('staff_leaves',$data);
            
            if($this->db->affected_rows() > 0){
                $response = true;
            }
            
        }
        return $response;
    }

    public function fetch_qulifiction_info($regno)  
    {
        
        $this->db->select('*');
        $this->db->from('staff_qulification_info');
        $this->db->where('regno',$regno); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return true;
        }
    }
    
     public function fetch_proff_qulifiction_info($regno)  
    {
        
        $this->db->select('*');
        $this->db->from('staff_professional_qulification'); 
        $this->db->where('regno',$regno); 
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->row();
        }
        else
        {
            return true;
        }
    }

    public function fetchStaffAwards($id){

        $response = array();
        if(!empty($id)){
            $this->db->select('*');
            $this->db->from('awards');
            $this->db->where('status',1);
            $this->db->where('employee_id',$id);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                $response = $query->result();
            }
        }   
        return $response ;
    }


    public function getAllawards(){
        
        $response= array();

        $this->db->select('*');
        $this->db->from('awards');
        $this->db->where('status',1);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $response = $query->result();
        }
        return $response;
    }


    public function insertAward($data){
        $response = false;
        if(!empty($data)){
            $this->db->insert('awards',$data);
            if($this->db->affected_rows() > 0)
            {
                $response =  true;
            }
        
        }
        return $response;
    }
    
    public function removeAward($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', "0");
        $this->db->update('awards');
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }

    // staff profile update
    public function upadteStaffProfile($dataAr){
        $response = false;
        if(!empty($dataAr)){
            $this->db->where('id',$this->session->userdata('id'));
            $this->db->update('staff_user',$dataAr);
            if($this->db->affected_rows() > 0)
            {
                $response = true;
            }

        }
        return $response;
    
    }

    public function addUpdateQualification($dataAr){
        $response = false;
        if(!empty($dataAr)){
            // $this->db->where('regno',$this->session->userdata('regno'));
            $this->db->insert('staff_qulification_info',$dataAr);
            if($this->db->affected_rows() > 0)
            {
                $response = true;
            }
        }
        return $response;
    }

    public function addUpdateProfQualification($dataAr,$id ){
        $response = false;
        if(!empty($dataAr) && $id == 0){
            
            $this->db->insert('staff_professional_qulification',$dataAr);
            if($this->db->affected_rows() > 0)
            {
                $response = true;
            }
        }else if($id!= ''){
            $this->db->where('id',$id);
            $this->db->update('staff_professional_qulification',$dataAr);
            if($this->db->affected_rows() > 0)
            {
                $response = true;
            }

        }
        return $response;

    }

    public function checkregnoexit($regno){
        $response = array();
        if(!empty($regno)){
            $this->db->select('id');
            $this->db->from('staff_professional_qulification'); 
            $this->db->where('regno',$regno);
            $query = $this->db->get();

            if($query->num_rows()> 0){
                $response = $query->row();
            }
        }
        return $response;
    }

    public function getallRegProfCouncil($regno){
        $response = array();
        if(!empty($regno)){
                $this->db->select('*');
                $this->db->from('reg_prof_council');
                $this->db->where('regno',$regno);
                $query = $this->db->get();

                if($query->num_rows()> 0){
                    $response = $query->result();
                }

        }
        return $response;
    }

    public function getlastempdetails($regno){
        $response = array();
        if(!empty($regno)){
                $this->db->select('*');
                $this->db->from('last_emp_details');
                $this->db->where('regno',$regno);
                $query = $this->db->get();

                if($query->num_rows()> 0){
                    $response = $query->result();
                }

        }
        return $response;

    }

    public function getpresentempdetails($regno){

        $response = array();
        if(!empty($regno)){
                $this->db->select('*');
                $this->db->from('present_emp_details');
                $this->db->where('regno',$regno);
                $query = $this->db->get();

                if($query->num_rows()> 0){
                    $response = $query->result();
                }

        }
        return $response;

    }

    public function getAllProfGrowths($regno){
        $response = array();
        if(!empty($regno)){
                $this->db->select('*');
                $this->db->from('proff_growths');
                $this->db->where('regno',$regno);
                $query = $this->db->get();

                if($query->num_rows()> 0){
                    $response = $query->result();
                }

        }
        return $response;


    }

    public function getAllGuidedStudent($regno){
        $response = array();
        if(!empty($regno)){
                $this->db->select('*');
                $this->db->from('guided_student');
                $this->db->where('regno',$regno);
                $query = $this->db->get();

                if($query->num_rows()> 0){
                    $response = $query->result();
                }

        }
        return $response;

    }

    public function checkexitrecordornot($regno){

        $response = array();
        if(!empty($regno)){
            $this->db->select('*');
            $this->db->from('reg_prof_council');
            $this->db->where('regno',$regno);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                $response = $query->result();
            }
        }
        return $response;
    }


    public function fetch_holidays()
    {
        $response = array();
      $this->db->select('*');
        $this->db->from('holiday_calender'); 
       // $this->db->where('status', "1");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            // return $query->row()->firstname; 
            $response = $query->result();
        }
        return $response;
       
    }

    public function holidays_insert($data)
    {
        $this->db->insert('holiday_calender', $data); 
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
    }
    
}
