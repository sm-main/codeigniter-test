<?php 
class Student_info extends CI_Model{
	function __construct()
	{
		parent::__construct();
		
	}
	function form_add($data)
	{
		$this->dbforge->add_field(array(
			'student_id'=>array(
				'type'=>'INT',
				'constraint'=>5,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
				),
			'student_name'=>array(
				'type'=>'VARCHAR',
				'constraint'=>'100'
				),
			'student_address'=>array(
				'type'=>'TEXT',
				'null'=>TRUE
				),
			'student_gender'=>array(
				'type'=>'VARCHAR',
				'constraint'=>'10'
				),
			'student_passing_year'=>array(
				'type'=>'INT',
				'constraint'=>4,
				'unsigned'=>TRUE,
				),
			'student_interest'=>array(
				'type'=>'VARCHAR',
				'constraint'=>100

				)),
			$this->dbforge->create_table('student_table')

			);

	}
	public function form_insert($data){
		$this->load->database();
		$this->db->insert('student_table',$data);

	}
	public function view_student()
	{
		$this->load->database();
		$query = $this->db->get('student_table');
    	return $query->result();
	}

}
?>