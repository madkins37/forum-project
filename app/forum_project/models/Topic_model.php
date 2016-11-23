class Topic_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_all_topics()
        {
          $query = $this->db->select('topicTitle, topicDescription, userName, topicDateCreated')
      											->from('topics')
      											->join('users','userID = topicCreatedByUserID')
      											->get();

          return $query->result();
        }
}
