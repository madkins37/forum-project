<?php
class Thread_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function get_thread($thread)
        {
          $query = $this->db->select('threadTitle, threadDescription, userName, threadDateCreated')
      											->from('threads')
      											->join('users','userID = threadUserID')
                            ->where("threadId = 'intval($threadId)'")
      											->get();
        }

        public function get_all_threads($topic)
        {
          $query = $this->db->select('threadTitle, threadDescription, userName, threadDateCreated')
      											->from('threads')
      											->join('users','userID = threadUserID')
                            ->where("threadTopicId = " .$topic)
      											->get();

          return $query->result();
        }
        public function get_most_recent()
        {
          $query = $this->db->select('threadID, threadTitle, threadDescription, userName, threadDateCreated')
                            ->from('threads')
                            ->join('users', 'userID = threadUserID')
                            ->order_by('threadDateCreated', 'DESC')
                            ->limit('5')
                            ->get();

          return $query->result();
        }
}
?>
