<?php 

	class Retrieve_Courses extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		
		public function getCourses(){
			$sql = 'SELECT * FROM tasub.course';
			$query = $this->db->query($sql, NULL);
			
			if($query){
				$courses = $query->result_array();
				return $courses; 
			}else{
				return false; //generate error and store it in session
			}
		}
		
		public function getCourseForProfessor($username){
			
			$verifyUser = 'SELECT * FROM tasub.user where username = ?';
			$query = $this->db->query($verifyUser, array($username));
			$type_id = $query->row()->account_type; 
			
			$type = 'SELECT account_type_name FROM tasub.account_type where account_type_id = ?';
			$typeQuery = $this->db->query($type, array($type_id));
			$type_name = $typeQuery->row()->account_type_name; 
			
			if($type_name == 'INSTRUCTOR'){
				//get courses here
				$courseSQL = 'SELECT * FROM tasub.course where username = ?';
				$courseQuery = $this->db->query(courseSQL, array($username));
				$courses = $courseQuery->result_array();
				return $courses; 
			}else{
				return false; 
				//user entered was not a professor, generate error and store in session
				//return to previous page
			}
		}
	}

?>
