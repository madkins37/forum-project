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
      											->join('users','userID = topicCreatedByUserID')
                            ->where("threadId = 'intval($threadId)'")
      											->get();
        }

        public function get_all_threads($topic)
        {
          $query = $this->db->select('threadTitle, threadDescription, userName, threadDateCreated')
      											->from('threads')
      											->join('users','userID = topicCreatedByUserID')
                            ->where("threadTopicId = 'intval($topic)'")
      											->get();

          return $query->result();
        }
}
?>
