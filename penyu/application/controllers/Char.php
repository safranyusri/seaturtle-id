<?php

class Char extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->model('M_penyu');
				$this->load->helper('url');
				$this->load->helper('text');
				$this->load->helper('form');
        }


		public function index()
		{
				$data['character_cats'] = $this->M_penyu->get_all_character_cats();
				$this->load->view('character_cat', $data);
		}
	
		public function get_character_cat($charactercat_id)
        {

                $data['charcats'] = $this->M_penyu->get_character_cat($charactercat_id);
				$data['specchars'] = $this->M_penyu->get_turtle_characters_by_cat($charactercat_id);
				$data['title'] = 'Turtle Chacracters';

				$this->load->view('chars', $data);

				
		}
		
		public function get_turtle_characters_by_cat($charactercat_id)
        {

                $data['specchars'] = $this->M_penyu->get_turtle_characters_by_cat($charactercat_id);	
				$data['title'] = 'Turtle id';
				$this->load->view('specchars', $data);

				
		}		
	
}
