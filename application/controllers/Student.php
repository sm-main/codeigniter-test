<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller
{
	function __construct() {
		parent::__construct();
		$this->load->model('Student_info');
	}
	function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Username', 'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('passingYear', 'PassingYear', 'required|min_length[4]');
		$this->form_validation->set_rules('gender', 'Gender', 'required|min_length[4]');
		$this->form_validation->set_rules('intrests[]', '', 'callback_check_checkboxes');



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('createInfo');
		}
 		else {
		$data = array(
		'Student_name' => $this->input->post('name'),
		'Student_address' => $this->input->post('address'),
		'Student_passing_year' => $this->input->post('passingYear'),
		'Student_gender' => $this->input->post('gender'),
		'Student_interests' => $this->input->post('intrests[]'),



		
		);
		$this->student_info->form_insert($data);
		$data['message'] = 'Data Inserted Successfully';
		$this->load->view('createInfo', $data);
	    }
    }
    function check_checkboxes()
    {
    	if($this->input->post('interests[]'))
    	{
    		return TRUE;
    	}
    	else
    	{
    		$error='Please Select your Interests';
    		$this->form_validation->set_message('check_checkboxes',$error);
    		return FALSE;
    	}
    }
	
	public function show()
	{
		$data['query']=$this->Student_info->view_student();
		$this->load->view('studentStuff',$data);
		//$this->load->view('studentStuff.php');
	}
	public function create()
	{
		$this->load->helper('form');
		$this->load->view('createInfo');
	}	
}
	
