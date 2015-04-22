<?php 
    class Comments_model extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        public function insert($posted_about_id, $posted_by_id, $score, $description) {
            $sql = 'INSERT into tasub.comments(posted_by, posted_about, score, description) VALUES(?, ?, ?, ?)';

            $query = $this->db->query($sql, array($posted_by_id, $posted_about_id, $score, $description));
        }
    }
?>