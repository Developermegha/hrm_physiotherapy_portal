<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

    
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
        $result = $this->college_model->login_management($data);
        if($result) { 
            $this->session->set_userdata('id', $result['id']);
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
        $id = $this->session->userdata('id');
        // $regno = $this->session->userdata('regno'); 
        if($id)
        {
         
            $data['profile'] = $this->college_model->getadmindata($id);
            // $data['profile'] = $this->college_model->fetch_account_profile($accountid);
            
                $this->load->back_template('management/profile_view',$data);
        }
        else
        {
            $this->login();
        }
    }

    public function updateProfile(){
       
        
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $id = $this->session->userdata('id');
        if(!empty($_POST)){
            $data = array(
                'username' => $name,
                'email' => $email,
                'phone' => $phone,
        
            );
        
            $role = $this->session->userdata('role');
            $result = $this->college_model->updateProfile($id,$data,$role);
            if($result){
                // $this->session->set_userdata('id', $result['id']);
                $this->session->set_userdata('username', $name);
                // $this->session->set_userdata('role', $result['role']);
            
                
                // echo "ok";
                $res = array(
                    'success' => true,
                    'msg' => "Successfully Added");
        
            }else{
                // echo "osk";
                $res = array(
                    'success' => false,
                    'msg' => "Something went wrong");
            }
            echo json_encode($res);
        }else{
            $res = array(
                'success' => false,
                'msg' => "Something went wrong");
                echo json_encode($res);
        }
        
        
    }
    
    public function all_notice_general(){
        $data['notices'] = $this->college_model->fetchNotices('general');
        $this->load->back_template('management/all_notice_general',$data);
    }
    
    
    public function add_notice_general()
    {
        $userid = $this->session->userdata('id');
        
        $this->load->back_template('management/add_notice_general');
    }
  

    
    public function add_professor() {
        $this->load->back_template('management/add_professor');
    }
    
    public function add_prof_insert() {
        $data = array(
                     'firstname' => $this->input->post('prof_name'),
                     'email' => $this->input->post('prof_email'),
                     'mobile' => $this->input->post('mobile'),
                     'gender' => $this->input->post('gender')
                    );
        $add_prof = $this->college_model->add_prof($data);
        if($add_prof) {
            $res = array(
                        'success' => true,
                        'msg' => "Successfully Added");
            echo json_encode($res);
        } else {
            $res = array(
                        'success' => false,
                        'msg' => "Something went wrong");
            echo json_encode($res);
        }
    }
    


    public function all_professors()
    {
        $data['all_prof'] = $this->college_model->fetch_professor();
        $this->load->back_template('management/all_professors', $data);
    }
    
    
 
   
 public function add_leave()
 {
    $data['allstaff'] =  $this->college_model->getAllStaff();
    $this->load->back_template('management/add_leave',$data);
 }
  
    public function add_leaveapplication()
    {
        $regno= $this->input->post('staffid');
        // $regno = $this->session->userdata('regno');
        $from= $this->input->post('from_date');
        $to=$this->input->post('to_date');
        
        $now        = strtotime($to);
        $your_date  = strtotime($from);
        $datediff   = $now - $your_date;
        $days=  floor($datediff / (60 * 60 * 24));
        
        $data=array(
            "employee_id"=>$regno,
            "leaveType"=>$this->input->post('leave_type'),
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
            redirect(base_url()."management/all_leave");
        }
    }
    
    public function all_leave()
    {

     $data['leaves_applications']= $this->college_model->fetch_staff_leaves(); 
     $this->load->back_template('management/all_leaves',$data);
    }

    public function addNoticeGeneral()
    {
        $data = array(
            'content'=>$this->input->post('content'),
            'type'=> "general");
            
            $result = $this->college_model->addNotice($data);
            if($result) {
                redirect(base_url('')."management/all_notice_general");
            } else {
                $res = array(
                    'success'=>false,
                    'msg'=>'Something went wrong.');
                    echo json_encode($res);
                }
    }

   
    
    public function leave_approve($id)
    {
        $id= $this->college_model->approve_emp_leaves($id); 
        if($id)
        {
            redirect(base_url()."management/all_leave");
        }
    }
    
    public function leave_reject($id)
    {
        $id= $this->college_model->reject_emp_leaves($id); 
        if($id)
        {
            redirect(base_url()."management/all_leave");
        }
    }

    public function edit_professor()
    {
        $userid = $this->session->userdata('id');
        if($userid)
        {
            $data['professor_sidebar'] = true;
            $id = $this->uri->segment(3);
            $data['all_prof'] = $this->college_model->fetch_professor_byId($id);
            $this->load->view('management/edit_professor', $data);
        }
        else
        {
            $this->login();
        }
    }
    
    public function edit_prof_update()
    {
        $data = array(
                      'staff_name' => $this->input->post('prof_name'),
                      'staff_email' => $this->input->post('prof_email'),
                      'id' => $this->input->post('id'));
        $result = $this->college_model->update_prof($data);
        if($result)
        {
            $res = array(
                        'success' => true,
                        'msg' => "Successfully updated");
            echo json_encode($res);
        }
        else
        {
            $res = array(
                        'success' => false,
                        'msg' => "Something went wrong");
            echo json_encode($res);
        }        
    }
    
    public function remove_prof()
    {
        $id = $this->input->post('id');
        $remove_prof = $this->college_model->remove_prof($id);
        if($remove_prof)
        {
            $res = array(
                        'success' => true,
                        'msg' => "Successfully Changed");
            echo json_encode($res);
        }
        else
        {
            $res = array(
                        'success' => false,
                        'msg' => "Something went wrong");
            echo json_encode($res);
        }
    }
    
    public function forgot_password()
    {
        $this->load->view('management/forgot_password');
    }
    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        redirect(base_url()."management/login");
    }
    
    //********** Create a webex meeting **********//
    public function createMeeting($class_name, $start, $end, $staff) {
        $postHeaders = array(
            'Content-Type: application/json',
            'Authorization: Bearer OTNkMGM0ZDQtZjBhYi00ZmYzLTg2NmYtZWVhZTBiMDgwNjI0Yzg5OGYxZWUtMjBi_P0A1_0f47edd5-3d38-489b-af68-7312382d1325'
        );
        
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $password = substr(str_shuffle($permitted_chars), 0, 7);
        
        $postData = array(
            'title'=>'Online class for '.$class_name,
            'agenda'=>'This is a online class for'.$class_name,
            'password'=>$password,
            'start'=>$start,
            'end'=>$end,
            'timezone'=>'Asia/Kolkata',
            'enabledAutoRecordMeeting'=>false,
            'allowAnyUserToBeCoHost'=>false
        );
                
        $cURLConnection = curl_init('https://webexapis.com/v1/meetings');
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $postHeaders);
        curl_setopt($cURLConnection, CURLOPT_HEADER, 1);
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        
        $apiResponse = curl_exec($cURLConnection);
        $http_code = curl_getinfo($cURLConnection, CURLINFO_HTTP_CODE);
        curl_close($cURLConnection);
        
        if($http_code == 200) {
            $str = substr($apiResponse, strpos($apiResponse, 'preload')+ 7);
            $jsonArrayResponse = json_decode($str);
            
            return $jsonArrayResponse->webLink;
        } else {
            return false;
        }
    } 
    
    public function payroll()

    {
        $data['emp_payroll']=$this->college_model->fetch_emp_payroll();
        
        $this->load->back_template('management/emp_payroll', $data);
    }


    public function removepayroll(){

        $id = $this->input->post('id');
        if(!empty($id)){
            $remove = $this->college_model->removepayroll($id);
        

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

    
    public function add_emp_payroll()
    {
         $data['all_employee']=$this->college_model->fetch_emp();
        // print_r($data['all_employee']);die;
         $this->load->back_template('management/add_emp_payroll',$data); 
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
                    redirect(base_url()."management/payroll") ; 
                  }
                // print_r($data);die;
    }
    
    public function bulk_payroll()
    {
      $this->load->back_template('management/payroll_bulk');    
    }
    
    public function importFile()
    {
        $path = 'uploads/payrolls/';
        require_once APPPATH ."/third_party/PHPExcel.php";
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'xlsx|xls';
        $config['remove_spaces'] = true;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config); 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('uploadFile'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
        }
        if (empty($error))
        {
            if (!empty($data['upload_data']['file_name']))
            {
                $import_xls_file = $data['upload_data']['file_name'];
            }
            else
            {
                $import_xls_file = 0;
            }
            $inputFileName = $path . $import_xls_file; 
            try
            {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $flag = true;
                $i = 0;
                $date=date("Y/m/d");
                // $result = array();
                // $inserdata[$i] = array();
                foreach ($allDataInSheet as $value)
                {
                    
                        // $dataa = array('employee_id' =>   $value['A'], 'emp_name' =>  $inserdata[$i]['emp_name']= $value['B'],'branch' =>  $inserdata[$i]['branch']= $value['C'],'department' =>  $inserdata[$i]['department'] = $value['D'],'designation' =>  $inserdata[$i]['designation'] = $value['E'],'sal_structure' =>  $inserdata[$i]['sal_structure'] = $value['F'],'nod' =>  $inserdata[$i]['nod'] = $value['G'],'absent' =>  $inserdata[$i]['absent'] = $value['H'],'month' =>  $inserdata[$i]['month'] = $value['I'],'year' =>  $inserdata[$i]['year'] = $value['J'],'basic' =>  $inserdata[$i]['basic'] = $value['K'],'hra' =>  $inserdata[$i]['hra'] = $value['L'],'ta' =>  $inserdata[$i] = $value['M'],'ma' =>  $inserdata[$i] = $value['N'],'lta' =>  $inserdata[$i] = $value['O'],'conveyance' =>  $inserdata[$i] = $value['P'],'pt_deductions' =>  $inserdata[$i] = $value['Q'],'tds_deductions' =>  $inserdata[$i]['tds_deductions'] = $value['R'],'total_deduction' =>  $inserdata[$i]['total_deduction'] = $value['S'],'net_salary' =>  $inserdata[$i]['net_salary'] = $value['T'],'total_earning' =>  $inserdata[$i]['total_earning'] = $value['U'],'pay_date' => $date,'status' => 1,'created_at' => $date,'updated_at' => $date); 
                        if($value['A'] !=''){
                        $inserdata[$i]['employee_id'] = $value['A'];
                        $inserdata[$i]['emp_name'] = $value['B'];
                        $inserdata[$i]['branch'] = $value['C'];
                        $inserdata[$i]['department'] = $value['D'];
                        }
                
                   
                    $i++;
                    
                    
                }
                $result = $this->college_model->import_payrolls_xls($inserdata);  
                if ($result)
                {
                    $res = array('success' => true, 'msg' => "Successfully Imported");
                    echo json_encode($res);
                }
                else
                {
                    $res = array('success' => false, 'msg' => "Something went wrong please went wrong");
                    echo json_encode($res);
                }
              
            }
            catch(Exception $e)
            {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
                $res = array('success' => false, 'msg' => $e);
                echo json_encode($res);
            }
        }
        else
        {
            $res = array('success' => false, 'msg' => $error['error']);
            echo json_encode($res);
        }
    }
 
     public function import_payroll_cpy() 
    {
      //  echo "hi1";
          $path='payroll/';      
        require_once APPPATH ."/third_party/PHPExcel.php";
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'xlsx|xls'; 
        $config['remove_spaces'] = true;
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config); 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('bulk_payroll'))
        {
            
            //echo "hi2";
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
        }
        if (empty($error))
        {
            if (!empty($data['upload_data']['file_name']))
            {
                $import_xls_file = $data['upload_data']['file_name'];
            }
            else
            {
                $import_xls_file = 0;
            }
            $inputFileName = $path . $import_xls_file; 
            try
            {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                // echo '<pre>';/
                // print_r($allDataInSheet);
                // array_pop($allDataInSheet);
                // exit();
                $flag = true;
                $i = 0;
               $date=date("Y/m/d");
                foreach ($allDataInSheet as $value)
                {
                    // echo '<pre>';
                    // print_r($value);
                    if(!empty($value)){
                        
                        $dataa = array('employee_id' =>  $inserdata[$i]['employee_id'] =  $value['A'], 'emp_name' =>  $inserdata[$i]['emp_name']= $value['B'],'branch' =>  $inserdata[$i]['branch']= $value['C'],'department' =>  $inserdata[$i]['department']= $value['D'],'designation' =>  $inserdata[$i]['designation'] = $value['E'],'sal_structure' =>  $inserdata[$i]['sal_structure'] = $value['F'],'nod' =>  $inserdata[$i]['nod'] = $value['G'],'absent' =>  $inserdata[$i]['absent']= $value['H'],'month' =>  $inserdata[$i]['month'] = $value['I'],'year' =>  $inserdata[$i]['year'] = $value['J'],'basic' =>  $inserdata[$i]['basic'] = $value['K'],'hra' =>  $inserdata[$i]['hra'] = $value['L'],'ta' =>  $inserdata[$i]['ta'] = $value['M'],'ma' =>  $inserdata[$i]['ma']= $value['N'],'lta' =>  $inserdata[$i]['lta'] = $value['O'],'conveyance' =>  $inserdata[$i] ['conveyance']= $value['P'],'pt_deductions' =>  $inserdata[$i]['pt_deductions'] = $value['Q'],'tds_deductions' =>  $inserdata[$i] = $value['R'],'total_deduction' =>  $inserdata[$i] = $value['S'],'net_salary' =>  $inserdata[$i] = $value['T'],'total_earning' =>  $inserdata[$i] = $value['U'],'pay_date' => $date,'status' => 1,'created_at' => $date,'updated_at' => $date); 
                        
                        $result = $this->college_model->import_payrolls_xls($dataa);  
                        $i++;
                    }
                
                }
                if ($result)
                {
                   redirect(base_url()."management/all_emp_payroll");
                }
                else
                {
                    $res = array('success' => false, 'msg' => "Something went wrong please went wrong");
                    echo json_encode($res);
                }
              
            }
            catch(Exception $e)
            {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
                $res = array('success' => false, 'msg' => $e);
                echo json_encode($res);
            }
        }
        else
        {
            $res = array('success' => false, 'msg' => $error['error']);
            echo json_encode($res);
        }
    }

    public function holidays()
    {
         $data['all_holidays']=$this->college_model->fetch_holidays();  
         $this->load->back_template('management/list_holidays',$data);
    }
    

    public function add_holiday()
    {
       $this->load->back_template('management/add_holidays');    
    }
    
    public function insert_holidays()
    {
        $user= $this->session->userdata('id');
        $currentdate=date("Y/m/d");
        $data=array(
                   "year"=>$this->input->post('year'),
                   "day"=>$this->input->post('day'),
                   "date"=>$this->input->post('date'),
                   "holiday"=>$this->input->post('holiday'),
                   "added_by"=>$user,
                   "created_at"=>$currentdate,
                   "updated_at"=>$currentdate
                   ); 
                   
                  $id =$this->college_model->holidays_insert($data); 
                  if($id)
                  {
                      redirect(base_url()."management/holidays");
                  }
    }
    
    
    
    
    
    

    
   
    

}

?>