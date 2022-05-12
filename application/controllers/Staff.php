<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    public function __construct() {
      parent::__construct();
       $this->load->library('zip');
       $this->load->model('college_model');
    }
    
    
	public function index() {
        $userid = $this->session->userdata('id');
        if($userid) {
            $this->all_notice_general();
        } else {
            $this->login();
        }
		
	}
    
    public function all_classes()
	{
        if($this->session->userdata('id')) {
            $data['class_sidebar'] = true;
            $id = $this->session->userdata('id');
            $data['classes'] = $this->college_model->getStaffClasses($id);
            //print_r($data['classes']);
            // $this->load->view('staff/all_classes', $data);
            $this->load->back_template('staff/all_classes',$data);
        } else {
            $this->login();
        }
	}
    
    public function login()
	{
		$this->load->view('login');
        // $this->load->back_template('login');
	}
    
    public function staff_login()
    {
        $data = array(
                     'username' => $this->input->post('username'),
                     'password' => $this->input->post('pass'));
        $result = $this->college_model->staff_login($data);
        if($result) {
            
            $this->session->set_userdata('id', $result['id']);
            $regno=  $this->session->set_userdata('regno', $result['regno']);
            $this->session->set_userdata('username' ,$this->input->post('username'));
            $this->session->set_userdata('role','staff');
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
        $userid = $this->session->userdata('id');
        $regno = $this->session->userdata('regno'); 
        if($userid)
        {
         
            $data['profile'] = $this->college_model->fetch_profile($userid);
            $data['info'] = $this->college_model->fetch_qulifiction_info($regno);
            $data['proffinfo'] = $this->college_model->fetch_proff_qulifiction_info($regno); 
            $data['profcouncil'] = $this->college_model->getallRegProfCouncil($regno); 
            $data['lastempdetails'] = $this->college_model->getlastempdetails($regno); 
            $data['presentempdetails'] = $this->college_model->getpresentempdetails($regno); 
            $data['proff_growths'] = $this->college_model->getAllProfGrowths($regno);
            $data['guided_student'] = $this->college_model->getAllGuidedStudent($regno);
            $this->load->back_template('staff/profile_view',$data);
        }
        else
        {
            $this->login();
        }
    }
    

    public function update_profile(){
        // print_r($_POST);
        $dataAr = array(
            'email' => $_POST['email'],
            'mobile' => $_POST['phone'],
            'firstname' => $_POST['fname'],
            'lastname' => $_POST['lname'],
            'dob' => $_POST['dob']
        );

        $result = $this->college_model->upadteStaffProfile($dataAr);
        if($result) {
            $res = array(
                'success'=>true,
                'msg'=>'Updated profile');
                echo json_encode($res);
        } else {
            $res = array(
                'success'=>false,
                'msg'=>'Something went wrong.');
                echo json_encode($res);
        }
        
    }
    

    public function add_qulification_info(){
        // echo "<pre>";
        // print_r($_POST);

        $dataAr = array(
            'ssc' => $_POST['ssc'],
            'ssc_state' => $_POST['ssc_state'],
            'ssc_board' => $_POST['ssc_board'],
            'ssc_place' => $_POST['ssc_place'],
            'ssc_marks_obtained' => $_POST['ssc_marks_obtained'],
            'ssc_percentage' => $_POST['ssc_percentage'],
            'hsc' => $_POST['hsc'],
            'hsc_state' => $_POST['hsc_state'],
            'hsc_board' => $_POST['hsc_board'],
            'hsc_place' => $_POST['hsc_place'],
            'hsc_marks_obtained' => $_POST['hsc_marks_obtained'],
            'hsc_percentage' => $_POST['hsc_percentage'],
            'others' =>$_POST['others'],
            'regno' => $this->session->userdata('regno')
        );
        $result = $this->college_model->addUpdateQualification($dataAr);
        if($result){
            redirect(base_url('')."staff/profile");
        }else{
            redirect(base_url('')."staff/profile");
        }
    }
   

    public function add_prof_qulification(){
        $regno = $this->session->userdata('regno');
        //check the regno is exit or not
        $checkexist = $this->college_model->checkregnoexit($regno);
        $id = '0';
        if($checkexist){
            $id = $checkexist->id;
        }
        
        // echo $id;
        // exit();
        $dataAr = array(
            'course_bsc_nursing' => $_POST['bsc_nursing'],
            'bsc_collage' => $_POST['bsc_nursing_collage'],
            'bsc_university' => $_POST['bsc_nursing_university'],
            'bsc_yearofpassing' => $_POST['bsc_nursing_yop'],
            'bsc_marksobtained' => $_POST['bsc_nursing_marksobtained'],
            'bsc_percentage' => $_POST['bsc_nursing_percentage'],
            'course_msc_nursing' => $_POST['msc_nursing'],
            'msc_collage' => $_POST['msc_nursing_collage'],
            'msc_university' => $_POST['msc_nursing_university'],
            'msc_yearofpassing' => $_POST['msc_nursing_yop'],
            'msc_marksobtained' => $_POST['msc_nursing_marksobtained'],
            'msc_percentage' => $_POST['msc_nursing_percentage'],
            'course_phd' => $_POST['phd'],
            'phd_collage' => $_POST['phd_collage'],
            'phd_university' => $_POST['phd_university'],
            'phd_yearofpassing' => $_POST['phd_yop'] ,
            'phd_marksobtained' => $_POST['phd_marksobtained'],
            'phd_percentage' => $_POST['phd_percentage'],
            'additional_qulification' => $_POST['additional_qulification'],
            'regno' => $this->session->userdata('regno')
        );
      
        // echo "<pre>";
        // print_r($_POST);
        // exit();
        $result = $this->college_model->addUpdateProfQualification($dataAr,$id);
        if($result){
            redirect(base_url('')."staff/profile");
        }else{
            redirect(base_url('')."staff/profile");
        }
    }
    

    public function reg_professional_council(){
       
        $regno = $this->session->userdata('regno');
        
        $type_reg = $_POST['type_reg'];
        $state_council = $_POST['state_council'];
        $no = $_POST['no'];
        $renwed_upto_date = $_POST['renwed_upto_date'];
        foreach ($type_reg as $key => $value) {
            // echo $value." - ".$state_council[$key];
            $s_type = $value;
            $s_state = $state_council[$key];
            $s_no = $no[$key];
            $s_renwed_upto_date = $renwed_upto_date[$key];
            $SQL = "INSERT INTO reg_prof_council (id,type_of_reg, state_council,no,renew_upto_date,regno) VALUES (NULL,'".$s_type."', '".$s_state."','".$s_no."','".$s_renwed_upto_date."','".$regno."' )";
            $query1 = $this->db->query($SQL);
            // $query = $this->db->get();
            

        }
        if($query1){
            redirect(base_url('')."staff/profile");
        }
        
    }

    public function last_employee_details(){
        
        $regno = $this->session->userdata('regno');
        
        $name = $_POST['place_name'];
        $sector = $_POST['sector'];
        $designation = $_POST['designation'];
        $duration = $_POST['duration'];
        $reason_leaving = $_POST['reason_leaving'];
        foreach ($name as $key => $value) {
            // echo $value." - ".$state_council[$key];
            $ar_name = $value;
            $ar_sector = $sector[$key];
            $ar_designation = $designation[$key];
            $ar_duration = $duration[$key];
            $ar_reason_leaving = $reason_leaving[$key];
            $SQL = "INSERT INTO last_emp_details (id,name, sector,designation,reason_of_leave,duration,regno,created_at) VALUES (Null,'".$ar_name."','".$ar_sector."','".$ar_designation."','".$ar_reason_leaving."','".$ar_duration."','".$regno."','".date("Y/m/d")."')";
            $query1 = $this->db->query($SQL);
            // $query = $this->db->get();
            

        }
        if($query1){
            redirect(base_url('')."staff/profile"); 
        }
        
    
    }


    public function present_emp_detail(){
        // echo "<pre>";
        // print_r($_POST);
        // exit();
        $regno = $this->session->userdata('regno');
        
        $date_of_joining = $_POST['date_of_joining'];
        $designation = $_POST['designation'];
        $job_type = $_POST['job_type'];
        $appointment_no = $_POST['appointment_no'];
        $approval_no = $_POST['approval_no'];
        foreach ($date_of_joining as $key => $value) {
            // echo $value." - ".$state_council[$key];
            $ar_date_of_joining = $value;
            $ar_job_type = $job_type[$key];
            $ar_designation = $designation[$key];
            $ar_appointment_no = $appointment_no[$key];
            $ar_approval_no = $approval_no[$key];
            $SQL = "INSERT INTO present_emp_details (id,date_of_joining,job_type,designation,appointment_no,muhs_approval_no,regno,created_at) VALUES (Null,'".$ar_date_of_joining."','".$ar_job_type."','".$ar_designation."','".$ar_appointment_no."','".$ar_approval_no."','".$regno."','".date("Y/m/d")."')";
            $query1 = $this->db->query($SQL);
            // $query = $this->db->get();
            

        }
        if($query1){
            redirect(base_url('')."staff/profile"); 
    }


    }
   
    public function proff_growth_conference_attend(){
        // echo "<pre>";
        // print_r($_POST);
        // exit();
        $regno = $this->session->userdata('regno');
        
        $state_level = $_POST['state_level'];
        $national_level = $_POST['national_level'];
        $international_level = $_POST['international_level'];
        $prof_growth_type = $_POST['prof_growth_type'];
        foreach ($state_level as $key => $value) {
            // echo $value." - ".$state_council[$key];
            $ar_state_level = $value;
            $ar_national_level = $national_level[$key];
            $ar_international_level = $international_level[$key];
            $growth_type = $prof_growth_type;
            $SQL = "INSERT INTO proff_growths (id,state_level,national_level,international_level,growth_type,regno,created_at) VALUES (Null,'".$ar_state_level."','".$ar_national_level."','".$ar_international_level."','".$growth_type."','".$regno."','".date("Y/m/d")."')";
            $query1 = $this->db->query($SQL);
            // $query = $this->db->get();
            

        }
        if($query1){
            redirect(base_url('')."staff/profile"); 
        }


    }

    public function research_conducted(){
          echo "<pre>";
        print_r($_POST);
        exit();
        $regno = $this->session->userdata('regno');
        
        $state_level = $_POST['state_level'];
        $national_level = $_POST['national_level'];
        $international_level = $_POST['international_level'];
        $prof_growth_type = $_POST['prof_growth_type'];
        foreach ($state_level as $key => $value) {
            // echo $value." - ".$state_council[$key];
            $ar_state_level = $value;
            $ar_national_level = $national_level[$key];
            $ar_international_level = $international_level[$key];
            $growth_type = $prof_growth_type;
            $SQL = "INSERT INTO proff_growths (id,state_level,national_level,international_level,growth_type,regno,created_at) VALUES (Null,'".$ar_state_level."','".$ar_national_level."','".$ar_international_level."','".$growth_type."','".$regno."','".date("Y/m/d")."')";
            $query1 = $this->db->query($SQL);
            // $query = $this->db->get();
            

        }
        if($query1){
            redirect(base_url('')."staff/profile"); 
        }
        
    }

    public function guided_student(){
        
        $regno = $this->session->userdata('regno');
        
        $undergraduate = $_POST['undergraduate'];
        $postgraduate = $_POST['postgraduate'];
        $phd = $_POST['phd'];
        foreach ($undergraduate as $key => $value) {
            // echo $value." - ".$state_council[$key];
            $ar_undergraduate = $value;
            $ar_postgraduate = $postgraduate[$key];
            $ar_phd = $phd[$key];
            
            $SQL = "INSERT INTO guided_student (id,undergraduate,postgrduate,phd,regno,created_at) VALUES (Null,'".$ar_undergraduate."','".$ar_postgraduate."','".$ar_phd."','".$regno."','".date("Y/m/d")."')";
            $query1 = $this->db->query($SQL);
            // $query = $this->db->get();
            

        }
        if($query1){
            redirect(base_url('')."staff/profile"); 
        }

    }
 public function all_leave()
 {
      $regno = $this->session->userdata('regno');
     $data['leaves_applications']= $this->college_model->fetch_leaves($regno); 
    //  $this->load->view('staff/all_leaves',$data);
     $this->load->back_template('staff/all_leaves',$data);
 }
   
 public function add_leaves()
 {
    //  $this->load->view('staff/add_leaves');
    $regno = $this->session->userdata('regno');
    $data['leave_type'] = $this->college_model->fetchLeaveTypeByRegNo($regno);
    if(empty($data['leave_type'])){
        $data['leavetype'] = $this->college_model->fetchLeaveType();
    }
     $this->load->back_template('staff/add_leaves',$data);
 }
  
    public function add_leaveapplication()
    {
        $empid= $this->session->userdata('id');
        $regno = $this->session->userdata('regno');
        $from= $this->input->post('from_date');
        $to=$this->input->post('to_date');
        
        $now        = strtotime($to);
        $your_date  = strtotime($from);
        $datediff   = $now - $your_date;
        $days=  floor($datediff / (60 * 60 * 24));
        
        $data=array(
            "employee_id"=>$regno,
            "leaveType"=>$this->input->post('leave'),
            "last_updated_by"=>0,
            "start_date"=>$this->input->post('from_date'),
            "end_date"=>$this->input->post('to_date'),
            "days"=>$days,
            "applied_on"=>date("Y/m/d"),
            "reason"=>$this->input->post('reason'),
            "application_status"=>"pending",
            "created_at"=>date("Y/m/d"),
            "updated_at"=>date("Y/m/d")
        );
         
        $id= $this->college_model->insert_staff_leave($data); 
        if($id){
            $half_leaves_day = 0;

            $full_leaves_day = 0;
            if($this->input->post('leave') == 'full') {
                $full_leaves_day = $days;
            }else{
                $half_leaves_day = $days;
            }
            echo "<pre>";
            $type_leaves = $this->college_model->fetchLeaveTypeByRegNo($regno);
            if(empty($type_leaves) && $type_leaves != ''){
                // echo "not ok";
                $type_leaves = $this->college_model->fetchLeaveType();
                
                foreach ($type_leaves as $key => $value) {
                    if($value->leave_type == 'Medical Leaves'){
                       $medLeave = $value->leaves;
                    }else if($value->leave_type == 'Casual Leaves'){
                       $casLeave = $value->leaves;
                    }else{
                       $earnLeave = $value->leaves;
                    }
               }
            
            }else{
                // echo "ok";
                
                foreach ($type_leaves as $key => $value) {
                    
                       $medLeave = $value->medical_leaves;
                    
                       $casLeave = $value->casual_leaves;
                    
                       $earnLeave = $value->earned_leaves;
                    
               }
            }
            
                
                // $medicalLeaves
            if($this->input->post('leave_type') == 'Medical Leaves'){
                $medLeave = $medLeave - $days;
                
            }else if($this->input->post('leave_type') == 'Casual Leaves'){
                $casLeave = $casLeave - $days;

            }else  if($this->input->post('leave_type') == 'Earned Leaves'){
                $earnLeave = $earnLeave - $days;

            }
            

            $leaveAr = array(
                'leave_id' =>$id,
                'employee_id' => $regno,
                'half_day_leaves' => $half_leaves_day,
                'full_day_leaves' => $full_leaves_day,
                'medical_leaves' => $medLeave,
                'casual_leaves' => $casLeave,
                'earned_leaves' => $earnLeave,
                'total_leaves' =>  $medLeave + $casLeave + $earnLeave,
                'created_at' => $now,
                'created_by' => $regno
            );

            $this->college_model->addstaffleavedetails($leaveAr);
            redirect(base_url()."staff/all_leave");
        }
    }
    
    public function all_notice_general()
    {
        $userid = $this->session->userdata('id');
        $data['notices'] = $this->college_model->fetchNotices('general');
        $this->load->back_template('staff/all_notice_general',$data);
    }
    
    public function add_notice_general()
    {
        $userid = $this->session->userdata('id');
        
        $this->load->back_template('staff/add_notice_general');
    }
    

    public function addNoticeGeneral()
    {
        $data = array(
            'content'=>$this->input->post('content'),
            'type'=> "general");
            
            $result = $this->college_model->addNotice($data);
            if($result) {
                redirect(base_url('')."staff/all_notice_general");
            } else {
                $res = array(
                    'success'=>false,
                    'msg'=>'Something went wrong.');
                    echo json_encode($res);
                }
    }


    
    public function payroll()
    {
        
        $userid = $this->session->userdata('id');
        $regno=  $this->session->userdata('regno');
        
        $data['emp_payroll'] = $this->college_model->fetchstaffpayroll($regno);
      
        $this->load->back_template('staff/payroll_list',$data);
    }
    
    public function add_payroll()
    {
      $name=$this->input->post('name');
       $dep=$this->input->post('department');
        $branch=$this->input->post('branch');
         $designation= $this->input->post('designation'); 
         $month=$this->input->post('month');
          $year=$this->input->post('year');
           $basic_amount=$this->input->post('basic_amount');
            $hra_amount=$this->input->post('hra_amount');
            $ta= $this->input->post('ta_amount');
             $ma =$this->input->post('ma_amount');
             $lta_amount=$this->input->post('lta_amount');
            $conveyance_amount=$this->input->post('conveyance_amount');
             $total_earning=$this->input->post('total_earning');
              $pt_deduct=$this->input->post('pt_deduct');
             $tds_deduct=$this->input->post('tds_deduct');
             $total_deduct=$this->input->post('total_deduct');
              $net_pay=$this->input->post('net_pay');
              $date=date("Y/m/d");
              $absent=$this->input->post('absent_days');
              $sal_structure='Sal Structure';
              $nodp=$this->input->post('present_days');
              $emp_id=$this->input->post('emp_id');
             $data=array(
                 "employee_id"=>$emp_id,
                 "emp_name"=>$name,
                 "branch"=>$branch,
                 "department"=>$dep,
                 "designation"=>$designation,
                 "sal_structure"=>$sal_structure,
                 "nod"=>$nodp,
                 "absent"=>$absent,
                 "month"=>$month,
                 "year"=>$year,
                 "basic"=>$basic_amount, 
                 "hra"=>$hra_amount,
                 "ta"=>$ta,
                 "ma"=>$ma,
                 "lta"=>$lta_amount,
                 "conveyance"=>$conveyance_amount,
                 "pt_deductions"=>$pt_deduct,
                 "tds_deductions"=>$tds_deduct,
                 "total_deduction"=>$total_deduct,
                 "net_salary"=>$net_pay,
                 "total_earning"=>$total_earning,
                 "pay_date"=>$date,
                 "status"=>1,
                 "created_at"=>$date,
                 "updated_at"=>$date,
                 
                 );  
                  $id=$this->college_model->insert_emp_payroll($data);
                  if($id)
                  {
                    redirect(base_url()."staff/payroll") ; 
                  }
                // print_r($data);die;
    }

    public function add_emp_payroll()
    {  
         $data['all_employee']=$this->college_model->fetch_emp();
        // print_r($data['all_employee']);die;
         $this->load->back_template('staff/add_emp_payroll',$data); 
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->index();
    }
    
    public function remove_notice(){
        $id = $this->input->post('id');
        if(!empty($id)){
            $remove = $this->college_model->removeNotice($id);
        

            if($remove) {
                $res = array(
                    'success'=>true,
                    'msg'=>'Deleted');
                    echo json_encode($res);
            } else {
                $res = array(
                    'success'=>false,
                    'msg'=>'Something went wrong.');
                    echo json_encode($res);
            }
        }
    }

    public function paymentHistoryFormDom(){ 
    
        $Dom="
        
        <div class=' row'> 
        <div class='col-lg-3 p-t-20'>
            <div
                class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>TYPE OF REGISTRATION		</label> 
                <input class='mdl-textfield__input' type='text' name='type_reg[]'  >
            </div>
        </div>
        <div class='col-lg-2 p-t-20'>
            <div
                class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                <label class='mdl-textfield__label' style='top: 0px;'> STATE COUNCIL	</label>
                <input class='mdl-textfield__input' type='text'  name='state_council[]' value='' >
                
            </div>
        </div>
            <div class='col-lg-2 p-t-20'>
            <div
                class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                <label class='mdl-textfield__label' style='top: 0px;'>NO. </label>
        <input class='mdl-textfield__input' type='text'  name='no[]'  >
            </div>
        </div>
        <div class='col-lg-3 p-t-20'>
            <div
                class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                <label class='mdl-textfield__label' style='top: 0px;'> RENWED UPTO DATE	</label>
                <input class='mdl-textfield__input' type='date'  name='renwed_upto_date[]'  > 
                
            </div>
        </div>
        <div class='col-lg-2 p-t-20'>
            <div
                class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                <div class='btn-group' role='group' aria-label='Basic example'>
                  <button type='button' class='btn btn-success payhisAdd'>+</button>
                  <button type='button' class='btn btn-danger payhisDel'>-</button>
                </div>
            </div>
        </div>	
    </div>
    
    ";
        echo $Dom;
    }
    
    public function paymentHistoryFormDom1(){ 
        
        $Dom="	<div class=' row'>
            <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>NAME OF THE COLLEGE/HOSPITAL/COMPANY/INSTITUTE/NURSING HOME</label> 
                    <input class='mdl-textfield__input' type='text' name='place_name[]' value='' required>
                </div>
            </div>
            <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> PRIVATE/ CENTRAL GOVT/STATE GOVT./OTHERSL</label>
                    <input class='mdl-textfield__input' type='text'  name='sector[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>DURATION OF EMPLOYMENT</label>
                <input class='mdl-textfield__input' type='text'  name='duration[]' value='' required>
                
                </div>
            </div>
            <div class='col-lg-4 p-t-20'>
                <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> DESIGNATION</label>
                    <input class='mdl-textfield__input' type='text'  name='designation[]' value='' required>
                    
                </div>
            </div>
            
                <div class='col-lg-4 p-t-20'>
                <div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> REASON FOR LEAVING THE PREVIOUS ORGANIZATION</label> 
                    <input class='mdl-textfield__input' type='text'  name='reason_leaving[]' value='' required>
                    
                </div>
            </div>
            
            <div class='col-lg-2 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd1'>+</button>
                      <button type='button' class='btn btn-danger payhisDel1'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }
    
    public function paymentHistoryFormDom2(){ 
        
        $Dom="	<div class=' row'>
            <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>DATE OF JOINING		</label> 
                    <input class='mdl-textfield__input' type='date' name='date_of_joining[]' value='' required>
                </div>
            </div>
            <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> DESIGNATION</label>
                    <input class='mdl-textfield__input' type='text'  name='designation[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>TEMPORARY/PERMANENT </label>
                <input class='mdl-textfield__input' type='text'  name='job_type[]' value='' required>
                
                </div>
            </div>
            <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> APPOIN TMENT LETTER NO.</label>
                    <input class='mdl-textfield__input' type='text'  name='appointment_no[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-4 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> MUHS APPROVAL LETTER NO.	</label>
                    <input class='mdl-textfield__input' type='text'  name='approval_no[]' value='' required>
                    
                </div>
            </div>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd2'>+</button>
                      <button type='button' class='btn btn-danger payhisDel2'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }

    public function paymentHistoryFormDom3(){ 
        
        $Dom="<div class=' row'>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
                    <input class='mdl-textfield__input' type='text' name='state_level[]' value='' required>
                </div>
            </div>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
                    <input class='mdl-textfield__input' type='text'  name='national_level[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
                <input class='mdl-textfield__input' type='text'  name='international_level[]' value='' required>
                
                </div>
            </div>
        <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd3'>+</button>
                      <button type='button' class='btn btn-danger payhisDel3'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }
    
       public function paymentHistoryFormDom4(){ 
        
        $Dom="<div class=' row'>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
                    <input class='mdl-textfield__input' type='text' name='state_level[]' value='' required>
                </div>
            </div>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
                    <input class='mdl-textfield__input' type='text'  name='national_level[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
                <input class='mdl-textfield__input' type='text'  name='international_level[]' value='' required>
                
                </div>
            </div>
        <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd4'>+</button>
                      <button type='button' class='btn btn-danger payhisDel4'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }
    
       public function paymentHistoryFormDom5(){ 
        
        $Dom="	<div class=' row'>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
                    <input class='mdl-textfield__input' type='text' name='state_level[]' value='' required>
                </div>
            </div>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
                    <input class='mdl-textfield__input' type='text'  name='national_level[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
                <input class='mdl-textfield__input' type='text'  name='international_level[]' value='' required>
                
                </div>
            </div>
        <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd5'>+</button>
                      <button type='button' class='btn btn-danger payhisDel5'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }
    
       public function paymentHistoryFormDom6(){ 
        
        $Dom="	<div class=' row'>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
                    <input class='mdl-textfield__input' type='text' name='state_level[]' value='' required>
                </div>
            </div>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
                    <input class='mdl-textfield__input' type='text'  name='national_level[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
                <input class='mdl-textfield__input' type='text'  name='international_level[]' value='' required>
                
                </div>
            </div>
        <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd6'>+</button>
                      <button type='button' class='btn btn-danger payhisDel6'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }
    
      public function paymentHistoryFormDom7(){ 
        
        $Dom="	<div class=' row'>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>FIRST AUTHOR		</label> 
                    <input class='mdl-textfield__input' type='text' name='first_author[]' value='' required>
                </div>
            </div>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> SECOND AUTHOR</label>
                    <input class='mdl-textfield__input' type='text'  name='second_author[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>THIRD AUTHOR</label>
                <input class='mdl-textfield__input' type='text'  name='third_author[]' value='' required>
                
                </div>
            </div>
        
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd7'>+</button>
                      <button type='button' class='btn btn-danger payhisDel7'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }
    
     public function paymentHistoryFormDom8(){ 
        
        $Dom="<div class='row'>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                        <label class='mdl-textfield__label' style='top: 0px;'>UNDERGRADUATES</label> 
                    <input class='mdl-textfield__input' type='text' name='undergraduate[]' value='' required>
                </div>
            </div>
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>POSTGRADUATE</label>
                    <input class='mdl-textfield__input' type='text'  name='postgraduate[]' value='' required>
                    
                </div>
            </div>
                <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'>PH.D</label>
                <input class='mdl-textfield__input' type='text'  name='phd[]' value='' required>
                
                </div>
            </div>
        
            <div class='col-lg-3 p-t-20'>
                <div
                    class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
                    <label class='mdl-textfield__label' style='top: 0px;'> Action</label>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                      <button type='button' class='btn btn-success payhisAdd8'>+</button>
                      <button type='button' class='btn btn-danger payhisDel8'>-</button>
                    </div>
                </div>
            </div>	
        </div>";
        echo $Dom;
    }

    public function award_list(){


        $userid = $this->session->userdata('username');
        $data['allawards'] = $this->college_model->fetchStaffAwards($userid);
        $this->load->back_template('staff/awards_list',$data);

    } 
    
    public function add_award(){
        $this->load->back_template('staff/add_award');
    }
    
    public function saveaward(){
        // echo $this->session->userdata('regno');
        // exit();

        $saveArray = array(
            'recognize' => $this->input->post('recognize'),
            'achievement' => $this->input->post('achievement'),
            'prize' => $this->input->post('prize'),
            'status' => 1,
            'employee_id' =>$this->session->userdata('regno')
        );

        $result = $this->college_model->insertAward($saveArray);
        if($result){
            redirect(base_url('staff/award_list'));
        }else{
            redirect(base_url('staff/add_award'));
        }

    }

    
    public function remove_award(){
        $id = $this->input->post('id');
        if(!empty($id)){
            $remove = $this->college_model->removeAward($id);
        

            if($remove) {
                $res = array(
                    'success'=>true,
                    'msg'=>'Deleted');
                    echo json_encode($res);
            } else {
                $res = array(
                    'success'=>false,
                    'msg'=>'Something went wrong.');
                    echo json_encode($res);
            }
        }
    }
    
}