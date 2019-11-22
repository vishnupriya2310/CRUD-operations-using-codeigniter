<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
       public function __construct() {
        parent::__construct();
        //$this->load->model('studentmodel');
       }
	public function index()
	{
            
	$query=$this->db->query("select * from students where status='0'");
	$get= $query->result();
              /*$data = array(
                    'Student_Name' ,
                    'Student_Email' ,
                    'Student_Mobile',
                    'Student_Address' 
                );
            
    $data1['record']=$this->studentmodel->displayrecords($data);*/
    //$data['record']=$this->studentmodel->displayrecords($data);
        $data=array(
            'record'=>$get
        );
         $this->load->view('View', $data);
//      echo json_encode($get);die;
	}

        public function add() {
             if($this->input->post('sname')){
              $sname= $this->input->post('sname');
                $semail = $this->input->post('semail');
                $smobile = $this->input->post('smobile');
                $saddress= $this->input->post('saddress');
                $data1 = array(
                    'Student_Name' => $sname,
                    'Student_Email' => $semail,
                    'Student_Mobile' => $smobile,
                    'Student_Address' => $saddress
                );
                
//                echo json_encode($data1); die;
             $records= $this->db->insert('students', $data1);
                $this->session->set_flashdata('success', ' Students Details Added successfully');
                 $this->load->view('View');
                 redirect('Welcome/index');
           // echo json_encode($records); die;
         }   else{
             $this->load->view('studentview');
         }
        }
        
        public function edit($id=0){
            if($this->input->post('sname')){
              $sname= $this->input->post('sname');
                $semail = $this->input->post('semail');
                $smobile = $this->input->post('smobile');
                $saddress= $this->input->post('saddress');
                $data1 = array(
                    'Student_Name' => $sname,
                    'Student_Email' => $semail,
                    'Student_Mobile' => $smobile,
                    'Student_Address' => $saddress
                );
                $this->db->where('Student_Id', $id);
                $this->db->update('students', $data1);
                $this->session->set_flashdata('success', ' Students Details Updated successfully');
                redirect('Welcome/index');
        }
        else{
            $query=$this->db->query("select * from students where Student_Id=$id");
	$get= $query->row();
        $data=array(
            'record'=>$get
        );
       // echo json_encode($data);die;
            $this->load->view('Edit',$data);
        }
        
     
}
         public function delete($id=0){                
        $data=array(
            'status'=>0
        );
        
        $this->db->where('Student_Id', $id);
                $this->db->update('students', $data);
        redirect('Welcome');
         }
         
         
       /*   public function search($sname=0){                
         $this->db->where('Student_Name', $sname);
        
        $this->db->where('Student_Id', $id);
                $this->db->update('students', $data);
        redirect('Welcome');
         
         }*/
}

