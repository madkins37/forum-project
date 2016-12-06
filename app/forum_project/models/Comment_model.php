<?php
class Comment_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

public function get_replies($threadID, $commentID){


    $query = $this->db->select('*')
              ->from('comments')
              ->where('commentThreadID =' .$threadID .' AND commentReplyID =' .$commentID )
              ->join('users','userID = commentUserID')

              ->order_by('commentDateCreated','ASC')
              ->get();

    $result = $query->result_array();


  return $result;

  }


}
?>
