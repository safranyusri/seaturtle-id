<?php

class M_allspecies extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                parent::__construct();
        }

		public function get_all_characters()
		{
			$this->db->select('*');
			$this->db->from('characterspec');
			$this->db->join('character_cat', 'character_cat.charactercat_id = characterspec.charactercat_id', 'left');			
			$this->db->join('species', 'species.spec_id = characterspec.spec_id','right');
			$query = $this->db->get();
			return $query->result_array();		
		}		
		
}

?>