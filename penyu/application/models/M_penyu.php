<?php

class M_penyu extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                parent::__construct();
        }

//fungsi untuk ambil data seluruh jenis penyu
		public function get_all_turtle()
		{
			$this->db->select('*');
			$this->db->from('species');
			$query = $this->db->get();
			return $query->result_array();		
		}

//fungsi untuk ambil data penyu berdasarkan spesies id		
		public function get_turtle($spec_id)
		{
			$this->db->select('*');
			$this->db->from('species');
			$this->db->where('spec_id',$spec_id);			
			$query = $this->db->get();
			return $query->row_array();	
		}		

//fungsi untk ambil data karakter penyu berdasarkan spesies id		
		public function get_turtle_characters($spec_id)
		{
			$this->db->select('*');
			$this->db->from('characterspec');
			$this->db->join('character_cat', 'character_cat.charactercat_id = characterspec.charactercat_id');
			$this->db->where('spec_id',$spec_id);			
			$query = $this->db->get();
			return $query->result_array();		
		}
		
//fungsi untuk ambil data semua kategori karakter
		public function get_all_character_cats()
		{
			$this->db->select('*');
			$this->db->from('character_cat');
			$query = $this->db->get();
			return $query->result_array();		
		}
		
//fungsi untuk ambil data kategori karakter	berdasarkan id
		public function get_character_cat($charactercat_id)
		{
			$this->db->select('*');
			$this->db->from('character_cat');
			$this->db->where('charactercat_id',$charactercat_id);
			$query = $this->db->get();
			return $query->row_array();		
		}		

//fungsi untk ambil semua data karakter penyu 
		public function get_all_turtle_characters()
		{
			$this->db->select('*');
			$this->db->from('characterspec');
			$this->db->join('character_cat', 'character_cat.charactercat_id = characterspec.charactercat_id');
			$this->db->join('species', 'species.spec_id = characterspec.spec_id');			
			$query = $this->db->get();
			return $query->result_array();	
			
		}
		
//fungsi untk ambil data karakter penyu berdasarkan karakter id		
		public function get_turtle_characters_by_cat($charactercat_id)
		{
			$this->db->select('*');
			$this->db->from('characterspec');
			$this->db->join('character_cat', 'character_cat.charactercat_id = characterspec.charactercat_id');
			$this->db->where('characterspec.charactercat_id',$charactercat_id);			
			$query = $this->db->get();
			return $query->result_array();		
		}					

//fungsi untuk ambil data langkah-langkah identifikasi penyu		
		public function get_idkey()
		{
			$this->db->select('*');
			$this->db->from('idkey');
			$this->db->join('characterspec', 'characterspec.step_id = idkey.step_id');	
			$this->db->join('character_cat', 'character_cat.charactercat_id = characterspec.charactercat_id');
			$this->db->order_by('idkey.step_id', 'ASC');
			$query = $this->db->get();
			return $query->result_array();		
		}
		
//fungsi untuk ambil data maksimum langkah-langkah identifikasi penyu		
    	public function get_idkey_count() 
		{
        	return $this->db->count_all("idkey");
    	}				
}

?>