<?php

class Welcome extends CI_Controller {

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
				$data['seaturtles'] = $this->M_penyu->get_all_turtle();
				$data['title'] = 'Sea Turtle Identification Guide';
				$this->load->view('header', $data);
				$this->load->view('nav', $data);
				$this->load->view('welcome_message', $data);
				$this->load->view('footer', $data);
		}
	
		public function get_turtle($spec_id)
        {

                $data['turtle'] = $this->M_penyu->get_turtle($spec_id);	
                $data['chars'] = $this->M_penyu->get_turtle_characters($spec_id);
				$data['title'] = 'Turtle id';
				$this->load->view('header', $data);
				$this->load->view('nav', $data);
				$this->load->view('get_turtle', $data);
				$this->load->view('footer', $data);
				
		}
		
		public function idkey()
        {

                $data['idkeys'] = $this->M_penyu->get_idkey();
				$data['count'] = $this->M_penyu->get_idkey_count();	
				$data['title'] = 'Identification key';
				$this->load->view('header', $data);
				$this->load->view('nav', $data);
				$this->load->view('idkey', $data);
				$this->load->view('footer', $data);
				
		}
		public function characters()
		{
				$data['character_cats'] = $this->M_penyu->get_all_character_cats();
				$data['title'] = 'Identification by characters';
				
				$this->load->view('header', $data);
				$this->load->view('nav', $data);
				$this->load->view('character_cat', $data);
				$this->load->view('footer', $data);
		}
	
		public function get_character_cat($charactercat_id)
        {

                $data['charcats'] = $this->M_penyu->get_character_cat($charactercat_id);
				$data['specchars'] = $this->M_penyu->get_turtle_characters_by_cat($charactercat_id);
				$data['title'] = 'Turtle Chacracters';

				$this->load->view('header', $data);
				$this->load->view('chars', $data);
				$this->load->view('footer', $data);

				
		}
		
		public function get_turtle_characters_by_cat($charactercat_id)
        {

                $data['specchars'] = $this->M_penyu->get_turtle_characters_by_cat($charactercat_id);	
				$data['title'] = 'Turtle id';
				$this->load->view('header', $data);
				$this->load->view('specchars', $data);
				$this->load->view('footer', $data);

				
		}
		
		public function table()
		{
	
				$data['title'] = 'Turtle Character Table';				
				$this->load->view('header', $data);
				$this->load->view('nav', $data);
				$this->load->view('table', $data);
				$this->load->view('footer', $data);			
		}
		public function table_page()
		{
                          // Datatables Variables
			  $draw = intval($this->input->get("draw"));
			  $start = intval($this->input->get("start"));
			  $length = intval($this->input->get("length"));
				
				$chars = $this->M_penyu->get_all_turtle_characters();
				
				$data = array();
				
				          foreach($chars as $char) 
						  {
							   $data[] = array(
									$char['char_id'],
									$char['charactercat_name'],
									$char['characterspec_des'],
									$char['spec_vern'],
									$char['spec_name'],
									$char['character_pic1']
							   );
						  }
				
				  $output = array(
					   "draw" => $draw,
						// "recordsTotal" => $chars->num_rows(),
						 //"recordsFiltered" => $chars->num_rows(),
						 "data" => $data
		            );
				  echo json_encode($output);
				  exit();
	
		}		
}
