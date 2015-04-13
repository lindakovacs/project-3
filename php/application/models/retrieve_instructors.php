<?php 

	class Retrieve_instructors extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		
		public function getCourses(){
			$sql = 'SELECT * FROM tasub.course';
			$query = $this->db->query($sql, NULL);
			
			if($query){
				return $this->db->affected_rows(); 
			}else{
				return false; //generate error and store it in session
			}
		}
		
		public function getCourseForProfessor($username){
			
			$verifyUser = 'SELECT * FROM tasub.user where username = ?';
			$query = $this->db->query($verifyUser, array($username));
			$type_id = $query->row()->account_type_id; 
			
			if($type_id){
				//get courses here
				$courseSQL = 'SELECT * FROM tasub.course where username = ?';
				$courseQuery = $this->db->query(courseSQL, array($username));
				$courses = $this->db->affected_rows();
			}else{
				return false; 
				//user entered was not a professor, generate error and store in session
				//return to previous page
			}
		}
	}

?>