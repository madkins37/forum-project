<?php
class Topic_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function get_topic_title($topicID)
        {
          $query = $this->db->select('topicTitle')
                            ->from('topics')
                            ->where('topicID = ' .$topicID)
                            ->get();

          return $query->result();
        }

        public function get_all_topics()
        {
          $query = $this->db->select('topicID, topicTitle, topicDescription, userName, topicDateCreated')
      											->from('topics')
      											->join('users','userID = topicCreatedByUserID')
      											->get();

          return $query->result();
        }
}
?>
